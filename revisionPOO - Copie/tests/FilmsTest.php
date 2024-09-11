<?php
require_once './src/Film.php';
require_once './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Film;

class FilmsTest extends TestCase
{
    private \App\Film $film;

    protected function setUp(): void
    {
        $this->film = new \Film();
        //Cette methode est applé lors de l'éxécution de chaque test
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function ajouterActeur_MemePrenom_False()
    {
        $this->

    }
}