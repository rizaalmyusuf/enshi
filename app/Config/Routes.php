<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->post('/', 'User::index');
$routes->get('/kamus', 'User::kamus');
$routes->get('/sha', 'User::sha');
$routes->get('/peta', 'User::peta');