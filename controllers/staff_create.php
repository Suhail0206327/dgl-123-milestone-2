<?php
$config = require('config.php');
$db = new Database($config);

if ($_SERVER['REQUEST_METHOD']== 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['positon']; 
    $wage = $_POST['pay'];
    $file_name = $_FILES["image"]["name"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $image = file_get_contents($file_tmp);
    $db->query('INSERT INTO kitchen( name ,positon, pay,image, email  ) VALUES (:name, :positon,  :pay,  :image,:email,)', [
      'name' => $name,
      'positon' =>$position,
      'pay' => $wage,
      'image' => $image,
        'email' => $email,
      
       
      ]);    
    
}

require 'view/create_staff.view.php';