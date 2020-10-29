<!-- Balise html php permettant de concevoir un programme ou executer des codes -->
<?php
// Les variables en PHP permet de sauvegarder des variables temporairement dans notre code
// Pour pouvoir ensuite les réutiliser plus tard ...
// Les variables commence par un dollar suivi de nom de la variable
// Le signe = permet d'assigner une valeur !
// Le signe ; permet de dire que nous avons fini notre instruction

$nom = "Serum";
$prenom = "Tony";
echo ($nom);

// Les variables numerique peuvent etre calculer via les differents opérateurs arithémitiques
// (+, /, *, -)
$note = 10;
$note2 = 15;
// Quand nous mettons entre parenthèse une opération, on lui dit priorise cette operation puis fait les autres
echo (($note + $note2) / 2);//Resultat 12.5
// Voici la déference
echo ($note + $note2 / 2);// Resultat 17.5

// Attentions nous pouvons pas additionner de variables entre elle :

// echo($nom + $prenom);

//PHP Warning:  A non-numeric value encountered in C:\xampp\htdocs\TutorielsPHP\Les_Variables\demo.php on line 23
// Mais PHP va essayer de convertir les variables en nombres donc 0 et 0 puisque ce ne sont pas des nombres
// Mais si nous aurrions mis en chaine de caracteres des nombres cela aurrais fonctionnées !

// Nous pourrions tous simplement additionner des chaines de caractere ensemble, ce qu'on appelle de la concatenation
// de chaine de caractere qui va ce faire avec le (.)
echo($nom . $prenom); // Resultat SerumTony

// Automatiquement php va comprendre qui doit addition les chaines de caractere !
// On peut ajouter une chaine de caractere pour faire un espace entre les strings ...

echo($nom . " " . $prenom);

// Nous avons la possiblité de sauter des lignes ou d'indiquer avec le biais de caracteres d'echappement
// A savoir que ces derniers s'utilise seulement dans les guillements ("") et ne sont pas compris des simples
// guillement ('') ...
echo($nom . '\n' . $prenom); // AFFICHE Serum\nTony

echo($nom . "\n" . $prenom); // AFFICHE Serum
//Tony

// Mais nous avons la possiblité de créer une string de variables
echo ("$nom $prenom"); // Resultat Serum Tony

// Il egalement possible d'inserer les caracteres d'echappements
echo ("$nom \n $prenom");
// Mais pas possible en tant que '' (simple guillemets)

// Dans ce que nous avons vu, nous avons vu les types de variables simples en tant, les chaines de caracteres,
// Les nombres mais faut savoir qu'il existe d'autres types de variables 
// Comme étant les Boolleans, permettant de définir les variables qui sont soit VRAI soit FAUSSE
// Nous permettant plus tard dans l'avenir dans les conditions ..
$boolean = true;
$boolean = false;

// Nous avons un autre type s'appellant le type 'NULL', qui permet de sauvegarder une variable qui est nulle,
// qui n'a pas de valeur par défault
$nullVar = null;
// On peut également faire une variable sans assignement qui sera egalement typée a null
$nullVar;

//On peut egalement affichée la variable mais il y aurra rien ...
echo ($nullVar);

// Petite particularité si nous mettons par la balise de fermeture php 
?>