<?php

require "home.php";

$article1 = new Article();
//5
$article1->setTitre("Introduction à PHP");
$article1->setContenu("PHP est un langage côté serveur.");

echo $article1->afficher();

?>