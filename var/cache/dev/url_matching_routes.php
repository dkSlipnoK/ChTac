<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/resources/creaconc' => [[['_route' => 'resources_creaconc', '_controller' => 'App\\Controller\\CreaconcController::index'], null, null, null, false, false, null]],
        '/indexuser' => [[['_route' => 'app_indexuser', '_controller' => 'App\\Controller\\IndexuserController::index'], null, null, null, false, false, null]],
        '/load/table' => [[['_route' => 'app_load_table', '_controller' => 'App\\Controller\\LoadTableController::index'], null, null, null, false, false, null]],
        '/saveCont' => [[['_route' => 'app_saveCont', '_controller' => 'App\\Controller\\LoadTableController::saveContest'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/resources/(?'
                    .'|edit(?:/(\\d+))?(*:198)'
                    .'|in(?'
                        .'|fo/([^/]++)(*:222)'
                        .'|sertPart/([^/]++)(*:247)'
                    .')'
                .')'
                .'|/infoConc/([^/]++)(*:275)'
                .'|/get\\-table\\-data/([^/]++)/([^/]++)(*:318)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'resources_create', 'id' => '0', '_controller' => 'App\\Controller\\CreaconcController::edit'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'resources_info', '_controller' => 'App\\Controller\\CreaconcController::info'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'resources_insertPart', '_controller' => 'App\\Controller\\CreaconcController::insertPart'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'infoConc', '_controller' => 'App\\Controller\\MainController::info'], ['id'], null, null, false, true, null]],
        318 => [
            [['_route' => 'get_table_data', '_controller' => 'App\\Controller\\TableController::getData'], ['param1', 'param2'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
