<?php
$config = require('config.php');
$db = new Database($config);
require 'view/create_staff.view.php';