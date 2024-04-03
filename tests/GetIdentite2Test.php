<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
require_once 'src/fonctions.php';

class GetIdentite2Test extends TestCase {
    // Créer un "Provider" de données
    public static function identiteProvider() : array {
        return [
            "jean dupond" => ["jean","dupond","Jean DUPOND"],
            "JEAN DUPOND" => ["JEAN","DUPOND","Jean DUPOND"],
            "jEAn duPOnD" => ["jEAn","duPOnD","Jean DUPOND"]
        ];
    }
    #[DataProvider('identiteProvider')]
    public function testGetIdentite_AvecPrenomEtNomRenseignes_IdentiteCorrecte($prenom,$nom,$resultatAttendu) {
        // Acte (exécution de la fonction à tester)
        $resultat = getIdentite($prenom,$nom);
        // Assert
        $this->assertEquals($resultatAttendu,$resultat);
    }
}