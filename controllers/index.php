<?php 


$heading="Welcome to home page";
$config = require('config.php');
   $db = new Database($config,'root',$config['password']);
   $users = $db->query("select * from users")->fetchAll();
require ('view/home.view.php');
