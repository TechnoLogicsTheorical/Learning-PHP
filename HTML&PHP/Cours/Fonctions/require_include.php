<?php
/* 
    Jusqu'a maintenant, nous avons travaillée avec plusieurs fichiers, le probleme c'est que l'on peut pas 
    reutiliser les fonctions que nous avons créer notament dans notre fichier (funtion.php) que nous avons créer 
    auparavent avec nos fonctions (prompts), si nous devons réecrire encore et encore nos fonctions, cela ne
    serais pas très intéressant et avantageux..
    
    C'est la qu'intervient les fonctions require et include pour charger/inclure des fichiers php dans des ceux 
    que nous utilisons a l'instanté et nous permet de mieux morceller notre logique

    Maintenant, si je souhaite utiliser des fonctions d'un autre fichier, nous avons plus qu'a appelé la fonction
    php 'include' suivi du chemin d'acces à notre convenance, tous ce qui est dans ce fichier sera dès à present
    disponible dans notre fichier actuelle, que ce sois les variables ou les fonctions
*/

// include('functions.php');

// var_dump(promptContinue());

/* 
    Il existe également une autre fonction, nous permettant de faire la meme chose, sauf que la specifité de ce
    de ce dernier, et que si nous fesont une erreur de frappe par exemple l'oublie d'un (s), il va nous dire
    attention, le fichier que tu me demande n'est pas existant et ce terminer par une erreur !

    Il arrete directement les instructions suivantes par rapport au include !

    Il existe egalement les memes fonctions sauf qu'il est ecrit par rapport à des 'once', (include_once)
    ca fonctionnalité est d'inclure qu'une seul fois le fichier contenant nos instructions.
    Elle est tres utile si on aurrais découper encore nos fonctions créaneaux dans un autre fichier qui lui serai
    requit dans notre fichier actuelle, ca nous genererais une erreur disant que nous pouvons pas
    redéclarer les fonctions
*/