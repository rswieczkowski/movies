<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'movies' => [[], ['_controller' => 'App\\Controller\\MoviesController::index'], [], [['text', '/movies']], [], [], []],
    'create_movie' => [[], ['_controller' => 'App\\Controller\\MoviesController::create'], [], [['text', '/movies/create']], [], [], []],
    'movie' => [['id'], ['_controller' => 'App\\Controller\\MoviesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/movies']], [], [], []],
];
