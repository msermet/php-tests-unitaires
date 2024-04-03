<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
require_once 'src/fonctions.php';

class TransformerPhraseTest extends TestCase {
    // Créer un "Provider" de données
    public static function transformerPhraseProvider() : array {
        return [
            "Salut gars" => ["Salut gars","S4lut g4rs"],
            "" => ["",""],
            "Je m'appelle Maxime" => ["Je m'appelle Maxime","Jed m'4ppelled M4ximed"]
        ];
    }
    #[DataProvider('transformerPhraseProvider')]
    public function testTransformerPhrase_Resultat($phrase,$resultatAttendu) {
        // Acte (exécution de la fonction à tester)
        $resultat = transformerPhrase($phrase);
        // Assert
        $this->assertEquals($resultatAttendu,$resultat);
    }
}