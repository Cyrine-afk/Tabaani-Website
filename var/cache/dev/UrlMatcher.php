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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/back-office' => [[['_route' => 'back', '_controller' => 'App\\Controller\\Back_Office\\BackController::index'], null, null, null, false, false, null]],
        '/statsEvent' => [[['_route' => 'statsEvent', '_controller' => 'App\\Controller\\Back_Office\\BackController::statistiques'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'events_index', '_controller' => 'App\\Controller\\EventsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/events/new' => [[['_route' => 'events_new', '_controller' => 'App\\Controller\\EventsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events/tri/triTrending' => [[['_route' => 'event_Trending', '_controller' => 'App\\Controller\\EventsController::TriTrending'], null, null, null, false, false, null]],
        '/events/tri/triAlphabetical' => [[['_route' => 'event_triAlphabetical', '_controller' => 'App\\Controller\\EventsController::TriAlphabetical'], null, null, null, false, false, null]],
        '/events/tri/triDate' => [[['_route' => 'event_triDate', '_controller' => 'App\\Controller\\EventsController::TriDate'], null, null, null, false, false, null]],
        '/events/filter/Today' => [[['_route' => 'event_Today', '_controller' => 'App\\Controller\\EventsController::FilterToday'], null, null, null, false, false, null]],
        '/events/filter/HasPassed' => [[['_route' => 'event_HasPassed', '_controller' => 'App\\Controller\\EventsController::FilterHasPassed'], null, null, null, false, false, null]],
        '/events/filter/ThisWeek' => [[['_route' => 'event_ThisWeek', '_controller' => 'App\\Controller\\EventsController::FilterThisWeek'], null, null, null, false, false, null]],
        '/events/back' => [[['_route' => 'events_index_back', '_controller' => 'App\\Controller\\EventsControllerBack::indexBack'], null, ['GET' => 0], null, true, false, null]],
        '/events/back/pdfEvents' => [[['_route' => 'events_pdf_back', '_controller' => 'App\\Controller\\EventsControllerBack::pdfBack'], null, ['GET' => 0], null, false, false, null]],
        '/events/back/new' => [[['_route' => 'events_new_back', '_controller' => 'App\\Controller\\EventsControllerBack::newBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front-office' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Front_Office\\HomeController::index'], null, null, null, false, false, null]],
        '/participate/event' => [[['_route' => 'participate_event_index', '_controller' => 'App\\Controller\\ParticipateEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participate/event/newTrying/new' => [[['_route' => 'participate_event_newTrying', '_controller' => 'App\\Controller\\ParticipateEventController::newTrying'], null, ['POST' => 0], null, false, false, null]],
        '/participate/event/back/newTrying/new' => [[['_route' => 'participate_event_newTrying_back', '_controller' => 'App\\Controller\\ParticipateEventControllerBack::newTryingBack'], null, ['POST' => 0], null, false, false, null]],
        '/themes' => [[['_route' => 'themes_index', '_controller' => 'App\\Controller\\ThemesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/themes/new' => [[['_route' => 'themes_new', '_controller' => 'App\\Controller\\ThemesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/events/back/([^/]++)(?'
                    .'|(*:193)'
                    .'|/edit(*:206)'
                    .'|(*:214)'
                .')'
                .'|/participate/event/(?'
                    .'|([^/]++)(*:253)'
                    .'|back(?'
                        .'|(*:268)'
                        .'|/([^/]++)(?'
                            .'|(*:288)'
                        .')'
                    .')'
                .')'
                .'|/themes/([^/]++)(?'
                    .'|(*:318)'
                    .'|/edit(*:331)'
                    .'|(*:339)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:368)'
                        .'|/edit(*:381)'
                        .'|(*:389)'
                    .')'
                    .'|events/([^/]++)(?'
                        .'|(*:416)'
                        .'|/edit(*:429)'
                        .'|(*:437)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'events_show_back', '_controller' => 'App\\Controller\\EventsControllerBack::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'events_edit_back', '_controller' => 'App\\Controller\\EventsControllerBack::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'events_delete_back', '_controller' => 'App\\Controller\\EventsControllerBack::deleteBack'], ['id'], ['POST' => 0], null, false, true, null]],
        253 => [[['_route' => 'participate_event_show', '_controller' => 'App\\Controller\\ParticipateEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'participate_event_index_back', '_controller' => 'App\\Controller\\ParticipateEventControllerBack::indexBack'], [], ['GET' => 0], null, true, false, null]],
        288 => [
            [['_route' => 'participate_event_show_back', '_controller' => 'App\\Controller\\ParticipateEventControllerBack::showBack'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'participate_event_delete_back', '_controller' => 'App\\Controller\\ParticipateEventControllerBack::deleteBack'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        318 => [[['_route' => 'themes_show', '_controller' => 'App\\Controller\\ThemesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        331 => [[['_route' => 'themes_edit', '_controller' => 'App\\Controller\\ThemesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'themes_delete', '_controller' => 'App\\Controller\\ThemesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        368 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        381 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        389 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        416 => [[['_route' => 'events_show', '_controller' => 'App\\Controller\\UserController::showEvents'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'events_edit', '_controller' => 'App\\Controller\\UserController::editEvent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [
            [['_route' => 'events_delete', '_controller' => 'App\\Controller\\UserController::deleteEvent'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
