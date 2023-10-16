<?php 
// $heading="Welcome to staff page";
$number_of_workers = 22;
$min_salary = 16.64;
$max_salary = 26.78;
$random_salary = rand($min_salary,$max_salary);
require ('view/staff.view.php');