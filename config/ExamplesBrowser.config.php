<?php

namespace CherrycakeApp\ExamplesBrowser;

$ExamplesBrowserConfig = [
    "examples" => [
		"helloWorld" => [
			"title" => "Hello World",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/HelloWorld/HelloWorld.php"
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
					"fileName" => "src/ModulesGuide/ModulesGuide.php"
				],
				[
					"verticalBlocks" => [
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
				]
			]
		],
		"actionsGuideVariablePathComponents" => [
			"title" => "Variable path components in actions",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/ActionsGuide/ActionsGuide.php",
					"lineHighlight" => "9-37,94-100",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "actionsGuideVariablePathComponents",
							"parameterValues" => [
								"productId" => 4739
							]
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "actionsGuideVariablePathComponents",
							"parameterValues" => [
								"productId" => 8491
							]
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "actionsGuideVariablePathComponents",
							"parameterValues" => [
								"productId" => 3124
							]
						]
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
					"fileName" => "src/ActionsGuide/ActionsGuide.php",
					"lineHighlight" => "39-67,102-108",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "actionsGuideAcceptGetOrPostParameters",
							"parameterValues" => [
								"userId" => 381
							]
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "actionsGuideAcceptGetOrPostParameters",
							"parameterValues" => [
								"userId" => 412
							]
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "actionsGuideAcceptGetOrPostParameters",
							"parameterValues" => [
								"userId" => 234
							]
						]
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
					"fileName" => "src/ActionsGuide/ActionsGuide.php",
					"lineHighlight" => "69-90,110-116",
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
					"fileName" => "src/PatternsGuide/PatternsGuide.php",
					"lineHighlight" => "13-32,77-84",
				],
				[
					"verticalBlocks" => [
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
				]
			]
		],
		"patternsGuideNestedPatterns" => [
			"title" => "Nested patterns",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/PatternsGuide/PatternsGuide.php",
					"lineHighlight" => "34-53,86-93",
				],
				[
					"verticalBlocks" => [
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
						]
					]
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
					"fileName" => "src/PatternsGuide/PatternsGuide.php",
					"lineHighlight" => "55-75,95-98",
				],
				[
					"verticalBlocks" => [
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
				]
			]
		],
		"databaseGuideBasicQueries" => [
			"title" => "Database basic queries",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/DatabaseGuide/DatabaseGuide.php",
					"lineHighlight" => "13-32,56-70",
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
					"fileName" => "src/DatabaseGuide/DatabaseGuide.php",
					"lineHighlight" => "34-54,72-89",
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
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "14-33,204-220",
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/Movie.php"
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
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "35-54,222-237",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
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
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "56-75,239-254",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
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
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "77-96,256-271",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
				],
				[
					"verticalBlocks" => [
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
				]
			]
		],
		"itemsGuideCustomFilters" => [
			"title" => "Items custom filters",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "98-117,273-291",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
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
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "119-138,293-311",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
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
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "140-159,313-333",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
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
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "161-180,335-354",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Director.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "itemsGuideRelationships"
						]
					]
				]
			]
		],
		"itemsGuideFiltersWithRelationships" => [
			"title" => "Items custom filtering with relationships",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/ItemsGuide/ItemsGuide.php",
					"lineHighlight" => "182-201,356-380",
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movie.php"
						]
					]
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Director.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "itemsGuideFiltersWithRelationships"
						]
					]
				]
			]
		],
		"cssAndJavascriptBasicExample" => [
			"title" => "CSS And Javascript example",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/CssAndJavascriptGuide/CssAndJavascriptGuide.php"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "config/Css.config.php"
				],
				[
					"verticalBlocks" => [
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
				]
			]
		],
		"sessionGuideExample" => [
			"title" => "Session example",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/SessionGuide/SessionGuide.php"
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
					"fileName" => "src/LoginGuide/LoginGuide.php"
				],
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
							"actionName" => "loginGuideHome"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_HTML,
							"title" => "Example login credentials",
							"html" => "
								<ul>
									<li><b>Email</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"doug@berkeley.edu\"></li>
									<li><b>Password</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"TheMotherOfAllDemos413\"></li>
								</ul>
								<ul>
									<li><b>Email</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"johnny@princeton.org\"></li>
									<li><b>Password</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"lavidaloca\"></li>
								</ul>
								<ul>
									<li><b>Email</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"frank.abagnale@united.com\"></li>
									<li><b>Password</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"catch_me_?_you_can\"></li>
								</ul>
								<ul>
									<li><b>Email</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"carl@cosmos.org\"></li>
									<li><b>Password</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"palebluedot34\"></li>
								</ul>
								<ul>
									<li><b>Email</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"ricky@mit.edu\"></li>
									<li><b>Password</b> <input type=text class=\"copypaste\" readonly=\"true\" value=\"137\"></li>
								</ul>
							"
						]
					]
				]
			]
		],
		"localeGuideBasic" => [
			"title" => "Locale basic examples",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/LocaleGuide/LocaleGuide.php",
					"lineHighlight" => "13-32,77-94"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "localeGuideBasic"
				]
			]
		],
		"localeGuideMultilingualTexts" => [
			"title" => "Locale multilingual texts",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/LocaleGuide/LocaleGuide.php",
					"lineHighlight" => "34-53,96-107"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "localeGuideMultilingualTexts"
				]
			]
		],
		"localeGuideVariablesInMultilingualTexts" => [
			"title" => "Locale variables in multilingual texts",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/LocaleGuide/LocaleGuide.php",
					"lineHighlight" => "55-74,109-130"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "localeGuideVariablesInMultilingualTexts"
				]
			]
		],
		"systemLogGuideLoadingEvents" => [
			"title" => "Loading SystemLog events from the database",
			"blocks" => [
				[
					"type" => EXAMPLESBROWSER_BLOCK_FILE,
					"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
					"fileName" => "src/SystemLogGuide/SystemLogGuide.php",
					"lineHighlight" => "36-59"
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "systemLogGuideLoadingEvents"
				]
			]
		],
		"statsGuideTriggeringEvent" => [
			"title" => "Triggering a Stats event",
			"blocks" => [
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/StatsEventStatsGuideTriggeringExample.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/StatsGuide/StatsGuide.php",
							"lineHighlight" => "57-82"
						]
					]
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "statsGuideTriggeringEvent"
				]
			]
		],
		"statsGuideAdditionalDimensions" => [
			"title" => "Events with additional dimensions",
			"blocks" => [
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/StatsEventUserLogin.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/LoginGuide/LoginGuide.php",
							"lineHighlight" => "158"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/StatsGuide/StatsGuide.php",
							"lineHighlight" => "84-114"
						]
					]
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "statsGuideAdditionalDimensions"
				]
			]
		],
		"movieSearch" => [
			"title" => "Movies search",
			"blocks" => [
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/MovieSearch/MovieSearch.php"
						],
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/Movies.php"
						]
					]
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "movieSearchForm"
				]
			]
		],
		"movieSearchLog" => [
			"title" => "Movies search log",
			"blocks" => [
				[
					"verticalBlocks" => [
						[
							"type" => EXAMPLESBROWSER_BLOCK_FILE,
							"fileType" => EXAMPLESBROWSER_BLOCK_FILE_TYPE_PHP,
							"fileName" => "src/MovieSearchLog/MovieSearchLog.php"
						]
					]
				],
				[
					"type" => EXAMPLESBROWSER_BLOCK_IFRAME,
					"actionName" => "movieSearchLog"
				]
			]
		]
	]
];
