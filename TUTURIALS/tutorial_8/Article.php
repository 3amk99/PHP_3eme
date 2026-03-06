<?php
class Article 
{
    public $titre;
    public $contenu;
    //1
    public function __construct($titre, $contenu) 
    {
        //2
        $this->titre = $titre;
        $this->contenu = $contenu;
    }
    
    public function afficher() 
    {
        return "Titre : " . $this->titre . " - Contenu : " . $this->contenu;
    }
}

$article = new Article("Introduction à PHP", "PHP est un langage serveur.");
echo $article->afficher();

?>
