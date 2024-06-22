<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

$routes->get("product/add", "ProductsController::add", ['filter' => 'auth']);
$routes->get("product", "ProductsController::index", ['filter' => 'auth']);
$routes->post("product/store", "ProductsController::store", ['filter' => 'auth']);

// $routes->group("product", ["filter" => "auth"], function ($routes) {
//     $routes->get("/", "ProductsController::index");
// });

$routes->get("media", "MediaController::index", ['filter' => 'auth']);
$routes->post("media/store", "MediaController::store", ['filter' => 'auth']);


