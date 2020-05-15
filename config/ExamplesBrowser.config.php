<?php

namespace CherrycakeApp;

$ExamplesBrowserConfig = [
    "examples" => [
		"helloWorld" => [
			"title" => "Hello World",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/HelloWorld/HelloWorld.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "helloWorld"
				]
			]
		],
		"modulesGuideConfigurationFile" => [
			"title" => "Modules configuration file",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ModulesGuide/ModulesGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "config/ModulesGuide.config.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "modulesGuideConfigurationFile"
				]
			]
		],
		"actionsGuideVariablePathComponents" => [
			"title" => "Variable path components in actions",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ActionsGuide/ActionsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "actionsGuideVariablePathComponents",
					"parameterValues" => [
						"productId" => 4739
					]
				]
			]
		],
		"actionsGuideAcceptGetOrPostParameters" => [
			"title" => "Accept GET or POST parameters in actions",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ActionsGuide/ActionsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "actionsGuideAcceptGetOrPostParameters",
					"parameterValues" => [
						"userId" => 381
					]
				]
			]
		],
		"actionsGuideCachedAction" => [
			"title" => "Cached actions",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ActionsGuide/ActionsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "actionsGuideCachedAction"
				]
			]
		],
		"patternsGuidePassingVariables" => [
			"title" => "Passing variables to a pattern",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/PatternsGuide/PatternsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML,
					"fileName" => "patterns/PatternsGuide/PassingVariables.html"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "patternsGuidePassingVariables"
				]
			]
		],
		"patternsGuideNestedPatterns" => [
			"title" => "Nested patterns",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/PatternsGuide/PatternsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML,
					"fileName" => "patterns/PatternsGuide/NestedPatterns.html"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML,
					"fileName" => "patterns/PatternsGuide/header.html"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML,
					"fileName" => "patterns/PatternsGuide/footer.html"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "patternsGuideNestedPatterns"
				]
			]
		],
		"patternsGuideCachedPatterns" => [
			"title" => "Cached patterns",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/PatternsGuide/PatternsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML,
					"fileName" => "patterns/PatternsGuide/CachedPattern.html"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "patternsGuideCachedPatterns"
				]
			]
		],
		"databaseGuideBasicQueries" => [
			"title" => "Database basic queries",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/DatabaseGuide/DatabaseGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "databaseGuideBasicQueries"
				]
			]
		],
		"databaseGuideCachedQueries" => [
			"title" => "Database cached queries",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/DatabaseGuide/DatabaseGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "databaseGuideCachedQueries"
				]
			]
		],
		"itemsGuideBasicUsage" => [
			"title" => "Items basic usage",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideBasicUsage"
				]
			]
		],
		"itemsGuideItemLists" => [
			"title" => "Item lists",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideItemLists"
				]
			]
		],
		"itemsGuideIterate" => [
			"title" => "Items iterate",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideIterate"
				]
			]
		],
		"itemsGuideIterateInPattern" => [
			"title" => "Items iterate in a pattern",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_HTML,
					"fileName" => "patterns/ItemsGuide/IterateInPattern.html"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideIterateInPattern"
				]
			]
		],
		"itemsGuideCustomFilters" => [
			"title" => "Items custom filters",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideCustomFilters"
				]
			]
		],
		"itemsGuideCustomOrdering" => [
			"title" => "Items custom ordering",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideCustomOrdering"
				]
			]
		],
		"itemsGuideFiltersAndOrdering" => [
			"title" => "Items mixing filters and ordering",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideFiltersAndOrdering"
				]
			]
		],
		"itemsGuideRelationships" => [
			"title" => "Items with relationships",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideRelationships"
				]
			]
		],
		"itemsGuideFiltersWithRelationships" => [
			"title" => "Items custom filtering with relationships",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/ItemsGuide/ItemsGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "itemsGuideFiltersWithRelationships"
				]
			]
		],
		"cssAndJavascriptBasicExample" => [
			"title" => "CSS And Javascript example",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/CssAndJavascriptGuide/CssAndJavascriptGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "config/Css.config.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_CSS,
					"fileName" => "css/base.css"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "cssAndJavascriptBasicExample"
				]
			]
		],
		"sessionGuideExample" => [
			"title" => "Session example",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/SessionGuide/SessionGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "sessionGuideExample"
				]
			]
		],
		"loginGuideHome" => [
			"title" => "Creating a complete login workflow",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "modules/LoginGuide/LoginGuide.class.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "loginGuideHome"
				]
			]
		]
	]
];