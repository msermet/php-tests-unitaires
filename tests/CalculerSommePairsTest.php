<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once 'src/fonctions.php';

class CalculerSommePairsTest extends TestCase {
    // Créer un "Provider" de données
    public static function sommePairsProvider() : array {
        return [
            "[]" => [[],0],
            "[1,5,9,77,99,3]" => [[1,5,9,77,99,3],0],
            "[2,-4,6,8,10,12]" => [[2,-4,6,8,10,12],34],
            "[2,3,4,6,99,8,13,11,10,12]" => [[2,3,4,6,99,8,13,11,10,12],42]
        ];
    }
    #[DataProvider('sommePairsProvider')]
    public function testSommePairs_SommeCorrecte($tableau,$resultatAttendu) {
        // Acte (exécution de la fonction à tester)
        $resultat = calculerSommePairs($tableau);
        // Assert
        $this->assertEquals($resultatAttendu,$resultat);
    }

}