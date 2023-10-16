<?php 
require_once("plugins/phpChart_Lite/conf.php");
// $heading="Welcome to statistics page";
$currentDate = date('l, F j, Y') ;
$currentMonth = date('m');
$currentYear = date('Y');

require ('view/statistics.view.php');