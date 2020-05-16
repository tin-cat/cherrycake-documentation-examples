<?php

namespace CherrycakeApp;

const EXAMPLESBROWSER_BLOCK_FILE = 0;
const EXAMPLESBROWSER_BLOCK_IFRAME = 1;

const EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP = 0;
const EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML = 1;
const EXAMPLESBROWSER_BLOCK_FILE_TYPE_CSS = 2;
const EXAMPLESBROWSER_BLOCK_FILE_TYPE_JAVASCRIPT = 3;

class ExamplesBrowser extends \Cherrycake\Module {
	protected $isConfigFile = true;

	protected $dependentCoreModules = [
		"Errors",
        "HtmlDocument"
    ];

	function init() {
        if (!parent::init())
            return false;
        global $e;
        $e->Css->addFileToSet("main", "examplesBrowser.css");
		$e->Css->addFileToSet("main", "prism.css");
		$e->Javascript->addFileToSet("main", "prism.js");
        return true;
    }
	
    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "examplesBrowserHome",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ExamplesBrowser",
                "methodName" => "home",
                "request" => new \Cherrycake\Request()
			])
        );

		$e->Actions->mapAction(
            "examplesBrowserView",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ExamplesBrowser",
                "methodName" => "view",
                "request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "example"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING,
                            "name" => "example",
                            "securityRules" => [
                                \Cherrycake\SECURITY_RULE_NOT_EMPTY
                            ]
                        ])
                    ]
				])
			])
        );
    }

    function home() {
        global $e;

		$html = "<ul class=\"examples\">";
		foreach ($this->getConfig("examples") as $actionName => $example) {
			$html .=
				"<li>".
					"<a href=\"".
						$e->Actions->getAction("examplesBrowserView")->request->buildUrl([
							"parameterValues" => [
								"example" => $actionName
							]
						]).
					"\">".
						$example["title"].
					"</a>".
				"</li>";
		}
		$html .= "</ul>";
        
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => 
				$e->HtmlDocument->header().
				$html.
				$e->HtmlDocument->footer()
        ]));
    }

	function view($request) {
		global $e;

		if (!isset($this->getConfig("examples")[$request->example])) {
			$e->Errors->trigger(\Cherrycake\ERROR_APP, [
				"errorDescription" => "Unknown example",
				"errorVariables" => [
					"example" => $request->example
				]
			]);
			die;
		}

		$example = $this->getConfig("examples")[$request->example];

		$e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => 
				$e->HtmlDocument->header().
				$this->buildExample($example).
				$e->HtmlDocument->footer()
        ]));
	}

	function buildExample($p) {
		global $e;
		return
			"<div id=\"exampleHeader\">".
				"<a class=\"logo\" href=\"https://cherrycake.io\"></a>".
				"<div class=\"text\">".
					"<div class=\"title\"><a href=\"https://cherrycake.io\">Cherrycake documentation examples</a></div>".
					"<div class=\"subTitle\">".$p["title"]."</div>".
				"</div>".
			"</div>".
			"<div id=\"example\">".
				implode(array_map(function($block){
					return $this->buildExampleBlock($block);
				}, $p["blocks"])).
			"</div>";
	}

	function buildExampleBlock($block) {
		global $e;

		if ($block["verticalBlocks"] ?? false) {
			return
				"<div class=\"verticalBlocks\">".
					implode(array_map(function($block){
						return $this->buildExampleBlock($block);
					}, $block["verticalBlocks"])).
				"</div>";
		}

		switch ($block["type"]) {
			case EXAMPLESBROWSER_BLOCK_FILE:

				if (!file_exists(APP_DIR."/".$block["fileName"])) {
					$e->Errors->trigger(\Cherrycake\ERROR_APP, [
						"errorDescription" => "File not found",
						"errorVariables" => [
							"fileName" => APP_DIR."/".$block["fileName"]
						]
					]);
				}
				$title = $block["fileName"];
				$cssClass = [
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP => "code php",
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML => "code html",
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_CSS => "code css",
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_JAVASCRIPT => "code javascript"
				][$block["fileType"]];
			
				$codeClass = [
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP => "language-php",
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML => "language-html",
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_CSS => "language-css",
					EXAMPLESBROWSER_BLOCK_FILE_TYPE_JAVASCRIPT => "language-javascript"
				][$block["fileType"]];

				$id = strtolower(str_replace([".", "/"], "-", $block["fileName"]));
				
				$content =
					"<pre".
						" id=\"".$id."\"".
						" class=\"".
							"line-numbers".
							" linkable-line-numbers".
							" content".
						"\"".
						($block["lineHighlight"] ?? false ? " data-line=\"".$block["lineHighlight"]."\"" : null).
					">".
						"<code".
							" class=\"".
								$codeClass.
							"\"".
						">".
							htmlentities(
								file_get_contents(APP_DIR."/".$block["fileName"])
							).
						"</code>".
					"</pre>";

				break;
			case EXAMPLESBROWSER_BLOCK_IFRAME:

				$url = $title = $e->Actions->getAction($block["actionName"])->request->buildUrl([
					"parameterValues" => $block["parameterValues"] ?? false
				]);
				$cssClass = "iframe";
				$content = "<iframe src=\"".$url."\"></iframe>";

				break;
		}
		return
			"<div class=\"cell ".$cssClass."\">".
				"<div class=\"title\">".
					$title.
				"</div>".
				$content.
			"</div>";
	}
}