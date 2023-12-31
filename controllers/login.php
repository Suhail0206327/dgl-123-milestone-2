<?php
// session_start();
require 'validator.php';
$config = require('config.php');
$db = new Database($config);



    
$errors = [] ;
if($_SERVER['REQUEST_METHOD']== 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    if(!Validator::password($password)) {
        
        $errors['body'] = 'The password should be atleast 6 and less than 10 characters';
        }
    
        if(!Validator::email($email)) {
            $errors['body'] = 'Please provide a valid email';
        }
      
        
        if (empty($errors)) {
            $users = $db->query('select * from users where email = :email',[
                'email' => $email
            ])->find();
            
            if ($users) {
                
            }
            else {
                $db->query('INSERT INTO users( email , password) VALUES (:email, :password)', [
                    'email' => $email,
                    'password' =>$password,
                  ]);    
                
                  
                  $_SESSION ['email'] =  $email;
                  header("Location: /home");
            }
        }
        
}





// $db->query('INSERT INTO users( email, password ) VALUES(:email, :password)',[
//     'email' => $email,
//     'password' => $password,
// ]);


require ('view/login.view.php');