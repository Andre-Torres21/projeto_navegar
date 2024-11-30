<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes -> get('/', 'Home::index');
$routes -> get('/aluno', 'Home::aluno');
$routes -> match(['get', 'post'], '/inserir', 'Home::inserir');
$routes -> match(['get', 'post'], '/gravar', 'Home::gravar');
$routes -> get('/(:segment)', 'Home::item/$1');