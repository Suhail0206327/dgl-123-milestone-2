<?php 
// $heading="Welcome to staff page";
$number_of_workers = 22;
function random_numberfunction ($min,$max){
   return rand($min,$max);
}
$config = require('config.php');
$db = new Database($config);
$staffs = $db->query('SELECT * FROM strategy.kitchen;')->get();
$count = count($staffs);
// for ($i = 0; $i< $count; $i++) {
//    $staff = $staffs[$i];
//    dd($staff);
// }
//    foreach ($staffs as $staff) {
//       dd($staff['name']);
//    }
// $staff_name = $staffs['name'];


if($_SERVER['REQUEST_METHOD']== 'POST') {
   header("Location: /create/staff");
}


require ('view/staff.view.php');