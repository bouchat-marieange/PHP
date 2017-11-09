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

        // function somme($a, $b)
        // {
        //   if (is_int($a) && is_int($b))
        //   {
        //   return $a + $b;
        //   }
        //   else
        //   {
        //     echo "Erreur, argument non numérique";
        //   }
        // }
        //
        // $total = somme(8,3);
        // echo $total;
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
        $phrase = "Bonjour je suis en forme";
        $initiales = substr($phrase, 0,1);
        echo $initiales;

        // substr() prend en paramètre la chaine de caractère et ensuite le point de départ 0 pour la première lettre, et ensuite un second chiffre pour savoir jusqu'à quel caractère afficher la chaîne
      ?>
    </p>


  </body>

</html>
