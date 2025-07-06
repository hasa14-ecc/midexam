<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->post('/loginPost', 'Auth::loginPost');
$routes->get('/logout', 'Auth::logout');
$routes->get('/admin', 'Admin::index');
$routes->get('/game/level1', 'Game::level1');
$routes->post('game/level1/submit', 'Game::level1Submit');
$routes->get('/game/level2', 'Game::level2');
$routes->post('game/level2/submit', 'Game::level2Submit');
$routes->get('/game/ending', 'Auth::logout');