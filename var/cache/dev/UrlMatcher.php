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
        '/ads' => [[['_route' => 'ads_index', '_controller' => 'App\\Controller\\AdController::index'], null, null, null, false, false, null]],
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
                    .'|s/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:196)'
                            .'|delete(*:210)'
                            .'|book(*:222)'
                        .')'
                        .'|(*:231)'
                    .')'
                    .'|min/(?'
                        .'|ads(?'
                            .'|(?:/(\\d+))?(*:264)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:289)'
                                .'|delete(*:303)'
                            .')'
                        .')'
                        .'|bookings/(?'
                            .'|(\\d+)(*:330)'
                            .'|([^/]++)/(?'
                                .'|edit(*:354)'
                                .'|delete(*:368)'
                            .')'
                        .')'
                        .'|comment(?'
                            .'|(?:/(\\d+))?(*:399)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:424)'
                                .'|delete(*:438)'
                            .')'
                        .')'
                        .'|user(?'
                            .'|(?:/(\\d+))?(*:466)'
                            .'|/([^/]++)/edit(*:488)'
                        .')'
                    .')'
                .')'
                .'|/booking/([^/]++)(*:516)'
                .'|/user/([^/]++)(*:538)'
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
        196 => [[['_route' => 'ads_edit', '_controller' => 'App\\Controller\\AdController::edit'], ['slug'], null, null, false, false, null]],
        210 => [[['_route' => 'ads_delete', '_controller' => 'App\\Controller\\AdController::delete'], ['slug'], null, null, false, false, null]],
        222 => [[['_route' => 'booking_create', '_controller' => 'App\\Controller\\BookingController::book'], ['slug'], null, null, false, false, null]],
        231 => [[['_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'], ['slug'], null, null, false, true, null]],
        264 => [[['_route' => 'admin_ads_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminAdController::index'], ['page'], null, null, false, true, null]],
        289 => [[['_route' => 'admin_ads_edit', '_controller' => 'App\\Controller\\AdminAdController::edit'], ['id'], null, null, false, false, null]],
        303 => [[['_route' => 'admin_ads_delete', '_controller' => 'App\\Controller\\AdminAdController::delete'], ['id'], null, null, false, false, null]],
        330 => [[['_route' => 'admin_booking_index', '_controller' => 'App\\Controller\\AdminBookingController::index'], ['page'], null, null, false, true, null]],
        354 => [[['_route' => 'admin_booking_edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'], ['id'], null, null, false, false, null]],
        368 => [[['_route' => 'admin_booking_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        399 => [[['_route' => 'admin_comment_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page'], null, null, false, true, null]],
        424 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], null, null, false, false, null]],
        438 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], null, null, false, false, null]],
        466 => [[['_route' => 'admin_user_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminUserController::index'], ['page'], null, null, false, true, null]],
        488 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], null, null, false, false, null]],
        516 => [[['_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], null, null, false, true, null]],
        538 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
