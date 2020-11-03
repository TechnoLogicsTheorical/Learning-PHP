<?php
/*
    L'objectif de cette est de pratiquer pour bien comprendre à realiser des algorithmes
    Voici l'enoncée :
        Nous devons, concevoir un systeme permettant à l'utilisateur de pouvoir rentrer des notes
        puis d'afficher ces notes

    ALGORITHME :
        - On demande à l'utilisateur de rentrer une note ou de taper le mot fin
        - Chaque note sera sauvegarder dans un tableau
        - Puis à la fin, on affiche le tableau contenant nos notes
*/

// Start 15:30
// Comporte non désirée et debug ! 15:43
// Resolue a moitié abandon 15:55 BUG convertion explicite ...

/*
$notes = [];

while (true) {
    $entreeUser = (int)readline("Entrée une note :\n");
    if ($entreeUser == "fin" OR $entreeUser == "FIN")
    {
        echo "*** Fin des saisies de notes ***\n\n";
        break;
    } else {
        $notes[] = $entreeUser;
    }
}

foreach ($notes as $key => $note) {
    echo "Valeur n°$key : $note\n";
}
*/

/* Aide PSEUDO-CODE

    TANT QUE l'utilisateur ne tape pas (FIN)
        - On ajoute la note tapée au tableau notes
    POUR CHAQUE note DANS notes
        On affiche la note
*/

//Rententation apres aide 16:20
//Ended for time : 16:47

// $notes = [];

// while (($entree = readline("Entrée une note: \n")) !== "fin") {
//     $entree = (int)$entree;
//     if ($entree == 0) {
//         echo "*** Vous n'avez pas rentrée une valeur de type numérique ***\n";
//     } else {
//         $notes[] = $entree;
//     }
// }

// echo "*** Fin de saisie des notes *** \n";

// foreach ($notes as $key => $note) {
//     echo "Valeur n°$key : $note\n";
// }

/* Correction */

$notes = [];
$action = null;
while (true) {
    $action = readline("Veuillez saisir une note ou taper le mot 'fin' : \n");
    if ($action == "fin") {
        echo "**** Fin des saisies de notes \n\n";
        break;
    } else {
        $notes[] = (int)$action;
    }
}

echo "Affichage des valeurs :\n";
foreach ($notes as $key => $note) {
    echo "- Valeur n°$key : $note \n";
}