# Mémento PHP

PHP = Hypertext Preprocessor

C'est un logiciel backend (coté serveur web) à l'inverse du frontend qui se déroule coté client (dans son navigateur)

PHP permet au serveur web de calculer et de manipuler des informations avant de les retourner au Client via son navigateur. Les informations sont retournées le plus souvent en HTML, XML, JSON, texte simple, CSS, javascript, ...)

## Pourquoi utiliser PHP

PHP permet de créer des pages de manière dynamique plutôt que statique.

Cela permet par exemple de créer une seule page html qui générera un texte d'accueil de type 

"Bonjour Nom de ton visiteur !" sans devoir créer une page différentes pour chacun des visiteurs.

Grâce à la création d'un seul fichier (script php) à qui on envoie le nom de l'humain via l'adresse url (méthode GET) , le message d'acceuil sera créer dynamiquement.

````php
<html>
<head>...</head>
<body><h1>Bonjour <?php echo $_GET['nom']; ?>!</h1></body>
</html>
````

## Installation serveurs en local

Quand on développe, non ne travaille pas directement sur le serveur hébergeant le site ou l'application, on travaille d'abord en local (sur sont propre ordinateur) pour développer et on évite ainsi toutes erreurs qui pourrait rendre inaccessible le site stocké sur le serveur.

Cela permet également de pouvoir travailler sans connexion internet. C'est ce qu'on appelle un environnement de développement local ou simplement un serveur de développement. Le serveur final est appelé serveur de production. C'est le serveur de production qui est accessible à tout le monde. Il peut également arriver de travailler dans un environnement de staging présentant du code à faire valider avant sa mise en production.

La première étape pour travailler en PHP sur son ordinateur est donc d'installer un serveur de développement local. Pour cela suivre la procédure suivante:

## Installer Apache et MySQL

Taper dans la racine de la console

**sudo apt install apache2 php mysql-server libapache2-mod-php php-mysql**


## Installer xampp sur ubuntu

* Télécharger Xampp à l'adresse suivantes

https://www.apachefriends.org/fr/download.html

* Choisir Xampp pour Linux et choisir la version la plus récente de PHP. Actuellement 7.1.1./ PHP 7.1.10 (64 bits) 137 Mb

* Un fois le téléchargement terminé, aller dans le dossier download de votre ordinateur et faire clic droit "Open in terminal"

* Dans la console ouverte dans Download taper la commande suivante: 

**sudo chmod 755 xampp-linux-*-installer.run**

* L'installation de Xampp démarre, cliquer sur les boutons "Next" jusqu'à la fin de l'installation.

* XAMPP est maintenant installé dans le répertoire /opt/lampp 

## Comment lancer l'application lampp 

Dans la console taper:

**sudo /opt/lampp/lampp start**


## Pour donner l'accès en écriture au dossier html, et éviter le message permission denied, il faut suivre le chemin suivant:

Cd / --> cd var --> cd www --> sudo Chmod 777 html

* Dans la console
**
user@nb25:/var/www$ sudo chmod 777 html**


* Aller ensuite avec l'explorateur de fichier de l'ordi dans le dossier var/www/html

* Créer un fichier index.php

* L'ouvrir dans Atom et inscrire à l'intérieur le code suivant:

````php
<?php
  echo "bonjour";
?>
````

* Enregistrer le fichier index.php

*Aller dans le navigateur (Chrome ou firefox) et taper dans la barre d'adresse **localhost**

Si la page affiche bonjour c'est ok tout fonctionne.

* Maintenant que le test à fonctionner, vous pouvez supprimer le fichier index.html placer directement dans html et créer un nouveau dossier à cet endroit appelé PHP pour y réaliser les exercices. C'est ce dossier qui devra être créer et mis en ligne sur GitHub. Donc commencer par le créer sur GitHub puis ensuite cloner le dans le dossier html.

## Pour créer et ouvrir un nouveau projet

* Dans le dossier html, créer un nouveau sous-dossier PHP qui contiendra nos exercices. C'est ce dossier qui devra être mis sur github. C'est à cet endroit que l'on créera nos différents fichiers d'exercices.

