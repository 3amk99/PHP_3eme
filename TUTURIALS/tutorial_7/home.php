<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article Example</title>
</head>
<body>

<h1>Afficher un article</h1>

<?php

class Article 
{
    public $titre;
    public $contenu;

    public function afficher() 
    {
        return "Titre : " . $this->titre . " - Contenu : " . $this->contenu;
    }
}
















//1
$article1 = new Article();












$article1->titre = "Mon premier article";
$article1->contenu = "Ceci est le contenu de mon article.";
//2
echo "<p>" . $article1->afficher() . "</p>";

?>

</body>
</html>