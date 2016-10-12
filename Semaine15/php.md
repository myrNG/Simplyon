# PHP - BackEnd et dynamisme

Le PHP est un language de programmation qui va nous permettre d'introduire le BackEnd. PHP nous permet d'intégrer du dynamisme dans nos pages. Par exemple, afin d'éviter la redondance de notre code, PHP nous permettra d'inclure et de modifier les parties du site qui sont amenées à changer souvent.  
Par exemple, supposons que notre entête et notre pied de page restent les mêmes sur notre site, peu importe la page sur laquelle on se trouve, PHP nous permet de nous concentrer sur le menu ou le contenu d'une section par exemple.
```PHP
    <?php Myriam - 2016 ?>
```
## Les Variables

` $nom = valeur; `  

Attention, en PHP, les points-virgules sont CAPITALS!
On a donc:
* **string** pour les chaines de caractères;
* **int** pour les nombres entiers (négatifs aussi);
* **float** pour les nombres à virgules (ici cependant, la virgule est remplacée par le point hein);
* **bool** pour les booléens;
* **null**

On affiche le code avec ` echo ` comme dans `echo $nom;` par exemple.
Pour la concaténation:
```PHP
<?php
    $age = 17;
    echo "Le visiteur a ";
    echo $age;
    echo "ans";
?>
```
Méthode un peu relou hein! Donc, deux méthodes:
* **Avec guillemets doubles**:
```PHP
<?php
    $age_du_visiteur = 17;
    echo "Le visiteur a $age_du_visiteur ans";
?>
```
* **Avec guillemets simples**:
```PHP
<?php
    $age_du_visiteur = 17;
    echo 'Le visiteur a ' . $age_du_visiteur . ' ans';
?>
```
Ceci est la méthode la plus utilisée par les développeurs expérimentés en PHP.

## Les Conditions
### Structure de base: if...else

Exemple:
```PHP
<?php
    $age = 8;

    if ($age <= 12)
    {
    echo "Salut gamin !";
    }
?>
```

```PHP
<?php
    $age = 8;

    if ($age <= 12) // SI l'âge est inférieur ou égal à 12
    {
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
    }
    else // SINON
    {
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
    }

    echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?>
```

Il existe aussi un symbole permettant de vérifier si une variable est false:

```PHP
<?php
    if (! $autorisation_entrer)
    {

    }
?>
```

Les mots-clés pour les conditions multiples s'écrivent différemment du JS:  

| Mot-clé        | Signification           | Symbole équivalent  |
| ------------- |:-------------:| -----:|
| AND      | ET | && |
| OR      | OU      |  ll  |

**ASTUCE BONUS**

Les deux codes suivants ont le même résultat:
```PHP
<?php
    if ($variable == 23)
    {
    echo '<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !';
    }
?>
```
ET

```PHP
<?php
    if ($variable == 23)
    {
    ?>
    <strong>Bravo !</strong> Vous avez trouvé le nombre mystère !
    <?php
    }
?>
```

### Les ternaires: des conditions condensées
Un ternaire est une condition condensée qui fait deux choses sur une seule ligne :

* on teste la valeur d'une variable dans une condition ;
* on affecte une valeur à une variable selon que la condition est vraie ou non.

```PHP
<?php
$age = 24;

if ($age >= 18)
{
	$majeur = true;
}
else
{
	$majeur = false;
}
?>
```

```PHP
<?php
$age = 24;

$majeur = ($age >= 18) ? true : false;
?>
```

## Les Boucles
### Boucle simple: While
```PHP
<?php
    while ($continuer_boucle == true)
    {
    // instructions à exécuter dans la boucle
    }
?>
```
### Boucle plus complexe: For

## Les Fonctions

```PHP
<?php
    calculCube();
?>
```
### Fonctions built-in de PHP
Ces fonctions sont très pratiques et très nombreuses. En fait, c'est en partie là que réside la force de PHP : ses fonctions sont vraiment excellentes car elles couvrent la quasi-totalité de nos besoins.  

