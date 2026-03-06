<?php

class Article 
{
    //1
    private $titre;
    private $contenu;
    //2
    public function setTitre($titre) 
    {
        if (!empty($titre) && strlen($titre) > 3) 
        {
            $this->titre = $titre;
        } 
        else 
        {
            echo "Titre invalide.";
        }
    }
    //3
    public function getTitre() 
    {
        return $this->titre;
    }

    public function setContenu($contenu) 
    {
        //4
        $this->contenu = htmlspecialchars($contenu);
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function afficher() 
    {
        return "Titre : {$this->titre} - Contenu : {$this->contenu}";
    }
}
?>