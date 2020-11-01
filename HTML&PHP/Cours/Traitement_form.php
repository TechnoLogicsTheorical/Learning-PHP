<?php
/*
    Dans cette section, nous allons apprendre à traiter des formulaires HTML pour les faire interagir avec
    des variables dans notre programme PHP
    Pour cela nous avoir besoin d'une variable de type numerique
    Nous aurrons a faire deviner l'utilisateur au travers la page 'form_chiffre.php'
    Précedemment nous fesont interagir, nos programmes au travers le terminal de commande, au travers la fonction
    (readline) mais un vrai utilisateur ne pourra le faire ainsi !
    
    C'est pourquoi, nous aurrons besoin de créer un formulaire HTML pour interagir avec l'utilisateur.

    Dans notre page, nous aurrons :
        - Du code PHP, avec une variable de type number qui devra etre deviner par l'utilisateur
        - Ainsi que les composants d'inclusion à notre page (header et footer)
        - Nous aurrons également un formulaire pour la saisie des données ...
    
    A savoir que la balise 'form' possède un attribut 'action', qui déterminera la page à apellée pour le
    traitement du formulaire, si nous ne reinseignons aucun parametre cela aura pour but d'appeller la même page

    Il existe également un attribut 'method', qui sera la méthode à utiliser pour envoyer nos données récupérées
    et il existe 2 parametre pour cette fonction (POST & GET), si ce champs n'est pas renseigner il prendra
    la valeur (get) qui possède une différence

    En premier lieu, nous utiliserons la méthode GET, à l'intérieur de cette balise "form", nous devrons
    mettre une autre balise, nous metterons un champ à l'aide de la balise "input" de 'type' (number) ainsi
    que sont attribut 'name', qui est très important !
    Qui permet de donner un nom à ce champs là, il servira également d'etre recuperer par php pour et ainsi
    récuperer la valeur associer à ce dernier par la variable Super GLOBALE

    Une fois, les données envoyées dans le formulaire, que la page à été rechargée, on peut observer que la
    valeur à été transmise, on voit aussi que l'url, à changé :
        - L'ajout d'un point d'interogation
        - Suivi du nom de l'input, en l'occurence 'value'
        - Suivi d'un égal
        - Et enfin la valeur
    
    Nous aurrons besoin de recuperer cette valeur pour afficher pour savoir, si le valeur recuperer est plus grand
    ou plus petit que le nombre à deviner.
    Comme citée precedemment, nous allons utiliser une super globale qui est nommée GET, cette variable contient
    un tableau avec la clé précedemment défini 'value' avec sa valeur
    Nous pouvons voir à l'aide du var dump que le type est une chaine de caractere, il faudra donc pensez à 
    convertir cette donnée pour la mettre une valeur de type number

    Maintenant que nous savons récuperer la valeur de cette variable, nous avons plus qu'a faire une condition ...

    Une fois cela fait nous voyons que tout fonctionne correctement, mais on peut egalement observer que notre valeur
    est effacée chaque que l'on renvoie notre valeur ce qui est un peu embetant

    La premiere idée que nous allons vouloir faire, c'est de remplir l'attribut 'value' de notre balise 'input', et
    de récuperer la valeur de notre tableau de notre super globale !
    Mais attention, il faut savoir qu'une phrase entre développeur circule 'Never thrust a user' qui est traduire
    par 'ne faites jamais confiance a un utilisateur.

    Pourquoi ? Entre autre, nous recuperons des valeurs qui sont récuperer dans les formulaires ou dans les url
    comme c'est le cas ici, il ne faut jamais leur faire confiance, à premiere vu cela ne pose aucun probleme
    
    Mais faut savoir que si quelqu'un de mal intensionner, mais n'importe quoi dans l'url, par exemple
        ?value=">azazzaez
    Nous pouvons oberver que notre code HTML fait n'importe quoi, et nous observons le texte de l'utilisateur
    qui a été rentrée dans notre page HTML ... 

    Si nous regardons le code HTML nous observons qu'il à fermer l'attribut value et sa balise par le fait de (">)
    maintenant l'utilisateur peut injecter du code, une balise script !

    Pour palier à ce probleme:
        - Nous pouvons convertir dans notre code php explicitement la valeur en (int), attention cependant si nous
        voulons garder une string cela va poser toujours probleme
        - L'autre solution est d'utiliser une fonction s'appellant (htmlentities), qui permet de convertir tous
        les caractères applicables en entites html
*/

/*
    Maintenant, démontrons la methode GET, cette derniere recuperer les valeurs dans l'url et les stocke tous
    dans un tableau

    Autre petite chose, il faudra faire attention lorsque l'utilisateur arrivera sur la page, on nous indique que la
    valeur est trop petit ou que c'est plus, donc il essaye de voir dans nos conditions si il peut faire l'operation
    alors que l'utilisateur, n'a pas encore taper de chiffre ...
    Nous pourrons également voir que nous avons une erreur au debut de notre page, si vous n'avez pas cette erreur,
    nous allons voir comment afficher les erreurs

    Eteinons notre serveur, et relancons le avec un nouveau parametre de commande '-d error_reporting=E_ALL'

    Nous pouvons voir maintenant que tout vas mieux et nous affichent toutes les erreurs, indiquant
        Undefined index: value
    
    Le probleme c'est que si nous regardons les parametres dans notre url, nous avons aucun parametres dans cette
    derniere et que nous inspectons notre variable ($_GET), nous verrons que notre tableau est vide
    
*/