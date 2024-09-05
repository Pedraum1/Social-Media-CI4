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

$routes->group('/profile/',function($routes){
    $routes->get('(:any)', 'Profile::profile/$1');
    $routes->post('(:any)/edit', 'Profile::profile_update/$1');
    
});

$routes->get('/notificacoes','Main::notificacao');
$routes->get('/auth/logout','Auth::logout');
$routes->group('/post/',function($routes){
    $routes->get('(:alphanum)','Posts::index/$1');
    $routes->post('post_submit','Posts::postSubmit');
    $routes->post('comment_submit','Posts::commentSubmit');  
    $routes->get('(:alphanum)/like','Posts::like/$1');
    $routes->get('(:alphanum)/dislike','Posts::dislike/$1');
});

});
