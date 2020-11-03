<?php
// Petit exercice afficher une phrase a l'aide de variable
// Afficher "Bonjour NOM PRENOM, vous avez eu 15 de moyenne

$prenom = "John";
$nom = "Doe";

$note = 10;
$note2 = 20;

echo ("Bonjour, $prenom $nom, vous avez eu ") . ($note + $note2) / 2 . " de moyenne";

// Attention, il faut savoir que quand l'on mais des operations arithémetiques dans une chaine de caractere
// si on ne mais pas entres parenthese il va essayer de le faire avec la chaine de caractere et nous retourner une erreur

// Warning: A non-numeric value encountered in C:\xampp\htdocs\TutorielsPHP\Les_Variables\exercice.php on line 11
//20 de moyenne

// Correction
echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . (($note + $note2) /2) . ' de moyenne';

// Interpolation de chaine
$moyenne = ($note2 + $note) / 2;
echo "\n Bonjour $prenom $nom vous avez eu $moyenne de moyenne";
// Attention pour les interpolation de chaine on ne pourra pas faire d'operation arithemithique
// on va donc creer une variable