#### Traitement des chaînes de caractères
* **strlen**: longueur d'une chaîne
```PHP
<?php
    $phrase = 'Bonjour tout le monde ! Je suis une phrase !';
    $longueur = strlen($phrase);


    echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
?>
```
* **str_replace**: rechercher et remplacer une string par une autorisation_entrer

```PHP
<?php
    $ma_variable = str_replace('b', 'p', 'bim bam boum');

    echo $ma_variable;

?>
```
Affichera "pim pam poum".
On a donc besoin de 3 paramètres:
* la chaîne qu'on recherche (ici, les « b » (on aurait pu rechercher un mot aussi)) ;
* la chaîne qu'on veut mettre à la place (ici, on met des « p » à la place des « b ») ;
* la chaîne dans laquelle on doit faire la recherche.

**str_shuffle**: mélanger les lettres
**strtolower**: écrire en minuscules
**Récupérer la date**

## Les Tableaux

arrays();
### Les 2 types de Tableaux

```PHP
<?php
    // La fonction array permet de créer un array
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
?>
```

```PHP
<?php
    $prenoms[0] = 'François';
    $prenoms[1] = 'Michel';
    $prenoms[2] = 'Nicole';
?>
```

Les tableaux associatifs fonctionnent sur le même principe, sauf qu'au lieu de numéroter les cases, on va les étiqueter en leur donnant à chacune un nom différent.

Par exemple, supposons que je veuille, dans un seul array, enregistrer les coordonnées de quelqu'un (nom, prénom, adresse, ville, etc.). Si l'array est numéroté, comment savoir que le n°0 est le nom, le n°1 le prénom, le n°2 l'adresse… ? C'est là que les tableaux associatifs deviennent utiles.
#### Tableaux associatifs
```PHP
<?php
    // On crée notre array $coordonnees
    $coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
?>
```
Il est possible de créer le tableau case par case:
```PHP
<?php
    $coordonnees['prenom'] = 'François';
    $coordonnees['nom'] = 'Dupont';
    $coordonnees['adresse'] = '3 Rue du Paradis';
    $coordonnees['ville'] = 'Marseille';
?>
```
Pour l'afficher :
```PHP
<?php
    echo $coordonnees['ville'];
?>
```

### Parcourir le Tableau

3 moyens de parcourir:
* for
* foreach
* print_r

#### for
```PHP
<?php
    // On crée notre array $prenoms
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

    // Puis on fait une boucle pour tout afficher :
    for ($numero = 0; $numero < 5; $numero++)
    {
        echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
    }
?>
```
#### foreach

Sorte de boucle for spécialisée dans les tableaux.
foreach va passer en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple $element).
```PHP
<?php
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

    foreach($prenoms as $element)
    {
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
    }
?>
```

L'avantage de foreach est qu'il permet aussi de parcourir les tableaux associatifs.
```PHP
<?php
    $coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

    foreach($coordonnees as $element)
    {
    echo $element . '<br />';
    }
?>
```

foreach va mettre tour à tour dans la variable $element le prénom, le nom, l'adresse et la ville contenus dans l'array $coordonnees.

On met donc entre parenthèses :

* d'abord le nom de l'array (ici $coordonnees) ;
* ensuite le mot-clé as (qui signifie quelque chose comme « en tant que ») ;
* enfin, le nom d'une variable que vous choisissez et qui va contenir tour à tour chacun des éléments de l'array (ici $element).

```PHP
    <?php foreach($coordonnees as $cle => $element) ?>
```

À chaque tour de boucle, on disposera non pas d'une, mais de deux variables :

* $cle, qui contiendra la clé de l'élément en cours d'analyse (« prenom », « nom », etc.) ;
* $eulement, qui contiendra la valeur de l'élément en cours (« François », « Dupont », etc.).

```PHP
<?php
    $coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

    foreach($coordonnees as $cle => $element)
    {
    echo '[' . $cle . '] vaut ' . $element . '<br />';
    }
?>
```
#### print_r

si vous n'avez pas besoin d'une mise en forme spéciale et que vous voulez juste savoir ce que contient l'array, vous pouvez faire appel à la fonction print_r. C'est une sorte de echo spécialisé dans les arrays.

