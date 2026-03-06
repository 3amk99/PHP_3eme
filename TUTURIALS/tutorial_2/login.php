<?php
include "database.php" ;
try 
{
    $sql = "SELECT * FROM Utilisateur";
    $stmt = $pdo->query($sql);
//1
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) 
{
    echo "Erreur : " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
</head>
<body>

<h2>Liste des utilisateurs</h2>

<?php
//2 
if (!empty($utilisateurs))
{
    foreach ($utilisateurs as $user) 
    {
        echo "ID : " . $user['id'] . 
             " - Nom : " . $user['nom'] . 
             " - Email : " . $user['email'] . 
             "<br>";
    }
} 
else 
{
    echo "Aucun utilisateur trouvé.";
}
?>

</body>
</html>