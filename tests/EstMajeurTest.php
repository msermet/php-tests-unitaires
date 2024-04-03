<?php

use PHPUnit\Framework\TestCase;
require_once 'src/fonctions.php';

class EstMajeurTest extends TestCase {
    public function testEstMajeur_AgeSuperieurEgal18_Vrai() {
        // Arrange
        $age = 19;
        // Acte (exécution de la fonction à tester)
        $resultat = estMajeur($age);
        // Assert
        $this->assertTrue($resultat);
    }

    public function testEstMajeur_AgeInferieur18_Faux() {
        // Arrange
        $age = 15;
        // Acte (exécution de la fonction à tester)
        $resultat = estMajeur($age);
        // Assert
        $this->assertFalse($resultat);
    }
}