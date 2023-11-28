<?php
return [

    '/' => 'controllers/login.php',
    '/staff' =>'controllers/staff/index.php',
    '/statistics' =>'controllers/statistics.php',
    '/about' => 'controllers/about.php',
    '/home' => 'controllers/index.php',
    '/register' => 'controllers/register.php',
    '/create/staff' => 'controllers/staff/create.php',
    '/delete/staff' => 'controllers/staff/delete.php'
   ];


require ('router.php');
//    $method = $_SERVER['REQUEST_METHOD'];

// $router->get('/', 'controllers/login.php');
// $router->get('/about', 'controllers/about.php');
// $router->get('/staff', 'controllers/staff.php');
// $router->get('/statistics', 'controllers/statistics.php');
// $router->get('/home', 'controllers/index.php');
// $router->get('/register', 'controllers/register.php');


