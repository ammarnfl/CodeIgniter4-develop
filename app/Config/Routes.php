<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/foodmart', 'FoodmartController::index');
$routes->get('/foodmartAPI', 'FoodmartAPI::index');
$routes->get('/customers', 'CustomerController::form');
$routes->post('/customers/search', 'CustomerController::search');
$routes->get('/coba', 'CobaController::index');
$routes->post('/coba/create', 'CobaController::create');
$routes->get('/coba/show', 'CobaController::show');
