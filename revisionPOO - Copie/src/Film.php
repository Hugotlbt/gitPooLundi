<?php
require_once 'Acteur.php';
class Film{

    //definnir les attributs

    private string $titre;
    private string $realisateur;
    private DateTime $datesortie;
// Association acteur
    private array $acteurs ;

    // Methodes
    // Constructeur permettant de crer des instances d'une class
    // Instanciation
    public function __construct (string $titre, string $realisateur, DateTime $datesortie) // si retrour : string
    {
        $this->titre=$titre;
        $this->realisateur=$realisateur;
        $this->datesortie=$datesortie;
        $this->acteurs=[];
    }

    //ascesseur ou getter
    public function GetTitre(): string
    {
        return $this->titre;
    }
    public function GetRealisateur(): string
    {
        return $this->realisateur;
    }
    public function GetDatedesortie(): DateTime
    {
        return $this->datesortie;
    }

    public function GetAnciennete(): int
    {
        $dateJour= new DateTime();
        $intervalle = $dateJour->diff($this->datesortie);
        return $intervalle->y;

    }
    public function ajouterActeur(Acteur $acteur): void {
        if (in_array($acteur,$this->acteurs)){
            throw new \Exception("L'acteur ".$acteur->GetPrenom()." ".$acteur->GetNom()."à déjà été ajouté au film".$this->GetTitre());
        }
        $this->acteurs[]=$acteur;
    }
public function getActeurs (): array {
        return $this->acteurs;
    }
}
