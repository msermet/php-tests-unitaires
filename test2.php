<?php

require_once 'src/fonctions.php';

$prenom = "JEAN";
$nom = "DUPOND";
$identite = getIdentite($prenom,$nom);
echo $identite;
