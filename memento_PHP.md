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
