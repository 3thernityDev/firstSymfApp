<?php

namespace App\Entity;

class Arbre
{

    // Attributs
    private $taille;
    private $nom;

    // Methodes

    // GET
    public function getTaille()
    {
        return $this->taille;
    }
    public function getNom()
    {
        return $this->nom;
    }

    // UPDATE
    public function setTaille($data)
    {
        $this->taille = $data;
    }
    public function setNom($data)
    {
        $this->nom = $data;
    }
}
