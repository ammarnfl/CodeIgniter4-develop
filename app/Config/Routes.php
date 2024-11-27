<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/foodmart', 'FoodmartController::index');
// $routes->get('/foodmartAPI', 'FoodmartAPI::index');
$routes->get('/foodmartAPI/(:any)/(:any)', 'FoodmartAPI::index/$1/$2');
$routes->get('/customers', 'CustomerController::form');
$routes->post('/customers/search', 'CustomerController::search');
$routes->get('/coba', 'CobaController::index');
$routes->post('/coba/create', 'CobaController::create');
$routes->post('coba/update', 'CobaController::update');
$routes->post('coba/delete', 'CobaController::delete');
$routes->get('coba/show', 'CobaController::show');
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login_action', 'LoginController::login_action');