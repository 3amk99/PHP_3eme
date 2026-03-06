<?php
require 'database.php';

if (isset($_POST['send']))
{
    //1
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if (!$email)
    {
        die("Email invalide !");
    }

    try 
    {
        $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
        $stmt->execute([
            'nom' => $nom,
            'email' => $email
        ]);
        echo "<p>Utilisateur ajouté avec succès.</p>";
    } 
    catch (PDOException $e) 
    {
        file_put_contents('logs/errors.log', $e->getMessage() . "\n", FILE_APPEND);
        echo "<p>Une erreur est survenue. Contactez l’administrateur.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Utilisateur</title>
</head>
<body>
    <h1>Ajouter un Utilisateur</h1>
    <form method="POST">
        Nom:<br>
        <input type="text" name="nom" id="nom" required><br><br>

        Email:<br>
        <input type="email" name="email" id="email" required><br><br>

        <button type="submit" name="send" > Send  </button>
    </form>
</body>
</html>