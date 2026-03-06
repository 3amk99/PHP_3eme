<?php

require 'database.php';

if(isset($_POST['test']))
{
    try 
    {
        $pdo->query("SELECT * FROM table_inexistante");
    } 
    catch (PDOException $e)
    {
        //1
        file_put_contents('erreurs.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
        echo "Erreur SQL : Une erreur est survenue. Contactez l'administrateur.";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="test">Tester requête SQL</button>
    </form>
</body>
</html>