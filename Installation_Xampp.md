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
**user@nb25:/var/www$ sudo chmod 777 html**


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

