<?php

$config = require('config.php');
$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
$id = $_POST['id'];

    $db->query('DELETE FROM kitchen  where id = :id',[
        'id' => $id
    ]);

    header("Location: /staff");

} 