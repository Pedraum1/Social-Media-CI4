<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/teste','Testes::index');

$routes->group('/auth/',['filter'=>'logged'], function($routes){
    $routes->get('','Auth::index');
    $routes->post('login_submit','Auth::login');
    $routes->post('register_submit','Auth::register');
});

$routes->group('',['filter'=>'unlogged'],function($routes){

$routes->get('/', 'Main::index');
$routes->get('/profile/(:any)', 'Main::profile/$1');
$routes->get('/auth/logout','Auth::logout');
$routes->get('/post/(:alphanum)','Posts::index/$1');
$routes->post('/post_submit','Posts::postSubmit');
$routes->post('/comment_submit','Posts::commentSubmit');

});
