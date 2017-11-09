<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
      function ae_for_a_e ($liste_mots, $chaine_a_remplacer, $chaine_de_remplacement)
      {
        $mots_a_e = explode(",",$liste_mots);
        foreach ($mots_a_e as $mot_a_e)
        {
          $position = strripos($mot_a_e, $chaine_a_remplacer);
          $mots_ae = str_replace ($chaine_a_remplacer,$chaine_de_remplacement, $mot_a_e );
          echo $mots_ae . '<br/>';
        }
      }

      //On appelle la fonction
      $liste_mots = "caecotrophie,chaenichthys,microsphaera,sphaerotheca";
      $chaine_a_remplacer = "ae";
      $chaine_de_remplacement = "æ";
      ae_for_a_e ($liste_mots, $chaine_a_remplacer, $chaine_de_remplacement);

      ?>
    </p>


    <h3>Exercice 8</h3>

    <p class="enonce">
      Crée la fonction inverse, qui remplace le caractère "æ" par "ae" <br/>
      dans les chaines suivantes: cæcotrophie, chænichthys, microsphæra, sphærotheca
    </p>

    <p class="reponse">
      <?php

      ?>
    </p>


  </body>

</html>