* Pour afficher nos exercices, aller sur notre navigateur et taper dans la barre d'adresse localhost/PHP ou localhost/mon_dossier_exercice.

* Astuce:  lorsque l'on tape seulement localhost dans la barre d'adresse, la liste des sous-dossiers se situant dans html apparait et on peut selectionner le dossier contenant nos exercices.

## Lorsque qu'un fichier apparait vérouillé en écriture et renvoie une erreur de permission, il faut le chmoder via la console. 

* Se rendre dans le dossier ou se trouve le fichier vérouiller (il apparait avec un cadena sur son icone)
* Ouvrir la console avec clic droit "Open in Terminal" dans le dossier où se trouve le fichier problèmatique.
* Dans la console taper sudo chmod 777 nom_du_fichier.php:
**user@nb25:/var/www/html/PHP$ sudo chmod 777 index.php**

**********************************************************************************************

## Introduction, Variables et Conditions

Programmer = manipuler de l'information

````php
$nom_de_la_variable = 'Valeur de la variable';
$president_usa = 'Donald Trump';
$annee_naissance = 1973; 
$is_raining = false;
$team_players = array('john','Jeanne','Julien');
````

### Premier script php

1. Lance ton serveur local

2. Dans ton dossier de travail servi par PHP, crée un dossier "variable" et crée à l'intérieur un fichier humans.php contenant le code suivant:

````php
<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
  </body>
</html>
````

3. Une fois cette opération faite et le fichier enregistrer va visiter les adresses suivantes

*http://localhost/PHP/variable/humans.php?nom=Alexandre
*http://localhost/PHP/variable/humans.php?nom=Pierre
*http://localhost/PHP/variable/humans.php?nom=Jennifer

4. La page affiche le nom de la personne qui a été transmise par la méthode GEt dans l'url de la page dans la parite suivant l'adresse de celle-ci ?nom=Alexandre, ?nom=Pierre, etc...

5. Le code de la page est principalement composé de html  avec une petit bout de code en php. Le code php est délimité par les balises 

**<?php** ----votre code ici------ **?>**

Examinons le bout de code PHP

````php
 <?php echo $_GET['nom']; ?>!
````

* $_GET est une variable.
* en PHP, une variable commence toujours par le sigle $
* echo est une fonction fournie par PHP, qui sert à afficher quelque chose (ce qui est à droite de la fonction).
* la ligne se termine par ;

### Les variables (première sutructure logique)

Les variables nous permettent de retenir temporairement des informations en mémoire. Grâce à elle, nous allons par exemple pouvoir retenir le pseud d'un visiteur ou effectuer des calculs etc...

Une variable est donc une petite information stockée en mémoire temporairement. Elle n'a pas une grande durée de vie. En PHP, la variable ou plutôt l'information qu'elle contient n'existe que durant le temps que la page est en cours de génération. Dès que la page PHP est générée, toutes les variables sont supprimées de la mémoire car elles ne servent plus à rien. Ce n'est donc pas un fichier qui reste stocké sur le disque dur, mais une petite information temporaire présente dans la mémoire vive.

On peut donc créer des variables quand on a besoins de retenir des informations.

#### Un nom est un valeur

Une variable est toujours constituée de deux éléments:

* son **nom** : pour pouvoir la reconnaître, vous devez donner un nom à votre variable.
 
Par exemple: $age_du_visiteur;

* sa **valeur* :  c'est l'information qu'elle contient, et qui peut changer. 

Par exemple: 17

Si on considère que $age_du_visiteur = 17;

la variable age_du_visiteur à une valeur de 17. On peut modifier cette valeur quand on veut. On peut également faire des opérations dessus, etc...

Quand on a besoin de la variable, on l'appelle (par son nom) et elle nous renvoie la valeur qu'elle contient.

#### Différents types de variables

On peut stocker toutes sortes de choses très différentes dans les variables: age, prix, quantité de produit, du texte (ex: prénom, nom d'une pizza, modèle d'une chaussure,...)

Il existe différentes types de variables que l'on choisi en fonction de ce que l'on  a besoin dans notre script et de la nature des informations à traiter.

Voici les principaux types de variables/

