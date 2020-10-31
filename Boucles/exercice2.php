<?php

/* 
    Enoncé de l'exercice:
        On veut demander à l'utilisateur de rentrer les horaires d'ouverture du magagin
        On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert 

    Mon PSEUDO CODE
        TANT QUE on demande à l'utilisateur de rentrer une horaire ou de taper le mot fin ALORS
            On regarde par rapport a la condition des plages horaire du magasin
            On affiche la réponse par raport à sa demande
        FIN TANT QUE
*/
$entree = null;

while (true) {
    $entree = readline("Entrez une horaire ou tapez le mot 'fin' : ");
    if ($entree == "fin" || $entree == "FIN") {
        echo "Merci à bientot !";
        break;
    }
    elseif ($entree >= 10 && $entree <= 12 || $entree >= 14 && $entree < 18) {
        echo "Le magasin est actuellement ouvert.\n\n";
    } else {
        echo "Le magasin est actuellement fermée !\n\n";
    }
}