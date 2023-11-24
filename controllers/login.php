<?php

$config = require('config.php');
$db = new Database($config);

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $db->query('INSERT INTO users( email , password) VALUES (:email, :password)', [
      'email' => $_POST['email'],
      'password' => $_POST['password'],
    ]);
   }
require ('view/login.view.php');