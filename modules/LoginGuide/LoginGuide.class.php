<?php

namespace CherrycakeApp;

class LoginGuide extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "HtmlDocument",
        "Login",
        "Stats"
    ];

    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "loginGuideHome",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "LoginGuide",
                "methodName" => "home",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "login-guide"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "loginGuideLoginPage",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "LoginGuide",
                "methodName" => "loginPage",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "login-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "login-page"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "loginGuideDoLogin",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "LoginGuide",
                "methodName" => "doLogin",
                "request" => new \Cherrycake\Request([
                    "isSecurityCsrf" => true,
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "login-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "do-login"
                        ])
                    ],
                    "parameters" => [
                        new \Cherrycake\RequestParameter([
                            "name" => "email",
                            "type" => \Cherrycake\REQUEST_PARAMETER_TYPE_POST
                        ]),
                        new \Cherrycake\RequestParameter([
                            "name" => "password",
                            "type" => \Cherrycake\REQUEST_PARAMETER_TYPE_POST
                        ])
                    ]
                ]),
                "isSensibleToBruteForceAttacks" => true
            ])
        );

        $e->Actions->mapAction(
            "loginGuideLogout",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "LoginGuide",
                "methodName" => "logout",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "login-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "logout"
                        ])
                    ]
                ])
            ])
        );
    }

    function home() {
        global $e;

        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                ($e->Login->isLogged() ?
                    "You are logged in as {$e->Login->user->name}".
                    "<a href=\"{$e->Actions->getAction("loginGuideLogout")->request->buildUrl()}\" class=button>Logout</a>"
                :
                    "You are not logged in".
                    "<a href=\"{$e->Actions->getAction("loginGuideLoginPage")->request->buildUrl()}\" class=button>Login</a>"
                ).
                $e->HtmlDocument->footer()
        ]));
    }

    function loginPage() {
        global $e;
    
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                "
                    <form method=post action=\"{$e->Actions->getAction("loginGuideDoLogin")->request->buildUrl()}\">
                        <input name=email type=text name=email placeholder=\"Email\" />
                        <input name=password type=password name=password placeholder=\"Password\" />
                        <input type=submit value=\"Login\"/>
                    </form>
                ".
                $e->HtmlDocument->footer()
        ]));
    }

    function doLogin($request) {
        global $e;
        $result = $e->Login->doLogin($request->email, $request->password);
        if (
            $result == \Cherrycake\LOGIN_RESULT_FAILED_UNKNOWN_USER
            ||
            $result == \Cherrycake\LOGIN_RESULT_FAILED_WRONG_PASSWORD
        ) {
            $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
                "code" => \Cherrycake\RESPONSE_OK,
                "payload" => $e->HtmlDocument->header()."Login error".$e->HtmlDocument->footer()
            ]));
        }
        else {
            $e->Stats->trigger(new StatsEventUserLogin(["userId" => $e->Login->user->id]));

            $e->Output->setResponse(new \Cherrycake\Response([
                "code" => \Cherrycake\RESPONSE_REDIRECT_FOUND,
                "url" => $e->Actions->getAction("loginGuideHome")->request->buildUrl()
            ]));
        }
    }

    function logout() {
        global $e;
        $e->Login->logoutUser();
        $e->Output->setResponse(new \Cherrycake\Response([
            "code" => \Cherrycake\RESPONSE_REDIRECT_FOUND,
            "url" => $e->Actions->getAction("loginGuideHome")->request->buildUrl()
        ]));
    }
}