<?php
/*
    Nous allons aborder les booleens et les conditions dans ce document PHP
    Tous d'abord, nous allons créer une variable qui va contenir un nombre entier, et avec cette dernier
    nous allons la comparer cette note pour savoir si il a l'a moyenne !
*/
$note = 12;

/* 
    Tres biens, nous allons aborder maintenant les conditions au travers des expressions (if et else),
    IF du terme (SI) en francais pour exprimer une condition, nous allons devoir, renseigner en parenthèse
    (condition) notre conditions ou quelque chose qui va prendre une valeur booléeene (true ou false)
    suivi de ces accolades ( { } ) ouvrantes et fermantes qui va déterminer notre code à executer,
    si jamais la condition est rempli et obtiens true (vrai)....

    Puis nous metterons, notre expression (else) qui ne prendras pas d'arguments/ de conditions entre parenthese
    suivi toujours de ces accolades ...
    A savoir que cette expression else ne sera éxecuter que si seulement la condition du if n'a pas été rempli

    Dans notre nous allons demander si la note est superieur a la moyenne du coup 10
*/


if ($note > 10) {
    echo "\n La note est supérieur à la moyenne"; 
}
else {
    echo "\n La note n'est pas supérieur à la moyenne";
}

// Affiche : La note est supérieur à la moyenne

/*
    Dans notre condition (if), nous vouyons que nous pouvons utiliser les opérateurs arithmétiques
    superieur : (>) inferieur (<) mais aussi (>=) qui signifie supérieur ou égale dans notre cas
    il serra utile de l'avoir et pour cause, nous avons le besoin de voir si cella est superieur ou egale
    à 10, sinon la on aura un probleme puisque que l'on dis non faux que tu est 11 pour afficher le message !
*/
$note = 10;

if ($note > 10) {
    echo "\n La note est supérieur à la moyenne"; 
}
else {
    echo "\n La note n'est pas supérieur à la moyenne";
}

// En voici la preuve : La note n'est pas supérieur à la moyenne

// Modifions cella
if ($note >= 10) {
    echo "\n La note est supérieur ou egale à la moyenne"; 
}
else {
    echo "\n La note n'est pas supérieur à la moyenne";
}

/* 
    Il est bon de savoir, que les interpolation de chaine fonctionnne dans ce langage de programmation
    qui permet d'automatique de convertir une chaine de caractere en nombre, attention cependant si vous 
    gliser des caracteres alphabetiques, il ne les prendra pas en compte.
    Expliquons le comportement de la convertion automatique :
    Vu que le programme intéprete qu'il ya une operations arithémitique/numérique, il va procede automatique
    à la convertion pour tenter de faire l'operation mathématiques
*/

// Rendons interactif, notre code au travers de la fonction readline()

echo "\n\n Passage au code interactif ! \n\n";

// $note = readline('Entrez une note (0-20) :');

// if ($note >= 10) {
//     echo "\n Vous avez la moyenne"; 
// }
// else {
//     echo "\n Oups, vous n'avez pas bien réviser :/";
// }

// Maintenant, voyons comment ajouter un message particulier, si nous avons tous juste la moyenne !
// Pour cela, il nous suffit juste d'ajouter une condition dans une condition, d'ailleur pour cela
// Nous l'appellons une condition imbriquée ! A retenir pour le langage technique
// Par la suite nous allons demander de checker si la variable est egale a 10
// Attention, à ne pas mettre un simple (=) mais un (==) double egale car sinon, nous disons a notre 
// programme d'assigner une nouvelle et donc cela sera par la suite une source de bug ....

// if ($note >= 10) {
//     if ($note == 10) {
//         echo "\n Vous avez tous juste la moyenne";
//     }
//     else {
//         echo "\n Vous avez la moyenne"; 
//     }
// }
// else {
//     echo "\n Oups, vous n'avez pas bien réviser :/";
// }

/*
    Cette syntaxe imbriquée peut etre source de confisions pour le développeur et nous possède également
    un outil nous permetttant de pouvons déclarer une autre conditions sans devoir l'imbriquer
*/

// if ($note > 10) {
//     echo "\n Vous avez la moyenne";    
// } elseif ($note == 10) {
//     echo "\n Vous avez tous juste la moyenne";
// } else {
//     echo "\n Oups, vous n'avez pas bien réviser :/";
// }

