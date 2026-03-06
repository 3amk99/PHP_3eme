<?php
$host = 'localhost';
$dbname = 'blogdb';
$username = 'root';
$password = 'baba123';

//1 
try 
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
//2
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $message = "Connexion réussie à la base $dbname";
}
//3
catch (PDOException $e) 
{
    $message = "Erreur de connexion : " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Test PDO</title>
</head>
<body>

<h2>Test Database Connection</h2>

<p><?php echo $message; ?></p>

</body>
</html>