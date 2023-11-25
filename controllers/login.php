<?php
require 'validator.php';
$config = require('config.php');
$db = new Database($config);

$errors = [];
if($_SERVER['REQUEST_METHOD']== 'POST') {

    if(!Validator::password($_POST['password'])) {
        $errors['body'] = 'The password should be atleast 6 and less than 10 characters';
        }
    
        if(!Validator::email($_POST['email'])) {
            $errors['body'] = 'Please provide a valid email';
        }
      
        
        if (empty($errors)) {
            if ($_SERVER['REQUEST_METHOD']=='POST'){
                $db->query('INSERT INTO users( email , password) VALUES (:email, :password)', [
                  'email' => $_POST['email'],
                  'password' => $_POST['password'],
                ]);
               }
            
        }
}



require ('view/login.view.php');