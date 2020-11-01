<?php
/*
    Maintenant que nous avons vu les bases du langage, nous allons aborder et concevoir des pages web
    dynamiques, faut comprendre tout d'abord que php peut afficher des choses hors de sa balise PHP

    Nous allons pas créer un site internet de A a Z, mais nous allons utiliser un template de twitter Bootstrap

    Maintenant que nous avons du code html et que nous essayons d'executer le fichier via notre terminal
    il va nous renvoyer ce meme code, nous pouvons voir que nos allons réutiliser plusieurs bout de code
    dans notre fichier, c'est la que la puissance de PHP va intervenir !

    On peut tres bien morceller notre code afin de pouvoir charger que le header ou le footer ainsi de
    suite puis l'appeler avec un require dans notre index.php, cela va vraiment permettre de ne pas s'enbeter à
    réecrire du code identique a chaque page que nous créeons 
    
    Automatiquement, le require va inclure et executer le fichier 'header.php', pour remettre le morceau de
    code auquelle nous avons pas envie de réecrire
*/

/*
    Le second soucis c'est que nous allons pas executer notre page dans le terminal ...
    C'est la que nous allons avoir besoin d'un serveur web, qui servir a comprendre la requete qui est faite
    par le navigateur web et qui va l'interprété et on pour lui grepher par dessus PHP, pour qu'on lui disent
    si jamais tu essaye de charger un fichier php plutot que directement l'afficher je veux que tu le fasse
    executer par php 

    Il des serveurs web comme APACHE NGINX et plein d'autres, mais il faut savoir que nous avons la possibilité
    de creer un serveur web sans le besoins d'installer quoi que ce soit sur notre systeme
    Juste en utilisant PHP, pour cela il faut taper une commande dans notre terminal PHP
        php -S localhost:8000
    Rien de plus, nous pouvons des lors et deja aller consulter notre page web en tapant dans l'adresse URL
    localhost:8000
*/

/*
    Apres avoir remis Bootstrap d'appelons, a redefinir les CSS et les scripts nécessaire à son bon 
    fonctionnement, nous avons egalement pour redesigner la barre de navigation et autres

    On vois egalement que notre titre, est codée en dur dans notre partie header, nous pouvons le coder
    pour qu'il soit dynamique au travers du PHP.
    Pour cela nous avons plusieurs techniques pour parvenir a nos fin en declarant dans notre fichier
    'index.php' une variable contenant notre titre de notre site ainsi dans notre fichier morceller 
    'header.php', nous pourrons acceder au variables declarer avant le require de notre 'index.php'
    et faire un echo du titre precedement déclarer dans notre header
*/

/*
    Nous avons bien le comportement que nous souhaitons, dans notre onglet nous pouvons observer que le lien
    est correctement assignée cependant nous pouvons voir que dans notre titre de la page 'contact.php'
    Le titre nous retourne une erreur effectivement, cela est tout a fait normale puisque nous avons pas
    défini de variable dans cette derniere

    Et pour cela nous pouvons verifier et creer une condition permettant de regarder si une variable est
    existante si oui alors nous allons mettre notre variable déclarer sinon nous allons assigner une
    variable/valeur par défaut !
    Nous allons utiliser la fonction (isset), nous pouvons remarquer que la convention de nommage n'a pas
    été respecter et aurrais du etre ecrite de la maniere suivante (isSet) nous aurons directement reconnue
    sa fonctionnalité
*/

/*
    Pour la déclaration de nos balise php, nous avons possibilté de déclarer des separer mais une syntaxe 
    permet de racourci et d'utiliser entre ces balises des choses interessante

    <?php if (isset($title)) : ?>
    
    Le (:) remplacer les accolades au niveau de bloc d'instructions, cependant la fermeture de ces dernieres
    s'effectue avec des end par exemple pour fermer un if nous utiliserons la syntaxe suivante :
    
    <?php endif ?>

    Autre syntaxe disponible, nous avons la possibilté, de déclarer un raccourcisseur de syntaxe par le 
    biais '<?= $title ?>', permettant ainsi de creer et de faire une balise php en incluant la fonction echo dedans
*/

/* 
    Maintenant, nous observons aussi un probleme concernant, notre barre de navigation au niveau de surbrillance
    de notre lien actif, dans notre 'header.php', nous avons également vu que nous possèdons
    une classe 'active', permettant de dire que nous sommes actuellement sur cette page.

    Pour cela nous allons dynamique assigner egalement cette classe !

    La premiere technique consiste à creer une variable au quelle on assignerais une valeur avec le nom
    'index' et 'contact' pour chaque page avec 'require'

    Puis dans notre header, nous aurrions plus qu'a creer une condition, nous permettant de definir que nous
    sommmes actuellement dans cette page pour chaque lien
*/

