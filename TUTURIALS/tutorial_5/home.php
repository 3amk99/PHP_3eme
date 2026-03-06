<?php
require 'database.php';


$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->execute([
    'nom' => 'Alice',
    'email' => 'alice@test.com'
]);

$nom = 'Bob';
$email = 'bob@test.com';
$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
//1 
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
//2
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion Utilisateurs</title>
</head>
<body>
    <h1>Utilisateurs ajoutés</h1>
    <ul>
        <li>Alice</li>
        <li>Bob</li>
    </ul>

    <h2>Recherche par Email</h2>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE email = :email");
        $stmt->execute(['email' => 'alice@test.com']);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) 
        {
            echo "<p>Nom trouvé par email : " . htmlspecialchars($user['nom']) . "</p>";
        } else
        {
            echo "<p>Utilisateur non trouvé par email.</p>";
        }
    ?>

        <h2>Recherche par ID</h2>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE id = ?");
            $stmt->execute([1]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) 
            {
                echo "<p>Nom trouvé par ID : " . htmlspecialchars($user['nom']) . "</p>";
            } else 
            {
                echo "<p>Utilisateur non trouvé par ID.</p>";
            }
        ?>
</body>
</html>