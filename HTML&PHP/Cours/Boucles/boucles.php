<?php

/*
    Nous allons découvrir les boucles en php, à savoir qu'il esxiste 3 types différents de boucles
    Ces différentes boucles sont les suivantes :
        - La boucle (POUR)
        - La boucle (TANT QUE)
    La dernier boucle spécifique à PHP :
        - La boucle (POUR CHAQUE)
*/ 

/*
    On va commencer par apprendre la boucle TANT QUE, avec un exemple concret permettant de comprendre
    son fonctionnemeent !
    TANT QUE se traduit par un WHILE en anglais, cette dernier s'ecrit assez simple dans le langage PHP

    On va imaginer que l'utilsateur va rentrer une valeur, et si cette valeur est egale par exemple à
    10, nous lui renverrons un message bravo tu as gagné mais on a besoin de lui redemander à chaque fois

*/

/*
$chiffre = null;

while ($chiffre !== 10) {
    if ($chiffre == null){
        $chiffre = (int)readline("Trouvez le chiffre entre 1 et 10 !\n");
    }
    else {
        $chiffre = (int)readline("Faux ! Rententez votre chance :\n");
    }
}

echo 'Vous avez trouvez le bon chiffre';
*/

/*
    Nous allons maintenant, voir comment la boucle POUR fonctionne, c'est un peu différent pour le faire
    A savoir que dans nos arguments de la fonction FOR, nous devons :
        - Initialiser une premier variable qui va permettre d'iterer dans notre boucle ayant comme valeur 0
        - Suivi de la condition qui va servir de nous permettre de sortir de cette boucle
        - Et enfin le dernier arguments, va nous défini le comportement de notre variable d'iteration
    Puis maintenant dans le bloc d'instruction entre accolade, nous pouvons faire le code que nous souhaitons
*/

// for ($i = 0; $i <= 10; $i++) {
//     echo "- Iteration n°$i \n";
// }

/*
    La dernier boucle, un peu particulière est la Boucle POUR CHAQUE, elle utilisée pour l'exploration de 
    tableau, nous aurrons pu également utiliser la boucle for, pour explorer un tableau, mais le probleme de
    cette utilisation, c'est que nous devons savoir à l'avance la taille de notre tableau ..

    Ce qui est n'est pas optimisée !
*/

$notes = [12, 45, 54];

// for ($i = 0; $i < 3; $i++) {
//     echo "- Valeur du tableau n°$i : $notes[$i] \n";
// }

/* 
    Notre solution, au probleme abordée précédemment est l'utilisation de la boucle : POUR CHAQUE !
    Mais à une notation, un peu particulière !
    Pour l'utiliser, il faudra définir dans nos arguments, en premier la variable auquelle on veut iterer
    qui sera nos (notes) suivi du mot clé as ainsi et créer une seconde variable qui va être utilisée
    pour contenir chaque valeur
    Et il ne restera plus qu'a affichée notre variable contenant la donnée du tableau dans notre 
    bloc d'instruction.
*/

foreach ($notes as $note) {
    echo "- Valeur du tableau : $note \n";
}

/*
    Cette boucle est très simple à declarer par rapport à un POUR classique !
    Mais elle peut fonctionner un peu différemment en recuperant sa clé en plus de sa valeur
    Cela peut etre utile dans les cas ou on aurrais des clés possèdant des noms alphabetique comme
    par exemple le nom ou le prenom

    C'est un petit peu la meme chose sauf que nous devons spécifier que nous voulons récuperer cette
    valeur par le biais de l'operateur fléchée utiliser comme dans les tableaux .. (=>)
*/

// $eleves = [
//     "CM2" => "Tony",
//     "CM1" => "Eva",
// ];

// foreach ($eleves as $classe => $eleve) {
//     echo "Il y a $eleve dans la classe $classe \n";
// }

/*
    Nous voyons que c'est super pratique pour explorer, des tableaux complexes et nous pouvons imaginer
    la puissante de cette boucle à travers plusieurs tableaux
    Imaginons que nous avons un tableaux initial puis un autre tableau dans une clé de notre tableau,
    nous pourrons alors reparcourir ce dernier pour refaire une liste.
    
    Voici le cas explicitement parlant:
        La Clase CM2 :
            - Tony
            - Eva
        La Classe CM1 :
            - Anthony
            - Mattieu
            - Joe
    
    Si vous l'orez compris nous allons utiliser deux boucles dans une seul, appelons la en langage
    technique boucle imbriquée

*/

$eleves = [
    "CM2" => ["Tony", "Serum", "Djoe", "Raphael"],
    "CM1" => ["Eva", "Mattieu", "Scofield","Thomas"],
];

foreach ($eleves as $classe => $listeEleves) {
    echo "Voici la liste des élèves dans la classe de $classe : \n";
    foreach ($listeEleves as $eleve) {
        echo "  - $eleve\n";
    }
    echo "\n";
}