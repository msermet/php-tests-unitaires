<?php

function getIdentite(string $prenom, string $nom) : string {
    return ucfirst(strtolower($prenom)).' '.strtoupper($nom);
}