**Les chaînes de caractères (string)**

c'est du texte. Tout texte est appelé chaîne de caractères. En PHP ce type de données est appelée string.On peut stocker des textes courts ou très long au besoin.
Une chaîne de caractère doit être écrite entre guillemets ou entre apostrophes (guillemets simples).

**Les nombres entiers (int)**

Ce sont les nombres du type 1.2.3, 4,45, etc... On compte aussi les parmi eux les entiers relatifs: -1.-2, -3, ... En PHP on les appelle integer.

**Les nombres décimaux (float)**

Ce sont les nombre à virgule, comme 14.738. Attention, les nombres doivent être écrits avec un point au lieu de la virgule (notation anglaise)

**Les booléens (bool)**

C'est un type de variable qui permet de stocker soit vrai(true) soit faux(false). On les utilise très fréquemment. 

**Rien (NULL)**

On a parfois besoin de dire qu'une variable ne contient rien. Rien du tout. On indique alors que sa valeur est NULL. Ce n'est pas vraiment un type de données mais plutôt un absence de type.

**Les tableaux (Array)**

Les tableaux permettent de contenir un ensemble de valeurs, que l'on peut retrouver grâce à un clef unique. C'est une structure logique très puissante mais qui nécessite un chapitre en soi.

Exemple:

````php
$classe= array(0 => 'Cindy', 1 => 'Jean', 2 => 'Mustapha', 3 => 'Pierre', 4 => '', 5=>'Eric'); 
````
Ce tableau contient 6 éléments. Chaque élément a une clef (le chiffre) et uen valeur (la partie à droit du signe =>)


#### Définir une variable

Voici comment initialiser une nouvelle variable:

````php
$age_du_visiteur = 17;
````
*************************************************************************************************

## Les conditions

Dans la vie de tout les jours, nous avons appris à penser les évènements qui nous entoure sous forme d'hypothèse. Si telle condition est respespectée alors nous feront ceci , si ce n'est pas le cas alors nous feront cela. 

En programmation, on appelle ces hypothèses des conditions. La forme la plus utilisée est le if/else

````php
if( condition ) {
   // code à n'exécuter que si la condition est TRUE
  echo "La condition est vraie.";
 } else {
   // code à n'exécuter que si la condition est FALSE
   echo "La condition est fausse.";
 }
````

Pour exprimer tes conditons, tu as à ta disposition plusieurs types d'opérateurs

== : égal à
!= : différent de
> : plus grand que 
< : plus petit que
>= : plus grand ou égal à 
>= : plus petit ou égal à 

Voici un exemple concret avec les vêtements à porter selon la météo (la température)

````php
if( $temperature > 21 ) {
  // code à exécuter si la condition est TRUE
  $vetement_du_jour = "T-shirt";
 } else {
   // code à exécuter si la condition est FALSE
   $vetement_du_jour = "Pull-over";
 }
````

### Combiner des conditions

#### Condition 1 ET/OU condition 2

On peut vérifier des conditions mutliples (plusieurs conditions combinées) , en utilisant les mots-clef AND (et) ou OR (ou)

Exemeple:

````php
if ( $age <= 12 AND $langue == "français" )
````

### Conditions hiérarchiques

On peut également imbriquer des conditions les unes dans les autres. Attention à bien placer les accolades.


**Astuce:** Utilise l'indentation du code pour t'aider à t'y retrouver visuelement.

````php
if ($genre == 'femme'){

	// Ici, du code à exécuter si le genre est "femme"

	if ( $age <= 12 and $langue == "français" ) {
		// Ici, du code à exécuter si le genre est "femme",  que l'âge est inférieur à 13 et que la langue est "français"
		...
	} else{
		// Ici, du code à exécuter si le genre est "femme",  et que l'âge est supérieur à 13 ou que la langue n'est pas "français"
		...
	}

} else {
	// Ici, du code à exécuter si le genre n'est pas "femme"

	if ( $age <= 12 and $langue == "français" ) {
		// Ici, du code à exécuter si le genre n'est pas "femme", que l'âge est inférieur à 13 et que la langue est "français"
		...
	}
}
````









