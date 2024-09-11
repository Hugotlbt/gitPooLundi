<?php

require_once './src/Film.php';
require_once './src/Acteur.php';
//Instancier la class Film

$film1= new Film("fongos","Goat",DateTime::createFromFormat("d/m/Y","12/05/2017"));

echo $film1->GetTitre();
echo PHP_EOL;
echo $film1->GetAnciennete();

$film1->ajouterActeur(new Acteur("jean","dzde"));
$film1->ajouterActeur(new Acteur("jev","dzsdfe"));
//Afficher le nom des acteur d'un film
foreach ($film1->getActeurs() as $acteur){
    echo $acteur->getNom();
    echo PHP_EOL;
}