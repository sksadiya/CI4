<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('set-password', 'Password::set');
$routes->post('set-password', 'Password::update');
$routes->get('articles', 'Articles::index');
$routes->get('articles/(:num)', 'Articles::show/$1');
$routes->get('articles/new', 'Articles::new' ,['as' =>'new_article']);
$routes->post('articles/create', 'Articles::create');
$routes->get('articles/edit/(:num)', 'Articles::edit/$1');
$routes->post('articles/update/(:num)', 'Articles::update/$1');
$routes->match(["get" , "delete"],'articles/delete/(:num)', 'Articles::delete/$1');

service('auth')->routes($routes);

$routes->setAutoRoute(true);