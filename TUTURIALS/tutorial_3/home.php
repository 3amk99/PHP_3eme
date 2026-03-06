<?php
require 'connexion.php';

try 
{
    echo "<h3>INSERT</h3>";
    $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
    $stmt->execute([
        'nom' => 'Charlie',
        'email' => 'charlie@test.com'
    ]);

    echo $stmt->rowCount() . " ligne(s) insérée(s).<br><br>";


    echo "<h3>UPDATE</h3>";

    $stmt = $pdo->prepare("UPDATE Utilisateur SET email = :email WHERE id = :id");
    $stmt->execute([
        'email' => 'charlie.new@test.com',
        'id' => 1
    ]);

    echo $stmt->rowCount() . " ligne(s) mise(s) à jour.<br><br>";


    echo "<h3> DELETE</h3>";

    $stmt = $pdo->prepare("DELETE FROM Utilisateur WHERE id = :id");
    $stmt->execute([
        'id' => 1
    ]);

    echo $stmt->rowCount() . " ligne(s) supprimée(s).<br><br>";

} 
catch (PDOException $e) 
{
    echo "Erreur : " . $e->getMessage();
}
?>