Cette commande a toutefois un défaut : elle ne renvoie pas de code HTML comme <br /> pour les retours à la ligne. Pour bien les voir, il faut donc utiliser la balise HTML <pre> qui nous permet d'avoir un affichage plus correct.

```PHP
<?php
    $coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

    echo '<pre>';
    print_r($coordonnees);
    echo '</pre>';
?>
```

### Rechercher dans un Tableau

Nous allons voir trois types de recherches, basées sur des fonctions PHP :

* array_key_exists : pour vérifier si une clé existe dans l'array ;
* in_array : pour vérifier si une valeur existe dans l'array ;
* array_search : pour récupérer la clé d'une valeur dans l'array.

#### array_key_exists
Vérifier si une clé existe déjà dans un tableau.
On lui  donne d'abord le nom de la clé à rechercher, puis le nom de l'array dans lequel on fait notre recherche:
`<?php array_key_exists('cle', $array); ?>`
La fonction renvoie un booléen true si la clé est dans l'array
```PHP
<?php
    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 Rue du Paradis',
        'ville' => 'Marseille');

    if (array_key_exists('nom', $coordonnees))
    {
        echo 'La clé "nom" se trouve dans les coordonnées !';
    }

    if (array_key_exists('pays', $coordonnees))
    {
        echo 'La clé "pays" se trouve dans les coordonnées !';
    }

?>
```

#### in_array
Même fonctionnement que array_key_exists.... mais il va chercher dans les valeurs.

```PHP
<?php
    $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

    if (in_array('Myrtille', $fruits))
    {
        echo 'La valeur "Myrtille" se trouve dans les fruits !';
    }

    if (in_array('Cerise', $fruits))
    {
        echo 'La valeur "Cerise" se trouve dans les fruits !';
    }
?>
```
#### array_search
array_search fonctionne comme in_array : il travaille sur les valeurs d'un array. Voici ce que renvoie la fonction :

* si elle a trouvé la valeur, array_search renvoie la clé correspondante (c'est-à-dire le numéro si c'est un array numéroté, ou le nom de la clé si c'est un array associatif);
* si elle n'a pas trouvé la valeur, array_search renvoie false.

## Transmettre des données avec l'URL

### Envoyer des paramètres dans l'URL

#### Former une URL pour envoyer des paramètres
Imaginons que notre site s'appelle `www.monsite.com/bonjour.php`
On peut envoyer des informations  à la page `bonjour.php`  en ajoutant des infos à la fin de l'URL.
`http://www.monsite.com/bonjour.php?nom=Dupont&prenom=Jean`
Le point d'intérrogation sépare la page PHP des paramètres. Ces derniers s'enchainent selon nom=valeur et sont séparés les uns des autres par un '&'.

#### Créer un lien avec des paramètres
Imaginons que l'on a deux fichiers sur notre site:
* index.php
* bonjour.php
`<a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>`

Comme vous le voyez, le & dans le code a été remplacé par &amp; dans le lien. Ça n'a rien à voir avec PHP : simplement, en HTML, on demande à ce que les & soient écrits &amp; dans le code source. Si vous ne le faites pas, le code ne passera pas la validation W3C.

Ce lien appelle la page bonjour.php et lui envoie deux paramètres :

* nom : Dupont ;
* prenom : Jean.

Comment faire dans la page bonjour.php pour récupérer ces informations ?
### Récupérer les paramètres en PHP
Intéressions nous à la page qui reçoit les paramètres: bonjour.php.
Elle va créer automatiquement une array au nom un peu spécial: `$_GET`. Il s'agit d'un array associatif.

Reprenons notre exemple pour mieux voir comment cela fonctionne. Nous avons fait un lien vers bonjour.php?nom=Dupont&prenom=Jean, cela signifie que nous aurons accès aux variables suivantes :

| Nom  |  Valeur  |
| ------------- | :-----:|
| $_GET['nom']  | Dupont  |
| $_GET['prenom']  | Jean  |
### Ne faites jamais confiance aux données reçues!
