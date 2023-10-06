<?php
function repondre_oui_non (string $phrase): bool {
    while (true){

        $reponse = readline($phrase . "(o)ui/(n)on : ");
        if ($reponse === "o"){
        return true;
        } elseif ($reponse === 'n'){
        return false;
        } else {
        
        }
    }
}
function demander_creneau($phrase = 'Veuillez entrer un creneau'){
        echo $phrase . "\n";
        while(true){
        $ouverture = (int)readline ('Heure d\'ouverture : ');
        if ($ouverture >= 0 && $ouverture <= 23){
            break;
        }
    }
    while (true){
        $fermeture = (int)readline('Heure de fermeture : ');
            if ($fermeture >=0 && $fermeture <=23 && $fermeture > $ouverture){
                break;
            }
    }
    return [$ouverture, $fermeture];
}
function creneaux (string $phrase = "Veuillez entrer vos créneaux"){
    $tabcreneaux = [];
    $continuer = true;
    
    while ($continuer){
        $tabcreneaux[] = demander_creneau();    
        $continuer = repondre_oui_non('Voulez vous continuer ? ');
    }
   return $tabcreneaux;
}

$creneaux = creneaux('Entrez vos créneaux');
var_dump($creneaux);