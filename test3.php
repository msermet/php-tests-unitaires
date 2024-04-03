<?php

require_once 'src/fonctions.php';

$prenom = "JeaN";
$nom = "duPoNd";
$identite = getIdentite($prenom,$nom);
echo $identite;