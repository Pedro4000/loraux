<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::indexAction'], null, null, null, false, false, null]],
        '/ajaxLoadVideos' => [[['_route' => 'ajaxLoadVideos', '_controller' => 'App\\Controller\\IndexController::ajaxLoadVideosAction'], null, null, null, false, false, null]],
        '/ajaxImage' => [[['_route' => 'ajaxImage', '_controller' => 'App\\Controller\\IndexController::ajaxImageAction'], null, null, null, false, false, null]],
        '/sign_up' => [[['_route' => 'sign_up', '_controller' => 'App\\Controller\\IndexController::signUpAction'], null, null, null, false, false, null]],
        '/google_redirect_for_calendar' => [[['_route' => 'google_redirect_for_calendar', '_controller' => 'App\\Controller\\IndexController::getGoogleCalendarRedirectInformationAction'], null, null, null, false, false, null]],
        '/resume' => [[['_route' => 'resume', '_controller' => 'App\\Controller\\IndexController::resume'], null, null, null, false, false, null]],
        '/createYoutubePlaylist' => [[['_route' => 'createYoutubePlaylist', '_controller' => 'App\\Controller\\YoutubeController::createYoutubePlaylistAction'], null, null, null, false, false, null]],
        '/createYoutubePlaylistCode' => [[['_route' => 'createYoutubePlaylistCode', '_controller' => 'App\\Controller\\YoutubeController::createYoutubePlaylistCodeAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
