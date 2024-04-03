<?php

require_once 'src/fonctions.php';

$prenom = "jean";
$nom = "dupond";
$identite = getIdentite($prenom,$nom);
echo $identite;