<?php

require "home.php";

$article1 = new Article();

$article1->setTitre("Introduction à PHP");
$article1->setContenu("PHP est un langage côté serveur.");

echo $article1->afficher();

?>