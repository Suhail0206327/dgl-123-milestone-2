<?php

$config = require('config.php');
$db = new Database($config);

$errors = [];
if(strlen($_POST['password']) < 8) {
$errors['body'] = 'The password should be atleast 8 characters';
}
if(strlen($_POST['password'])>10) {
    $errors['body'] = 'The password should be less than 10 characters';
}

if (empty($errors)) {
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $db->query('INSERT INTO users( email , password) VALUES (:email, :password)', [
          'email' => $_POST['email'],
          'password' => $_POST['password'],
        ]);
       }
    
}


require ('view/login.view.php');