<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Caccueil::index');
$routes->resource('Api/Etudiant');