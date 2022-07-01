<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/v1/api/movies' => [[['_route' => 'api_movies', '_controller' => 'App\\Controller\\ApiController::getMovies'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/film' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\ClientController::movies'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/v1/api/movies/([^/]++)(*:65)'
                .'|/film/([^/]++)(*:86)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'api_movie', '_controller' => 'App\\Controller\\ApiController::getMovie'], ['id'], null, null, false, true, null]],
        86 => [
            [['_route' => 'movie', '_controller' => 'App\\Controller\\ClientController::movie'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
