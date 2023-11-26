<?php 
// $heading="Welcome to staff page";
$number_of_workers = 22;
function random_numberfunction ($min,$max){
   return rand($min,$max);
}



if($_SERVER['REQUEST_METHOD']== 'POST') {
   header("Location: /create/staff");
}


require ('view/staff.view.php');