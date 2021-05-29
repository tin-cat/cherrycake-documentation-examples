<?php

namespace CherrycakeApp\ExamplesBrowser;

const EXAMPLESBROWSER_BLOCK_FILE = 0;
const EXAMPLESBROWSER_BLOCK_IFRAME = 1;
const EXAMPLESBROWSER_BLOCK_HTML = 2;

const EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP = 0;
const EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML = 1;
const EXAMPLESBROWSER_BLOCK_FILE_TYPE_CSS = 2;
const EXAMPLESBROWSER_BLOCK_FILE_TYPE_JAVASCRIPT = 3;

class ExamplesBrowser extends \Cherrycake\Module {
	protected $isConfigFile = true;

	protected $dependentCoreModules = [
		"Errors",
        "HtmlDocument",
		"SystemLog",
		"Locale",
		"Stats"
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
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ExamplesBrowser",
                "methodName" => "home",
                "request" => new \Cherrycake\Actions\Request()
			])
        );

		$e->Actions->mapAction(
            "examplesBrowserView",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ExamplesBrowser",
                "methodName" => "view",
                "request" => new \Cherrycake\Actions\Request([
					"pathComponents" => [
						new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "example"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
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

		$e->Output->setResponse(new \Cherrycake\Actions\Response([
            "code" => \Cherrycake\Output\RESPONSE_REDIRECT_FOUND,
            "url" => $e->Actions->getAction("examplesBrowserView")->request->buildUrl([
				"parameterValues" => [
					"example" => array_keys($this->getConfig("examples"))[0]
				]
			])
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

		$e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" =>
				$e->HtmlDocument->header().
				$this->buildExample($example).
				$e->HtmlDocument->footer()
        ]));
	}

	function buildExample($p) {
		global $e;

		$selectOptions =
			"<optgroup>".
				"<option".
					" value=\"https://cherrycake.io\"".
				">".
					"Cherrycake documentation".
				"</option>".
				"<option".
					" value=\"https://github.com/tin-cat/cherrycake-documentation-examples\"".
				">".
					"Examples GitHub repository".
				"</option>".
			"</optgroup>".
			"<optgroup>";

		foreach ($this->getConfig("examples") as $key => $example) {
			$selectOptions .=
				"<option".
					($p["title"] == $example["title"] ? " selected" : null).
					" value=\"".
						$e->Actions->getAction("examplesBrowserView")->request->buildUrl([
							"parameterValues" => [
								"example" => $key
							]
						]).
					"\"".
				">".
					$example["title"].
				"</option>";
		}
		$selectOptions .= "</optgroup>";

		return
			"<div id=\"exampleHeader\">".
				"<div class=\"left\">".
					"<select onchange=\"document.location=this.value;\" class=\"mainMenu\">".$selectOptions."</select>".
					"<a class=\"logo\" href=\"https://cherrycake.io\"></a>".
					"<div class=\"text\">".
						"<a class=\"title\" href=\"https://cherrycake.io\">Cherrycake examples</a> version 1.x".
						"<div class=\"subTitle\">".$p["title"]."</div>".
					"</div>".
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
			case EXAMPLESBROWSER_BLOCK_HTML:
				$title = $block["title"];
				$cssClass = "html";
				$content = "<div class=\"content\">".$block["html"]."</div>";
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
