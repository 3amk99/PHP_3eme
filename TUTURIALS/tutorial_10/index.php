<?php
require 'Database.php';
require 'User.php';

//1
$database = new Database();
//2
$db = $database->getConnection();

//3
$user = new User($db);
//4
$user->nom = "Alice";
$user->email = "alice@test.com";
//5
$user->create();


$liste = $user->read();
foreach ($liste as $u) 
{
    echo $u['nom'] . " - " . $u['email'] . "<br>";
}
