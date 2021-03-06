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
        '/ads/new' => [[['_route' => 'ads_create', '_controller' => 'App\\Controller\\AdController::create'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/account/profile' => [[['_route' => 'account_profile', '_controller' => 'App\\Controller\\SecurityController::profile'], null, null, null, false, false, null]],
        '/account/password-update' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\SecurityController::updatepassword'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account_index', '_controller' => 'App\\Controller\\SecurityController::myAccount'], null, null, null, false, false, null]],
        '/account/bookings' => [[['_route' => 'account_bookings', '_controller' => 'App\\Controller\\SecurityController::bookings'], null, null, null, false, false, null]],
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
                .'|/ad(?'
                    .'|s(?'
                        .'|(?:/(\\d+))?(*:190)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:218)'
                                .'|delete(*:232)'
                                .'|book(*:244)'
                            .')'
                            .'|(*:253)'
                        .')'
                    .')'
                    .'|min/(?'
                        .'|ads(?'
                            .'|(?:/(\\d+))?(*:287)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:312)'
                                .'|delete(*:326)'
                            .')'
                        .')'
                        .'|bookings/(?'
                            .'|(\\d+)(*:353)'
                            .'|([^/]++)/(?'
                                .'|edit(*:377)'
                                .'|delete(*:391)'
                            .')'
                        .')'
                        .'|comment(?'
                            .'|(?:/(\\d+))?(*:422)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:447)'
                                .'|delete(*:461)'
                            .')'
                        .')'
                        .'|user(?'
                            .'|(?:/(\\d+))?(*:489)'
                            .'|/([^/]++)/edit(*:511)'
                        .')'
                    .')'
                .')'
                .'|/booking/([^/]++)(*:539)'
                .'|/user/([^/]++)(*:561)'
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
        190 => [[['_route' => 'ads_index', 'page' => 1, '_controller' => 'App\\Controller\\AdController::index'], ['page'], null, null, false, true, null]],
        218 => [[['_route' => 'ads_edit', '_controller' => 'App\\Controller\\AdController::edit'], ['slug'], null, null, false, false, null]],
        232 => [[['_route' => 'ads_delete', '_controller' => 'App\\Controller\\AdController::delete'], ['slug'], null, null, false, false, null]],
        244 => [[['_route' => 'booking_create', '_controller' => 'App\\Controller\\BookingController::book'], ['slug'], null, null, false, false, null]],
        253 => [[['_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'], ['slug'], null, null, false, true, null]],
        287 => [[['_route' => 'admin_ads_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminAdController::index'], ['page'], null, null, false, true, null]],
        312 => [[['_route' => 'admin_ads_edit', '_controller' => 'App\\Controller\\AdminAdController::edit'], ['id'], null, null, false, false, null]],
        326 => [[['_route' => 'admin_ads_delete', '_controller' => 'App\\Controller\\AdminAdController::delete'], ['id'], null, null, false, false, null]],
        353 => [[['_route' => 'admin_booking_index', '_controller' => 'App\\Controller\\AdminBookingController::index'], ['page'], null, null, false, true, null]],
        377 => [[['_route' => 'admin_booking_edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'], ['id'], null, null, false, false, null]],
        391 => [[['_route' => 'admin_booking_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        422 => [[['_route' => 'admin_comment_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page'], null, null, false, true, null]],
        447 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], null, null, false, false, null]],
        461 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], null, null, false, false, null]],
        489 => [[['_route' => 'admin_user_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminUserController::index'], ['page'], null, null, false, true, null]],
        511 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], null, null, false, false, null]],
        539 => [[['_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], null, null, false, true, null]],
        561 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
