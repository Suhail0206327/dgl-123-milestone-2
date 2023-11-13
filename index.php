<?php 
   require('functions.php');
   require 'Database.php';

   $config = require('config.php');
   // $db = new Database($config,'root',$config['password']);
   
   //$heading = 'Note';
   //$currentUserId = 1;
   
   // $users = $db->query("select * from users")->fetchAll();
   //var_dump($users);

   

   require('router.php');
