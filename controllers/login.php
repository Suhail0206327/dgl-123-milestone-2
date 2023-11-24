<?php

$config = require('config.php');
$db = new Database($config,'root', 'suhail@1');

require ('view/login.view.php');