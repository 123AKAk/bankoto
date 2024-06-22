<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

$routes->get("product/add", "ProductsController::add");
$routes->group("product", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "ProductsController::index");
    $routes->get("/product/store", "ProductsController::store");
});


$routes->group("media", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "MediaController::index");
    $routes->get("/media/store", "MediaController::store");
});


