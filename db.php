<?php

$user = "root";
$password = '';

try {
    $db = new PDO('mysql:host=localhost;dbname=my_bd', $user, $password);
} catch (Exception $e) {
    echo $e->getMessage();
}


