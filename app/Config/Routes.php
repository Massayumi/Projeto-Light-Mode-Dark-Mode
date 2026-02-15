<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/main/set_color_mode/(:any)', 'Main::set_color_mode/$1');
