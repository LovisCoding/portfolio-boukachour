<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PageHome::index');
$routes->get('/dev', 'PageDev::index');
$routes->get('/bdd', 'PageBDD::index');
$routes->get('/gpo', 'PageGPO::index');