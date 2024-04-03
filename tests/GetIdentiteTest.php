<?php

use PHPUnit\Framework\TestCase;
require_once 'src/fonctions.php';

class GetIdentiteTest extends TestCase {

    public function testGetIdentite_AvecPrenomEtNomEnMinuscules_IdentiteCorrecte() {
        // Arrange
        $prenom = 'jean';
        $nom = 'dupond';
        // Acte (exécution de la fonction à tester)
        $resultat = getIdentite($prenom,$nom);
        // Assert
        $this->assertEquals("Jean DUPOND",$resultat);
    }

    public function testGetIdentite_AvecPrenomEtNomEnMajuscules_IdentiteCorrecte() {
        // Arrange
        $prenom = 'JEAN';
        $nom = 'DUPOND';
        // Acte (exécution de la fonction à tester)
        $resultat = getIdentite($prenom,$nom);
        // Assert
        $this->assertEquals("Jean DUPOND",$resultat);
    }

    public function testGetIdentite_AvecPrenomEtNomMinusculesMajuscules_IdentiteCorrecte() {
        // Arrange
        $prenom = 'jEaN';
        $nom = 'duPOnD';
        // Acte (exécution de la fonction à tester)
        $resultat = getIdentite($prenom,$nom);
        // Assert
        $this->assertEquals("Jean DUPOND",$resultat);
    }

    public function testGetIdentite_AvecPrenomEtNomNonRenseignés_ChaineVide() {
        // Arrange
        $prenom = '';
        $nom = '';
        // Acte (exécution de la fonction à tester)
        $resultat = getIdentite($prenom,$nom);
        // Assert
        $this->assertEquals("",$resultat);
    }

    public function testGetIdentite_AvecPrenomComposéTiretEtNomRenseigné_IdentiteCorrecte() {
        // Arrange
        $prenom = 'jean-charles';
        $nom = 'dupond';
        // Acte (exécution de la fonction à tester)
        $resultat = getIdentite($prenom,$nom);
        // Assert
        $this->assertEquals("Jean-Charles Dupond",$resultat);
    }

    public function testGetIdentite_AvecPrenomComposéEspaceEtNomRenseigné_IdentiteCorrecte() {
        // Arrange
        $prenom = 'jean charles';
        $nom = 'dupond';
        // Acte (exécution de la fonction à tester)
        $resultat = getIdentite($prenom,$nom);
        // Assert
        $this->assertEquals("Jean-Charles Dupond",$resultat);
    }
}