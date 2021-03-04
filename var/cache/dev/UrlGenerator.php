<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'ads_index' => [[], ['_controller' => 'App\\Controller\\AdController::index'], [], [['text', '/ads']], [], []],
    'ads_create' => [[], ['_controller' => 'App\\Controller\\AdController::create'], [], [['text', '/ads/new']], [], []],
    'ads_edit' => [['slug'], ['_controller' => 'App\\Controller\\AdController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug'], ['text', '/ads']], [], []],
    'ads_show' => [['slug'], ['_controller' => 'App\\Controller\\AdController::show'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/ads']], [], []],
    'ads_delete' => [['slug'], ['_controller' => 'App\\Controller\\AdController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'slug'], ['text', '/ads']], [], []],
    'admin_account_login' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::login'], [], [['text', '/admin/login']], [], []],
    'admin_account_logout' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::logout'], [], [['text', '/admin/logout']], [], []],
    'admin_ads_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminAdController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/admin/ads']], [], []],
    'admin_ads_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminAdController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/ads']], [], []],
    'admin_ads_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminAdController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/ads']], [], []],
    'admin_booking_index' => [['page'], ['_controller' => 'App\\Controller\\AdminBookingController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/admin/bookings']], [], []],
    'admin_booking_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminBookingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/bookings']], [], []],
    'admin_comment_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/admin/comment']], [], []],
    'admin_comment_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin']], [], []],
    'admin_user_index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\AdminUserController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/admin/user']], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'admin_booking_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/bookings']], [], []],
    'booking_create' => [['slug'], ['_controller' => 'App\\Controller\\BookingController::book'], [], [['text', '/book'], ['variable', '/', '[^/]++', 'slug'], ['text', '/ads']], [], []],
    'booking_show' => [['id'], ['_controller' => 'App\\Controller\\BookingController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/booking']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], []],
    'account_profile' => [[], ['_controller' => 'App\\Controller\\SecurityController::profile'], [], [['text', '/account/profile']], [], []],
    'account_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::updatepassword'], [], [['text', '/account/password-update']], [], []],
    'account_index' => [[], ['_controller' => 'App\\Controller\\SecurityController::myAccount'], [], [['text', '/account']], [], []],
    'account_bookings' => [[], ['_controller' => 'App\\Controller\\SecurityController::bookings'], [], [['text', '/account/bookings']], [], []],
    'user_show' => [['slug'], ['_controller' => 'App\\Controller\\UserController::index'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/user']], [], []],
];
