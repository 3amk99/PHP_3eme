<?php
$host = 'localhost';
$dbname = 'blogdb';
$username = 'root';
$password = 'baba123';

try 
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e)
{
    file_put_contents('erreurs.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
    die("Erreur de connexion : " . $e->getMessage());
}
?>