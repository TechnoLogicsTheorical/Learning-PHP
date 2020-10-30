<?php
/*
    Dans cette apprentissage, nous allons aborder les tableaux et comprendre comment fonctionne telles
    Comme nous l'avons vu dans la section des types de bases, nous avons aborder des notes d'eleves
    Le problème c'est si que nous avions plusieurs dizaines ou centaines de notes à sauvegarder en
    variables, on pourrais pas noter une centaines de variables comme sa au fur et à mesure

    C'est la que les tableaux intervient pour stocker plusieurs variables ...

    Les tableaux peuvent sauvegarder une liste de valeurs, elle peut être indexée ou non et nous reviendrons
    sur cette différence quand nous aurrions aborder les tableaux
*/

// Pour créer un tableau c'est plutôt simple, nous allons tous d'abord créer une variable nommée "notes"
// avec un (s), cela permet de savoir directement que cette variable contient plusieurs valeurs comme nous 
// l'avons vu en cours avec Emmanuel (Clin d'oeil)

$notes = [];

/* 
    Suivi des crochets désignant que l'on souhaite, un tableau de valeur, à ce moment notre tableau est 'null'
    et ne possède aucune valeur.
    A l'intérieur de ces crochets, nous allons pouvoir déclarer plusieurs valeurs, mais il devront être séparées
    par plusieurs valeurs !
    A savoir que nous pourrons assigner n'importe quels types de valeurs à l'intérieur, des nombres entiers,
    des chaines de caractères, des booleens, et autres que nous avons pas encore vu ...
    Il y a même la possibilité de mettres des tableaux dans des tableaux  
*/

$notes = [10, 20];

/*
    Ajoutons les valeurs, de nos notes de tous à l'heure !
    Ensuite si nous voulons récuperer une valeur de notre tableau, il y a une notation spécifique à cella
    par exemple, nous avons envie de récuperer la deuxieme note de notre tableau !
    Nous allons faire un echo de la variable notes entre crochets, le numéro de la case, 
    ATTENTION, il faut savoir que la première valeur commence à ZERO et pas UN !!!!
    Donc dans ce cas, nous appellerons la valeur 1 et non pas DEUX ...
*/

echo $notes[1]; //Affiche 20

// Nous pouvons voir également que nous avons la possibilité de rajouter des chaines de caractères

$notes = [10, 20, 18, 8, 9, 'Eleve'];

echo("\n$notes[5]");

/*
    Cela ne pose aucun souci comme nous venons de le voir, la fonction d'affichage (echo), nous affiche
    bien la valeur du tableau numéro 6 ...
    Nous venons de voir le premier format de tableau, que nous considérons comme format, une simple de liste
    de valeur mais il faut savoir que nous pouvons créer des tableaux un peu plus complexe !

    Donnons un exemple de cas concret, admettons nous avons envie de sauvegarder plusieurs informations
    sur un eleve ! Comme son nom, son prénom, et l'ensemble de ses notes ....
*/

/* 
    Nous pourrions effectivement créer une variable "eleve", ou dedans on l'on mettrais son nom, prenom,
    puis un autre tableau de notes
*/
echo ("\n");
$eleve = ['John', 'Doe', [10, 20, 30]];

echo ("Bonjour, $eleve[0] $eleve[1], voici ta deuxième note au contrôle : ". $eleve[2][1]);

/*
    Le problème demain, c'est si que nous avons besoin de rajouter des valeurs est que cela risque de devenir
    compliqué et fastidieux, si nous possédons plusieurs eleves et pour ajouter de nouvelles notes, le
    développeur suivant ne risque pas de savoir se que les nombres signifie ...

    Nous avons utilisée, jusqu'a présent des clés d'appels numériques [0, 1, 2, 3 ....], pour appeller
    des valeurs mais il faut savoir que nous avons la possibilité de créer des clés avec des chaines de
    caracteres comme par exemple 'nom' puis a l'aide d'une grosse fleche (=>) signifier avec un egale et
    un chevron puis la valeur associée !
*/

$eleve = ["nom" => "Doe", "prenom" => "John", "notes" => [10,20,30]];

// Voici, comment nous allons pouvoir faire afin d'associer des clés de noms au lieu de valeur numériques
// Malheureusement pour des soucis de visibilité, il est préferable de faire des retours à la lignes,
// Chaque fois que nous associont une nouvelle pair de clé valeur !

$eleve = [
    "nom" => "Doe",
    "prenom" => "John",
    "notes" => [10,20,30]
];

// Pour afficher une valeur, il nous suffira d'appeller la clé chaine de caractere avec la même syntaxe
// précedente sauf que nous mettrons pas de valeur numerique mais la chaine de caractere !
echo "\n";
echo $eleve["prenom"];

// Pour afficher, le nom et prenom, il nous suffit de concatener les variables dans la fonction echo

echo "\n";
echo $eleve["prenom"] . " " . $eleve["nom"];

/* 
    Si nous souhaitons modifier une valeur existant dans le tableau, nous pouvons simplement rappeller
    la variable, ainsi qu'entre crochet comme si nous appellons pour un affichage avec sa clé en
    chaine de caractere puis d'avec l'operateur d'affectation d'assigner une nouvelle valeur !
*/

$eleve["prenom"] = "Tony";

echo "\n";
echo $eleve["prenom"];

// Nous pouvons egalement assigner de nouvelles valeur par ce biais si vous l'aurriez compris également

$eleve["age"] = 18;
echo "\n";
echo $eleve["prenom"] . " " . $eleve["age"];

// Attention, si nous essayons d'afficher un tableau il ne va pas être en mesure de nous afficher le
// contenu de ce dernier qui il n'arrivera pas a le convertir en chaine de caractere
// Il affichera seulement que c'est un array 

echo "\n";
echo $eleve["notes"]; //Affiche Array

// Si nous avons, d'avoir plus d'informations sur une variable, nous avons la possibilité d'utiliser une 
// autre fonction permettant de faire cella par le biais de (print_r())
echo "\n";
print_r($eleve["notes"]);

/* 
    On peut voir une representation graphique :
    Array
    (
        [0] => 10
        [1] => 20
        [2] => 30
    )
*/

// Une autre particularité, sur les tableaux, nous avons la possibilité de rajouter de nouvelles valeurs
// dans un tableau par le fait de ne spécifier auncune clé d'index

echo "\n \n";
$eleve["notes"][] = 18;
print_r($eleve["notes"]);

/* 
Array
(
    [0] => 10
    [1] => 20
    [2] => 30
    [3] => 18
)
    Nous pouvons observer que dans notre resultat, nous possèdons bien une nouvelle valeur, avec la bonne
    clé d'index numerique qui a été rajoutée sur l'index numérique (3)
    Ce qui nous procure un avantage très interressant lorsque que l'on as plusieurs valeurs a définir
    nous avons pas le besoin formelle de spécifier une clé d'index numérique !
*/