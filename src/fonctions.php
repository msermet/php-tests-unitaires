<?php

function getIdentite(string $prenom, string $nom) : string {
    if (empty($prenom) && empty($nom)) {
        return "";
    } else {
        return ucfirst(strtolower($prenom)).' '.strtoupper($nom);
    }
}

// Fonction permettant de déterminer si une personne est majeur en fonction de son âge
function estMajeur (int $age) : bool {
    return $age >= 18;
}

function calculerSommePairs (array $tableau) : int {
    $somme = 0;
    if (!empty($tableau)) {
        foreach ($tableau as $element) {
            if ($element%2==0) {
                $somme += $element;
            }
        }
        return $somme;
    }
    return $somme;
}

function calculerTarifAge(string $age) : string {
    $tarif = "";
    if ($age<0) {
        return "age incorrect";
    }
    if ($age<18) {
        $tarif = "tarif reduit";
        return $tarif;
    } elseif ($age>=18 && $age<65) {
        $tarif = "tarif plein";
        return $tarif;
    } else {
        $tarif = "tarif senior";
        return $tarif;
    }

}

function transformerPhrase(string $phrase) : string {
    if (!isset($phrase)) {
        return $phrase;
    }

    if(str_ends_with($phrase,"e")) {
        $phrase.="d";
    }
    if (str_contains($phrase, 'a'))  {
        $phrase=str_replace("a", "4",$phrase);
    }
    return $phrase;


}

