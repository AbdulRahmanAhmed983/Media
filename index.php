<?php 
require_once realpath('actions/template.php');
require_once realpath('actions/session.php');
require_once realpath('actions/Database/connection.php');
template::setaction('Routes');

$routes = new Router();
$routes->get('/','HomeController@index');
$routes->get('/login','RegisterController@login');
$routes->get('/register','RegisterController@register');
$routes->post('/save','RegisterController@save');
$routes->post('/get','RegisterController@get');

$routes->resolve();