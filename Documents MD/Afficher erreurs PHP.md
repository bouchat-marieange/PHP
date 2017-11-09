# Afficher erreur PHP dans Chrome en modifiant les paramètre php.ini

1. Aller dans le fichier php.ini situé ici : /etc/php/7.0/apache2 (Attention de bien selectionner le bon fichier php.ini car il en existe plusieurs sur votre ordi)
2. Ouvrir le fichier php.ini
3. Effectuer une recherche en tapant le raccourci clavier Ctrl + F
4. Dans le champ de recherche taper display_errors
5. Ce ne sera pas le premier que vous trouverez, mais le second.
Voici à quoi cela ressemble dans le code de la page

````code
	; This directive controls whether or not and where PHP will output errors,
	; notices and warnings too. Error output is very useful during development, but
	; it could be very dangerous in production environments. Depending on the code
	; which is triggering the error, sensitive information could potentially leak
	; out of your application such as database usernames and passwords or worse.
	; For production environments, we recommend logging errors rather than
	; sending them to STDOUT.
	; Possible Values:
	;   Off = Do not display any errors
	;   stderr = Display errors to STDERR (affects only CGI/CLI binaries!)
	;   On or stdout = Display errors to STDOUT
	; Default Value: On
	; Development Value: On
	; Production Value: Off
	; http://php.net/display-errors
	display_errors = Off
````

6. Modifier display_errors = Off et taper à la place display_errors = On
7. Enregister votre fichier php.ini
8. Relancer vos serveurs
9. Si cela ne fonctionne pas après avoir relancer vos serveurs, il peut être nécessaire de redémarrer votre ordi puis de lancer vos serveurs de la manière habituelle en tapant dans la console 

````code
sudo /opt/lampp/lampp start
````


