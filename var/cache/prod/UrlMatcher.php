<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/ad(?'
                    .'|s/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:34)'
                            .'|delete(*:47)'
                            .'|book(*:58)'
                        .')'
                        .'|(*:66)'
                    .')'
                    .'|min/(?'
                        .'|ads(?'
                            .'|(?:/(\\d+))?(*:98)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:122)'
                                .'|delete(*:136)'
                            .')'
                        .')'
                        .'|bookings/(?'
                            .'|(\\d+)(*:163)'
                            .'|([^/]++)/(?'
                                .'|edit(*:187)'
                                .'|delete(*:201)'
                            .')'
                        .')'
                        .'|comment(?'
                            .'|(?:/(\\d+))?(*:232)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:257)'
                                .'|delete(*:271)'
                            .')'
                        .')'
                        .'|user(?'
                            .'|(?:/(\\d+))?(*:299)'
                            .'|/([^/]++)/edit(*:321)'
                        .')'
                    .')'
                .')'
                .'|/booking/([^/]++)(*:349)'
                .'|/user/([^/]++)(*:371)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'ads_edit', '_controller' => 'App\\Controller\\AdController::edit'], ['slug'], null, null, false, false, null]],
        47 => [[['_route' => 'ads_delete', '_controller' => 'App\\Controller\\AdController::delete'], ['slug'], null, null, false, false, null]],
        58 => [[['_route' => 'booking_create', '_controller' => 'App\\Controller\\BookingController::book'], ['slug'], null, null, false, false, null]],
        66 => [[['_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'], ['slug'], null, null, false, true, null]],
        98 => [[['_route' => 'admin_ads_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminAdController::index'], ['page'], null, null, false, true, null]],
        122 => [[['_route' => 'admin_ads_edit', '_controller' => 'App\\Controller\\AdminAdController::edit'], ['id'], null, null, false, false, null]],
        136 => [[['_route' => 'admin_ads_delete', '_controller' => 'App\\Controller\\AdminAdController::delete'], ['id'], null, null, false, false, null]],
        163 => [[['_route' => 'admin_booking_index', '_controller' => 'App\\Controller\\AdminBookingController::index'], ['page'], null, null, false, true, null]],
        187 => [[['_route' => 'admin_booking_edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'], ['id'], null, null, false, false, null]],
        201 => [[['_route' => 'admin_booking_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        232 => [[['_route' => 'admin_comment_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page'], null, null, false, true, null]],
        257 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], null, null, false, false, null]],
        271 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], null, null, false, false, null]],
        299 => [[['_route' => 'admin_user_index', 'page' => 1, '_controller' => 'App\\Controller\\AdminUserController::index'], ['page'], null, null, false, true, null]],
        321 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], null, null, false, false, null]],
        349 => [[['_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], null, null, false, true, null]],
        371 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
