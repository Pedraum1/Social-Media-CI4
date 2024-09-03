<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('/auth/',['filter'=>'logged'], function($routes){
    $routes->get('','Auth::index');
    $routes->post('login_submit','Auth::login');
    $routes->post('register_submit','Auth::register');
});

$routes->group('',['filter'=>'unlogged'],function($routes){

$routes->get('/', 'Main::index');
$routes->get('/profile/(:any)', 'Main::profile/$1');

});
