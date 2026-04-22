<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Classes\User;

$user1 = new User();
$user1->name = "Carlos";
$user1->age = 25;

$user2 = new User();
$user2->name = "Ana";
$user2->age = 30;

echo $user1->greet();
echo "<br>";
echo $user2->greet();