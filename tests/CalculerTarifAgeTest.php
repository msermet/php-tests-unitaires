<?php

use PHPUnit\Framework\TestCase;
require_once 'src/fonctions.php';

class CalculerTarifAgeTest extends TestCase {
    public function testCalculerTarifAge_AgeInferieur18_TarifReduit() {
        // Arrange
        $age = 15;
        // Acte (exécution de la fonction à tester)
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("tarif reduit",$resultat);
    }

    public function testCalculerTarifAge_AgeSuperieur18EtInferieur65_TarifPlein() {
        // Arrange
        $age = 56;
        // Acte (exécution de la fonction à tester)
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("tarif plein",$resultat);
    }

    public function testCalculerTarifAge_AgeSuperieur65_TarifPlein() {
        // Arrange
        $age = 86;
        // Acte (exécution de la fonction à tester)
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("tarif senior",$resultat);
    }

    public function testCalculerTarifAge_AgeInferieur0_AgeIncorrect() {
        // Arrange
        $age = -5;
        // Acte (exécution de la fonction à tester)
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("age incorrect",$resultat);
    }

    public function testCalculerTarifAge_AgeNonRenseigné_AgeIncorrect() {
        // Arrange
        $age = "";
        // Acte (exécution de la fonction à tester)
        $resultat = calculerTarifAge($age);
        // Assert
        $this->assertEquals("age incorrect",$resultat);
    }
}