<?php


   
   // class router {
   //    public $routes =  [];

   //  public  function abort($code = 404) {
   //       http_response_code($code);
   //       require "view/{$code}.php";
   //       die();
   //      }
   //    public function get($uri, $controller) {

   //       $this->routes[] = [
            
   //           'uri' => $uri,
   //           'controller' => $controller,
   //           'method' => 'GET',

   //       ];
   //    }
   //    public function post($uri, $controller) {

   //       $this->routes[] = [
            
   //           'uri' => $uri,
   //           'controller' => $controller,
   //           'method' => 'POST',

   //       ];
   //    }


   //    public function route($uri, $method) {
   //       foreach ($this->routes as $route) {

   //          if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {

            
   //          }
   //       }
   //       $this->abort();

   //    }
   // }


   $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
   $routes = require('routes.php');

   function routeToController($uri, $routes){

    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }
    else{
       abort(404);
    }
   }
      function abort($code = 404) {
    http_response_code($code);
    require "view/{$code}.php";
    die();
   }

  routeToController($uri, $routes);