/* 
    Attention des fois dans l'operateur egale de comparation, nous avons un autre opérateur egale avec
    (===) Trois egale qui nous permet de checker la valeur ainsi que son type est identique a la variable
    Comme nous rentrons, dans notre readline une valeur taper au clavier, le programme va dire non ce n'est pas le
    même mais une chaine de caractere ! Comparer a la variable qui elle est une valeur numerique ...

    Donc notre programme qui converti implicitement notre valeur rentrée dans notre variable en tant que 
    chaine de caractere pourra faire des bugs assez, par exemple dans le cas ou nous rentrons une chaine de
    caractere vide dans notre programme, automatiquement converti nous serrons vraiment dans le bon cas et nous 
    donnera surment une reponse non attendu par rapport a notre if else
*/

// Préferons utiliser le triple egale afin de checker les deux valeurs (valeur + type), afin de ne pas faire
// d'erreur et d'avoir des comportements, nous voulu par rapport à ce que l'on souhaite

// Pour notre probleme de convertion, nous avons la possibilité de dire a notre programme, attention, je veux
// que tu me convertise explicitement cette valeur dans CE TYPE et pas un autre ...


// $note = (int)readline('Entrez une note (0-20) :');

// if ($note > 10) {
//     echo "\n Vous avez la moyenne";    
// } elseif ($note === 10) {
//     echo "\n Vous avez tous juste la moyenne";
// } else {
//     echo "\n Oups, vous n'avez pas bien réviser :/";
// }

// $action = (int)readline("VVVVV Entrez une action à faire : [1: Attaquer | 2: Défendre | 3: Passer mon tour VVVV\n");

// if ($action === 1) {
//     echo 'J\'attaque';
// } elseif ($action === 2) {
//     echo 'Je défend';
// } elseif ($action === 3) {
//     echo 'Je passe mon tour';
// } else {
//     echo 'Commande inconnue';
// }

/* 
    Voyons, un autre cas de conditons, nous permettant de faire des actions selons des cas, car cela peut etre
    fastidieux de le faire de repeter chaque conditions pour chaque if elseif.
    C'est pour cela que les SWITCH CASE existe !!!

    Nous avons juste à déclarer une condition apres avoir entrer l'expression (switch () ), suivi des accolades ..
    notre condition est simplement, la variable est il n'est pas nécessaire de déclarer une condition avec une 
    opération arithmétique dans ces parentheses 

    Mais de déclarer par la suite des cas, pour chaque actions. Avec le biais du mot clée "case" ainsi du resultat
    ou de l'expression que nous souhaitons avoir ! 
    
    Et on fini notre cas par un (break;) pour dire que notre instruction de blog e
*/

// switch ($action) {
//     case 1:
//         echo 'J\'attaque !';
//         break;
//     case 2:
//         echo 'Je défend';
//         break;
//     case 3:
//         echo 'Je passe mon tour';
//         break;
//     default:
//         echo 'Commande inconnue';
//         break;
// }

/*
    Maintenant, nous voir et explorer les operateurs logiques, parce qu'une condition peut etre tres
    simple comme nous venons de le voir mais parfois nous pouvons avoir des opérations un peu plus complexe
    par exemple on peut demander à l'utilisateur quelle heure, il est, et meme temps demander si il est ouvert

    Nous allons définir donc une variable stockant l'heure, une fois cela nous allons créer une condition
    qui devra checker, si l'heure qui a été rentrer correspond à l'heure d'ouverture
*/

$heure = (int)readline("Entrez une heure : ");

if (($heure >= 9 AND $heure <= 12) OR ($heure >= 14 AND $heure <= 19)) {
    echo 'Le magasin est actuellement ouvert';
} else {
    echo 'Le magasin est fermée';
}

/* 
    Pour comprendre, les conditions il faut savoir que ($heure >= 9) cette expression retourne une valeur de type
    booleene dans la condition, si l'heure rentrée par notre fonction (readline) est comme valeur 8, l'operation
    arithmétique de notre condition va être evaluée à faux 

    Il existe operateur permettant d'inverse la tendance au niveau d'une condition
    C'est l'operateur de difference (!)
*/