<?php 



   require('functions.php');
   $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
   
   $routes = [
    '/' => 'controllers/index.php',
    '/staff' =>'controllers/staff.php',
    '/statistics' =>'controllers/statistics.php',
    '/about' => 'controllers/about.php',
   ];

   function abort($code) {
    http_response_code($code);
    require "view/{$code}.php";
   }
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }
    else{
       abort();
    }