<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="fonctions.css">
    <title>PHP - Fonctions</title>
  </head>

  <body>

    <?php
ini_set('display_errors', 1);
?>

    <h1>Exercices - Fonctions</h1>

    <h2>Exemple</h2>

    <p class = "enonce">
      A l'aide d'une fonction native de PHP mélangez les lettres d'une chaîne de caractères.
    </p>

    <?php
      $chaine = 'Cette chaine va etre melangee !';
      $chaine = str_shuffle($chaine);
      echo $chaine;
    ?>

    <h2>Exercices</h2>

    <h3>Exercice 1</h3>

    <p class="enonce">
      Utilise une fonction qui mette la première lettre de l'argument en majuscule.<br/>
      Par ex: si l'input de la fonction est "emile", l'output sera "Emile".
    </p>

    <p class="reponse">
      <?php
        $majuscule = ucfirst(emilie);
        echo $majuscule;
      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 2</h3>

    <p class="enonce">
      Utilise la fonction fournie par PHP te permettant d'afficher l'année en cours.
    </p>

    <p class="reponse">
      <?php
        $annee_en_cours = date(Y);
        echo $annee_en_cours;
      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 3</h3>

    <p class="enonce">
      Affiche à présent la date, l'heure, les minutes et les secondes, en utilisant la même fonction.
    </p>

    <p class="reponse">
      <?php
        $maintenant = date('D j F Y, G : i : s');
        echo $maintenant;
      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 4</h3>

    <p class="enonce">
      Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments.
    </p>

    <p class="reponse">
      <?php
        function somme($a, $b)
        {
          return $a + $b;
        };

        $total = somme(5,4);
        echo $total;
      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 5</h3>

    <p class="enonce">
      Améliore la fonction précédente pour que si l'un des (ou les deux) arguments envoyés <br/>
      n'est pas une valeur numérique (int), la fonction retourne le message suivant: <br/>
      "Erreur, argument non numérique".
    </p>

    <p class="reponse">
      <?php
        // Problème: Le code est correct et s'exécute sur phpio.net mais bloque lorsque j'exécute la page ! Pourquoi?

        function resultat($a, $b)
        {
          if (is_int($a) && is_int($b))
          {
          return $a + $b;
          }
          else
          {
            echo "Erreur, argument non numérique";
          }
        }

        $total = resultat(8,3);
        echo $total;
      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 6</h3>

    <p class="enonce">
      Crée une fonction qui prend en argument une chaîne de caractères (plusieurs mots) <br/>
      et qui retourne les initiales de chaque mot en majuscule. <br/>
      (Exemple: "In code we trust!" devient: ICWT).
    </p>

    <p class="reponse">
      <?php

        // Avant de créer la fonction, on va décomposer par étape les différentes opérations à faire pour afficher en majuscules les initiales de tous les mots formant une chaîne de caractère

        // $phrase = "Bonjour je suis en forme"; // On stocke la chaine de caractère (la phrase de plusieurs mots) dans une variable appelée $phrase

        // $phrase_majuscules = strtoupper($phrase); // On commence par mettre toutes les lettre en majuscules avec la fonction native PHP strtoupper
        // echo $phrase_majuscules . '<br/>'; // On affiche le résultat de strtoupper pour visualiser le resultat

        // $mots = explode(" ",$phrase_majuscules); //explode est une fonction native PHP qui retourne un tableau de chaînes de caractèrs créees en découpant la chaine initiale (string) en plusieurs morceaux suivant le paramètre delimiter
        // avec la fonction explode, on place toujours comme premier paramètre le delimiter, ici l'espace entre les mots, puis en second pararmètre la phrase à découper.

        //explode renvoie un tableau avec chacun des mots, pour afficher ce tableau on utilise une boucle
        // foreach($mots as $mot)
        // {
        //   echo $mot . '<br/>';
        // }

        //Pour chaque mot du tableau, on ne veut afficher que la première lettre (initiale)
        // foreach($mots as $mot)
        // {
        //   echo substr($mot,0,1);
        // }

        // On va maintenant réunir tous ces éléments dans une seule fonction

        //Création de la fonction
        function initiales($phrase)
        {
          $mots = explode(" ",$phrase);
          foreach ($mots as $mot)
          {
            $initiale= substr($mot,0,1);
            $majuscule = strtoupper($initiale);
            echo $majuscule;
          }
        }

        //Appel de la fonction
        $phrase = "Bonjour je suis en forme";
        initiales($phrase);
      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 7</h3>

    <p class="enonce">
      Invente une fonction qui remplace les lettres "a" et "e" par le caractère "æ" <br/>
      dans chacune des chaînes suivantes: <br/>
      "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca".
    </p>

    <p class="reponse">
      <?php

      //On commence par définir toutes les étapes et fonctions nécessaires pour résoudre le problème avant de créer la fonction

      // $liste_mots = "caecotrophie,chaenichthys,microsphaera,sphaerotheca";
      // $chaine_a_remplacer = "ae";
      // $chaine_de_remplacement = "æ";
      // $mots_a_e = explode (",",$liste_mots);// sépare en des mots séparés les éléments d'une chaîne en fonction d'un delimiter mis en premier paramètre (ici c'est la virgule qui sépare les mots de la chaîne)
      // foreach ($mots_a_e as $mot_a_e)
      // {
      //   echo $mot_a_e . '<br/>';// affiche pour vérification chaque mots de la chaine séparément
      //   $position = strripos($mot_a_e, $chaine_a_remplacer);// renvoie la position de la chaine ae dans chaque mot (attention la numérotation de la position commence à 0 et pas à 1)
      //   echo $position . '<br/>';// affiche pour vérification que la chaine ae a bien été trouvée au bon endroit dans chaque mots
      //   $mots_ae = str_replace ($chaine_a_remplacer,$chaine_de_remplacement, $mot_a_e );
      //   echo $mots_ae . '<br/>';
      // }




      // On crée la fonction
      // function ae_for_a_e ($liste_mots, $chaine_a_remplacer, $chaine_de_remplacement)
      // {
      //   $mots_a_e = explode(",",$liste_mots);
      //   foreach ($mots_a_e as $mot_a_e)
      //   {
      //     $position = strripos($mot_a_e, $chaine_a_remplacer); // pas nécessaire
      //     $mots_ae = str_replace ($chaine_a_remplacer,$chaine_de_remplacement, $mot_a_e );
      //     echo $mots_ae . '<br/>';
      //   }
      // }
      //
      // //On appelle la fonction
      // $liste_mots = "caecotrophie,chaenichthys,microsphaera,sphaerotheca";
      // $chaine_a_remplacer = "ae";
      // $chaine_de_remplacement = "æ";
      // ae_for_a_e ($liste_mots, $chaine_a_remplacer, $chaine_de_remplacement);

      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 8</h3>

    <p class="enonce">
      Crée la fonction inverse, qui remplace le caractère "æ" par "ae" <br/>
      dans les chaines suivantes: cæcotrophie, chænichthys, microsphæra, sphærotheca
    </p>

    <p class="reponse">
      <?php

        // // Création de la fonction
        function a_e_for_ae ($liste_mots, $chaine_a_remplacer, $chaine_de_remplacement)
        {
          $mots_ae = explode(",",$liste_mots);

          foreach ($mots_ae as $mot_ae)
          {
            $mot_a_e = str_replace ($chaine_a_remplacer,$chaine_de_remplacement, $mot_ae );
            echo $mot_a_e . '<br/>';
          }
        }

        // // Appel de la fonction
        $liste_mots = "cæcotrophie, chænichthys, microsphæra, sphærotheca";
        $chaine_a_remplacer = "æ";
        $chaine_de_remplacement = "ae";
        a_e_for_ae ($liste_mots, $chaine_a_remplacer, $chaine_de_remplacement);

        ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 9</h3>

    <p class="enonce">
      Crée une fonction te permettant de gérer des messages envers l'utilisateur <br/>
      grâce à deux arguments: le premier argument est le message, le second permet de spécifier <br/>
      un attribut de classe html qui sera utilisée par le CSS <br/>
      (par exemple: "info", "error", "warning"). Grâce à cette fonction, on pourra écrire en php:<br/>
      <br/>
      <code>echo feedback("adresse email incorrecte", "warning");</code>
    </p>

    <p class="reponse">
      <?php

      // La fonction optimisée à utiliser

      // function affiche_class ($message, $class)
      // {
      //   echo ('<div class ="'.$class.'">'.$message.'</div>');
      // }
      //
      // affiche_class('Ceci est un message d\'info', 'info');
      // affiche_class('Ceci est un message alerte', 'alert');
      // affiche_class('Ceci est un message erreur', 'error');

      ?>

      <?php
      // Cette solution fonctionne mais pas optimisée

      // On crée la fonction feedback

      // function feedback($message)
      // {
      //   switch ($message)
      //     {
      //       case 'Ceci est un message info':
      //         $class = 'info';
      //         echo "<div class=\"{$class}\"> {$message} </div>";
      //         break;
      //
      //       case 'Ceci est un message alerte':
      //         $class = 'alert';
      //         echo "<div class=\"{$class}\"> {$message} </div>";
      //         break;
      //
      //       case 'Ceci est un message erreur':
      //         $class = 'error';
      //         echo "<div class=\"{$class}\"> {$message} </div>";
      //         break;
      //
      //       default:
      //         echo "<div> {$message} </div>";
      //         break;
      //     }
      // }
      //
      // //On déclare les variables des différents type de message
      // $message_info = "Ceci est un message info";
      // $message_alert= "Ceci est un message alerte";
      // $message_error = "Ceci est un message erreur";
      //
      // // On appelle la fonction feedback pour afficher les message avec un class html qui est utilisée par le CSS et qui stylise le texte en fonction du type de message
      // feedback($message_info);
      // feedback($message_alert);
      // feedback($message_error);
        ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 10</h3>

    <p class="enonce">
      Crée une fonction te permettant de gérer des messages envers l'utilisateur <br/>
      grâce à deux arguments: le premier argument est le message, le second permet de spécifier <br/>
      un attribut de classe html qui sera utilisée par le CSS <br/>
      (par exemple: "info", "error", "warning"). Grâce à cette fonction, on pourra écrire en php:<br/>
      <br/>
      <code>echo feedback("adresse email incorrecte", "warning");</code><br/>

      Trouve par toi-même dans la documentation php comment modifier ta fonction pour que, <br/>
      si le second argument n'est pas spécifié, sa valeur soit égale à "info".
    </p>

    <p class="reponse">

      Voici ce que la documentation PHP nous apprends : http://php.net/manual/fr/functions.arguments.php<br/>
      On peut définir en PHP des valeurs par défaut pour les arguments de type scalaire <br/>
      (Une variable de type scalaire est un nombre ou une chaîne de caractères) :<br/><br/>

      <code>

          function servir_cafe ($type = "cappuccino")<br/>
          {<br/>
              return "Servir un $type.\n";<br/>
          }<br/>
          echo servir_cafe();<br/>
          echo servir_cafe(null);<br/>
          echo servir_cafe("espresso");<br/>

      </code><br/>

      <h4>Affichera ceci:</h4>

      Servir un cappuccino.<br/>
      Servir un .<br/>
      Servir un espresso.<br/>


      <h4>Solution à l'exercice</h4>

      <?php

      // La fonction optimisée à utiliser

      function affiche_class ($message, $class="info") // on indique une valeur par défaut pour la class si aucune class n'est indiquée comme paramètre lorsque l'on déclare la fonction
      {
        echo '<div class ="' . $class . '">' . $message . '</div>';
      }

      affiche_class('Ceci est un message d\'info', 'info');
      affiche_class('Ceci est un message alerte', 'alert');
      affiche_class('Ceci est un message erreur', 'error');
      affiche_class('Ceci est un message dont le paramètre class');

        ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 11</h3>

    <p class="enonce">
      Crée un générateur de mots aléatoires, générant deux mots: un allant de 1 à 5 lettres, <br/>
      l'autre allant de 7 à 15 lettres. L'écran ne montrera que ceci: <br/>
      Un titre invitant l'utilisateur à générer un nouveau mot, <br/>
      ensuite: les deux mots générés, <br/>
      ensuite: un bouton permettant de rafraichir la page (et donc de recréer deux mots).
      <br/>
    </p>

    <p class="reponse">

      <?php

        // Explications des fonctions natives PHP utilisées

        // shuffle(array);//mélange les éléments d'un tableau
        // implode (chaine, ), rassemble les éléments d'un tableau dans une chaîne
        // substr(string, debut, longueur);//retourne un segment de chaine
            echo '<h4>Générer deux nouveaux mots aléatoires</h4>';
            // On déclare les variables
            $chaine=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
            $toutes_lettres_melangées = shuffle($chaine);// On mélange tous les éléments du tableau
            $dans_le_desordre = implode ($chaine); // On rassemble tout les éléments du tableau dans une chaîne de caractère
            // echo $dans_le_desordre . '<br></br>'; // On affiche la chaine de caractère pour vérifier qu'à chaque rafraichissement de la page, l'ordre des lettres changent

            //On crée la fonction mot1
            function mot1($dans_le_desordre)
            {
            $min1 = 1; // Valeur minimal 1 pour être certaine d'avoir au moins une lettre
            $max1 = rand (1,5); // Valeur maximale située entre 1 et 5 lettres
            $mot1 = substr($dans_le_desordre, $min1, $max1); // retourne une partie de la chaine aléatoire, qui commence à la valeur $min1 et a une longueur de $max1
            return 'mot 1 =' . $mot1 . '<br/>'; // Affiche mot1 = mot généré (de 1 à 5 lettres aléatoires)
            }

            // On crée la fonction mot2
            function mot2($dans_le_desordre)
            {
              $min2 = 7; // Valeur minimal 7 pour être certaine d'avoir au moins 7 lettres
              $max2 = rand (7,15); // Valeur maximale située entre 7 et 15 lettres
              $mot1 = substr($dans_le_desordre, $min2, $max2); // retourne une partie de la chaine aléatoire, qui commence à la valeur $min2 et a une longueur de $max2
              return 'mot 2 =' . $mot1 . '<br/>'; // Affiche mot1 = mot généré (de 7 à 15 lettres aléatoires)
            }

            function generateur_mot($mot1,$mot2) {
              echo mot1($mot1).mot2($mot2);
            }

            generateur_mot($dans_le_desordre,$dans_le_desordre);
            echo '<br/>';

            //On crée un bouton pour recharger la page
            echo '<a class="bouton_noir" href="./fonctions.php">Recharge la page</a>';
        ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 12</h3>

    <p class="enonce">
      Convertis la chaîne suivante: "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!" en lettres minuscules.
    </p>

    <p class="reponse">

      <?php

        //Explications des fonctions natives PHP utilisées

        // strtolower($chaine) : Renvoie une chaîne en minuscules
        // str_replace($search, $replace, $chaine) : Remplace toutes les occurrences dans une chaîne

        //Décomposition des étapes

        // $phrase_majuscule = "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
        // $minuscules = strtolower($phrase_majuscule);
        // echo $minuscules;
        // echo '<br/>';

        // Problème, les caractères accentués comme le Ê ne sont pas mis en minuscules et reste en majuscule
        // $minuscules_accentue = str_replace("Ê", "ê", $minuscules);// on remplace Ê majuscule par ê minuscules
        // echo $minuscules_accentue;

        ?>

        <?php
        //Version optimisée

        //Déclaration variables

        $phrase_majuscule = "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";

        //Déclaration de la fonction
        function minuscule ($phrase_majuscule)
        {
          $minuscules = strtolower($phrase_majuscule);
          $minuscules_accentue = str_replace("Ê", "ê", $minuscules);
          echo $minuscules_accentue;
        }

        //Appel de la fonction
        minuscule($phrase_majuscule);

        ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice 13</h3>

    <p class="enonce">
      Dans ton nouveau boulot, tu récupères du code du développeur précédent<br/>

      <br/>
      <code>
        // Calcul du volume d'un cône de rayon 5 et de hauteur 2
            $volume = 5 * 5 * 3.14 * 2 * (1/3);
            echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';
        // Calcul du volume d'un cône de rayon 3 et de hauteur 4
            $volume = 3 * 3 * 3.14 * 4 * (1/3);
            echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';
      </code>
      <br/>

      WOA! Une répétition! Ton subsconscient aussitôt crie DRY! DRY! DRY!<br/>
      Afin qu'il te laisse tranquille, crée une fonction volume_dun_cone, <br/>
      qui va calculer le volume du cône en fonction du rayon et de la hauteur. <br/>
      Cette fonction ne va rien afficher, on veut juste qu'elle nous renvoie le volume <br/>
      qu'on cherche. Voici un schéma, pour bien t'embrouiller <br/>
      (Ben oui, en réalité, les informations utiles à cette mission sont dans le code ci-dessus...)
      <img src="(https://camo.githubusercontent.com/4138934898cd1684945a346c57c4048ffaebc8e9/68747470733a2f2f757365722e6f632d7374617469632e636f6d2f66696c65732f353030315f363030302f353735382e676966" alt="shema" />
    </p>

    <p class="reponse">

        <!-- La formule mathématique pour calculerle volume d'un cône est <br/>
        π × R2 × h ÷ 3
        π  à une valeur de 3.14
        R représente le rayon donc R² revient à faire R * R
        h représente la hauteur
        Le tout divisier par 3 ce qui équivaut à faire * 1/3

        La formule revient donc à
        $volume = R * R * 3.14 * h * (1/3); -->

        <?php

          //Création de la fonction de calcul du volume d'un commence

          function volume_dun_cone ($rayon, $hauteur)
          {
            $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
            echo 'Le volume du cône de rayon '. $rayon .'cm et de hauteur ' . $hauteur . 'cm est : ' .$volume . ' cm³<br/>';
          }

          // Appel de la fonction de calcul du volume d'un cone réutilisable avec des paramètre de hauteur et rayon différents selon les 2 cas

          volume_dun_cone(5,2);
          volume_dun_cone(3,4);
        ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice #godmode #walloniequandtunoustiens - 1</h3>

    <p class="enonce">
      Invente une fonction reverse_string( $stringToReverse) <br/>
      qui réécrit une chaine de caractères à l'envers.
    </p>

    <p class="reponse">
      <?php
        // Création de la fonction
        function reverse_string($stringToReverse)
        {
          $chaine_a_envers = strrev($stringToReverse);
          echo 'A l\'endroit : ' . $stringToReverse . '<br/>';
          echo 'A l\'envers : ' .$chaine_a_envers;
        }

        // Appel de la fonction
        reverse_string('La vie est un long fleuve tranquille');
      ?>
    </p>

    <br/>
    <br/>

    <h3>Exercice #godmode #walloniequandtunoustiens - 2</h3>

    <p class="enonce">
      En Wallonie, les mouvements de jeunesse ont une chanson populaire intitulée <br/>
      "Buvons un coup ma serpette est perdue". Utilise la fonction str_replace avec <br/>
      $substitutions = array( E, I, O, U, OU, É, È, OI, UI, OUI, AN, IN, ON, UN, OIN); <br/>
      pour transformer automatiquement les voyelles du couplet selon chaque élément de l'array <br/>
      et ainsi générer les paroles complètes de la chanson (le couplet avec chaque diphtongue remplacée).
    </p>

    <p class="reponse">
      <!-- Paroles de la chanson originale -->

      <!-- Buvons un coup ma serpette est perdue,
      Mais le manche, mais le manche,
      Buvons un coup ma serpette est perdue
      Mais le manche est revenu. -->

      <!-- Type de variante à obtenir en modifiant les paroles avec la lettre A -->

      <!-- Bavas a ca ma sarpata a parda,
      Ma la macha ma la macha
      Bavas a ca ma sarpata a parda
      Ma la macha a ravana. -->
      <?php
      $paroles =
      "Buvons un coup ma serpette est perdue,<br/>
      Mais le manche, mais le manche,<br/>
      Buvons un coup ma serpette est perdue<br/>
      Mais le manche est revenu.<br/><br/>";

      echo $paroles;

      function genere_paroles($paroles,$lettre_couplet)
      {
        $paroles_majuscules = strtoupper($paroles);// On met d'abord toutes les paroles en majuscules pour comparer des lettres majuscules avec des lettres majuscules uniquement
        $paroles_majuscules_transformées =str_replace
        (
           array('A','E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN')
           , $lettre_couplet
           , $paroles_majuscules
        );
        $chaines_transformees_minuscules = mb_strtolower($paroles_majuscules_transformées);//Avec la fonction native PHP strtolower, on remet tout le couplet en minuscules
        $chaines_transformees_1majuscule = ucfirst($chaines_transformees_minuscules); // Avec la fonction native PHP ucfirst, on met le premier caractère de la chaîne en majuscule
        echo $chaines_transformees_1majuscule; // On affiche les paroles du couplet modifié avec la lettre du couplet selectionnée
      }

      $lettre_couplet = "A";
      genere_paroles($paroles, $lettre_couplet);

      $lettre_couplet = "E";
      genere_paroles($paroles, $lettre_couplet);

      $lettre_couplet = "I";
      genere_paroles($paroles, $lettre_couplet);

      $lettre_couplet = "O";
      genere_paroles($paroles, $lettre_couplet);

      $lettre_couplet = "U";
      genere_paroles($paroles, $lettre_couplet);

      $lettre_couplet = "Y";
      genere_paroles($paroles, $lettre_couplet);

      ?>
    </p>

  </body>

</html>
