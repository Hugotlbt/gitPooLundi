<?php
require_once 'Film.php';
class Acteur{
    private string $nom;
    private string $prenom;

    public function __construct (string $nom, string $prenom)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
    }
    public function GetNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function GetPrenom(): string
    {
        return $this->prenom;
    }
}