/*
    Une seconde technique, nous permettant egalement de recuperer automatiquement le script nous permettant
    ainsi de dynamiquement de changer la page auquelle elle est appelée
    En voyant directement par rapport a quelle page qui a été appelée
    
    Il faut savoir qu'il existe des variables SUPER GLOBALES, sont des variables qui sont appelée partout,
    que ce soit dans les fonctions ou notre script et dépendent egalement de la situation
    
    Disponible dans le cas d'un serveur, la variable super globale $_SERVER existe, affichons directement
    le contenu de cette variable pour comprendre de quoi il s'agit

    Voici le resultat que l'on obtiens sur la page 'index.php' :
    Array
(
    [DOCUMENT_ROOT] => C:\xampp\htdocs\TutorielsPHP\HTML&PHP\site
    [REMOTE_ADDR] => ::1
    [REMOTE_PORT] => 59182
    [SERVER_SOFTWARE] => PHP 7.4.9 Development Server
    [SERVER_PROTOCOL] => HTTP/1.1
    [SERVER_NAME] => localhost
    [SERVER_PORT] => 8000
    [REQUEST_URI] => /index.php
    [REQUEST_METHOD] => GET
    [SCRIPT_NAME] => /index.php
    [SCRIPT_FILENAME] => C:\xampp\htdocs\TutorielsPHP\HTML&PHP\site\index.php
    [PHP_SELF] => /index.php
    [HTTP_HOST] => localhost:8000
    [HTTP_CONNECTION] => keep-alive
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36 OPR/71.0.3770.287
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*\/*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [HTTP_SEC_FETCH_SITE] => same-origin
    [HTTP_SEC_FETCH_MODE] => navigate
    [HTTP_SEC_FETCH_USER] => ?1
    [HTTP_SEC_FETCH_DEST] => document
    [HTTP_REFERER] => http://localhost:8000/contact.php
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
    [HTTP_ACCEPT_LANGUAGE] => fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7
    [REQUEST_TIME_FLOAT] => 1604238098.6005
    [REQUEST_TIME] => 1604238098
)
    
    Pour afficher correctement le contenu en html, et au lieu d'utiliser des br, nous pouvons utiliser
    des balises pre pour afficher
    
    Nous pouvons voir que nous avons un tableau avec des clés qui nous donne des informations sur le serveur,
    ce tableau on peut retrouver une clé script_name qui nous indique le nom du fichier de laa page 
    actuelle
    Nous allons donc utiliser cela pour remplacer cette variable que nous avons defini precedemment.
*/

/*
    Petit inconviennant, si nous devons repeter à chaque conditions, c'est un peu chiant de réecrire les
    conditions dans notre fichier 'header', pour palier à ce probleme nous aurrons qu'a creer une fonction
    nous permettant de directement l'appeler et définir cette variable/valeur
    
    Deux options s'offrent à nous:
        - Soit creer une fonction au sein de notre fichier actuelle
        - Soit le creer dans un fichier annexe que nous chargerons par la suite avec un require
    
    Refléchissons d'abord à notre logique :
        Nous aurrons besoin à la fois besoin du lien et de la condition 'index.php' et nous avons
        egalement besoin de définir notre titre
        Nous utilisons du coup la balise php echo (shorthand), nous permettant d'afficher le resultat
        de notre fonction
        Nous fournisserons les arguments du lien de notre page ainsi que son titre
        Enfin nous retournerons directement la chaine de caractere

    Voici le résultat de notre fonction :
        function createNavItem(string $link, string $title): string {
            $class = 'nav-item';
            if($_SERVER['SCRIPT_NAME'] === $link) {
                $class = $class .= ' active';
            }
            return '<li class="'. $class .'">' . '<a class="nav-link" href="' . $link . '">'. $title . '</a></li>';
            
        }
    
    Autre chose, nous voyons que notre chaine de caractere et un peux illisible du faite que l'on concatene des
    chaines de caractere avec des variables, ce qui n'est pas vraiment lisible mais il existe une autre
    manière de créer des chaines de caractere

    Il s'agit de la notation de syntaxe Heredoc qui ce déclare a l'aide de caractere (<<<), un particularite
    de cette notation, c'est quelle prend en compte les valeurs de variable sans besoin de concatenation
    et interpole en une chaine de caractere
    
    <<<HTML
        Contenu de la chaine
    HTML;
    
*/