<?php
/*
    Les fonctions permette défectuer une partie de logiques et de nous renvoyer un entryat
    elle permet d'eviter de ce repeter et deféctuer des traitements spécifique

    Dans notre langage de programmation actuelle, les fonctions s'ecrivent de la manière suivante
        - Nous allons d'abord par déclarer un nom respectant la convention de nommage
        - Puis nous allons ouvrir, les parenthèses et entrer des arguments de fonction, ce qui peut etre 
        des variables et ou egalement des valeurs
        - Ensuite ces fonctions vont renvoyer un entryat lorsque que sont executées
    demo($var, 100);
    Ce entryat peut etre directement affichée a travers la fonction echo ou stockée dans une variable
    Nous avons déja pour coup utiliser des fonctions, dans les précedentes sections comme par exemple
        - readline
        - echo
        - print_r
*/

/*
    Une fonction permettera d'eviter de repeter plus fois les memes instructions
    Pour déclarer une fonction en PHP rien de plus simple, nous devrons indiquer que nous souhaitons
    créer une fonction à l'aide du mot-clé (function) suivi du nom de notre fonction !
    Attention a bien respecter la convention de nommage, a savoir que nous avons que le droit
    d'utiliser des caractere alpha numerique et des underscores

    Attention également à ne pas utiliser des noms de fonction préalablement défini

    Nous allons créer une fonction qui va afficher bonjour ainsi que le nom de la personne, et nous 
    aurrons besoin de parametre pour afficher le nom de la personne

    Suivi de bloc d'instruction entre accolades
*/

// function sayHello($nom) {
//     echo "Salut, $nom \n";
// }

// sayHello("Tony");

/* 
    Ceci est la premier manière décrire une fonction, mais il existe une seconde manière de déclarer
    une fonction qui a la possibilité de renvoyer un entryat, par exemple, on aimerais bien stocker
    ce dernier dans une variable puis de l'afficher
    Dans ce cas la, il faudra que notre fonction nous renvoie quelque chose au lieu d'afficher une chaine de
    caractere, il faudra donc utiliser le mot-clé (return)


*/

// function sayHello($nom) {
//     return "Salut, $nom \n";
// }

// echo(sayHello("Tony"));

/*
    Attention, toute fois si on ne passe pas d'argument dans notre fonction, une erreur s'afficher puisque 
    quelle attend ce parametre pour executer son bloc d'instruction
    Nous pouvons alors soit definir une valeur par défaut dans notre argument, comme sa si nous avons pas défini
    de parametre dans notre fonction, il serra automatiquement défini

    Apres ce que l'on pourrais faire c'est utiliser une condition nous permettant de verifier si, la valeur attendu
    est egale a 'null'
*/

// function sayHello($nom = null) {
//     if ($nom == null) {
//         return "Salut \n";
//     }
//     return "Salut, $nom \n";
// }

// echo sayHello();
// echo sayHello("Nico");

/*
    Autre suptilité des fonctions, il faut savoir qu'elle non pas acces a un contexte exterieure !
    Toute variable exterieur, qui sont utiliser à l'exterieur de la fonction et non défini en parametre de
    fonction ne sont pas utilisable 
*/

// Exercice REPONDRE OUI ou NON

// function promptContinue()
// {
//     $result = true;
//     while ($result) {
//         $entry = readline("Voulez vous continuer ? (Y/N) : \n");
//         if (strtolower($entry === "y") || strtolower($entry === "yes")) {
//             $result = true;
//         } elseif (strtolower($entry === "n") || strtolower($entry === "no")) {
//             $result = false;
//         }
//     }
//     echo 'Le programme, c\'est terminée !';
//     return $result;
// }

// echo(promptContinue());


// Correction 

function promptContinue($phrase = "Voulez vous continuer ?") {
    while (true) {
        $response = readline("$phrase - (o)ui/(n)on :");
        if ($response === "o") {
            return true;
        } elseif ($response === "n") {
            return false;
        }
    }
}

// Autre exercice, on voudrais que l'utilisateur rentre un créneau d'horaire

function askTimeSlot($string = "Veuillez entrez un créneau") {
    echo("$string\n");
    while (true) {
        $openedHour = (int)readline("Heure d'ouverture : ");
        if ($openedHour >= 0 && $openedHour <= 23 && $openedHour != "") {
            break;
        }
    }
    while (true) {
        $closedHour = (int)readline("Heure de fermeture : ");
        if ($closedHour >= 0 && $closedHour <= 23 && $closedHour > $openedHour) {
            break;
        }
    }
    return [$openedHour, $closedHour];
}

/*
    On va voir également que l'on peut utiliser des fonctions dans des fonctions
*/

function askTimeSlots() {
    $continue = true;
    $result = [];
    while ($continue == true) {
        $result[] = askTimeSlot();
        $continue = promptContinue("Voulez vous entrez un autre créneau horaire ?");
    }
    return $result;
}

// print_r(askTimeSlots());

/*
    Donc voici l'utilisation de fonction dans une fonction, mais il reste quelques notions à avoir pour comprendre certaines notions
    Depuis PHP 7, nous avons la possibilité de pouvoir typée les parametres des fonctions cela permet un avantage de lisibilité 
    et de confusion d'erreurs 
    Pour typée un parametre il suffit de reinseigner le mot clé avant le nom de la variable par exemple dans notre fonction
    appelée askTimeSlot() nous pourrons dire que nous souhaite que chaine de caractere (string $phrase)
    En revanche, il faudra faire attention, car le langage essayera de convertir implicitement toute chose qui ne conviendra
    pas au type concernée notament pour les int, si nous rentrons une chaine de caractere, il sera convertie en 0 !

    Mais il faut savoir que l'on peut empecher PHP de faire cette conversion, pour cela il faut qu'au tous début de notre fichier
    qu'il faut déclarer une instruction, nous permettant de le faire :
        declare(strict_types=1);
    Qui empeche toute conversion implicite

    Autre nouvéaute dans PHP 7 uniquement, nous avons la possibilité de typée un return, attention cepandant elle ne ce place pas
    au niveau de l'instruction return mais juste apres le(s) arguments de fonction précedée du caractere (:)
        function test(string $phrase) :int { return 1 }
    Enfin derniere petite suptilité, si un parametre doit etre (null) lorsque que l'on defini en meme temps qu'il est typée string,
    et que son type est precédemment collé d'un (?), c'est que la valeur peut possédé une chaine de caractere ou etre null
        function test(?string $phrase) :?int { return 1 }  
*/