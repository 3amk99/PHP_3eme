<?php
require 'Article.php';
//3
class BlogArticle extends Article 
{
    private $auteur;

    public function __construct($titre, $contenu, $auteur) 
    {
        //4
        parent::__construct($titre, $contenu);
        $this->auteur = $auteur;
    }

    public function afficher() 
    {
        return parent::afficher() . " - Auteur : " . $this->auteur;
    }
}
