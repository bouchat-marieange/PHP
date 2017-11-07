<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>PHP - Arrays</title>
  </head>

  <body>
    <h1>PHP - Arrays</h1>

    <h2>Exercices</h2>

    <h3>Exercice 1</h3>

    <p class="enonce">
      Voici un array:
      $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );<br/>
      Que va retourner ceci ?<br/>
      echo $pays[2];<br/>
    </p>

    <p class="reponse">
      <?php
        $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
        echo $pays[2];
      ?>
    </p>

    <h3>Exercice 2</h3>

    <p class="enonce">
      Crée un array représentant ta famille.<br/>
      Affiche son contenu avec la fonction print_r
    </p>

    <p class="reponse">
      <?php
        $famille = ['Lou','Chris','Marie'];
        echo '<pre>';// astuce: en encadrant l'instruction print_r($array) des balises <pre> et </pre> cela permet d'inclure directement votre code PHP dans une page HTML et d'obtenir un resultat plus lisible de l'affichage de votre tableau(identique à celui obtenu lorsque l'on va dans le code source de la page)
          print_r($famille);
        echo '</pre>';
      ?>
    </p>

    <h3>Exercice 3</h3>

    <p class="enonce">
      Crée un array décrivant tes plats préférés.<br/>
      Affiche son contenu avec la fonction print_r
    </p>

    <p class="reponse">
      <?php
        $plats_preferes = ['Poisson grillé et légumes','Tarte au pommes','Steak frites salade'];
        echo '<pre>';
          print_r($plats_preferes);
        echo '</pre>';
      ?>
    </p>

    <h3>Exercice 4</h3>

    <p class="enonce">
      Crée un array listant tes films et séries préférés.<br/>
      En utilisant cet array, affiche uniquement ton film/série préféré.
    </p>

    <p class="reponse">
      <?php
        $films_series = ['Orange is the new black','Will Hunting','Her','Cast away'];
        echo '<pre>';
          print_r($films_series[1]);
        echo '</pre>';
      ?>
    </p>

    <h3>Exercice 5</h3>

    <p class="enonce">
      Décris-toi dans une tableau associatif: $moi. <br/>
      Utilise au moins deux valeurs de chaque type: texte (par exemple prenom), <br/>
      booléenne (par exemple aime_le_foot) et <br/>
      Int (par exemple: age).
    </p>

    <p class="reponse">
      <?php
        $moi = array(
          'naissance' => 1973,
          'prenom' => 'Marie',
          'nom' => 'Bouchat',
          'aime le foie' => FALSE,
          'aime la musique' => TRUE,
          'hobbies' => array (
                                'sport' => 'natation',
                                'musique' => 'guitare',
                                'lecture'=> 'romans',
                                'artistique'=>'dessin'
                              ),
        );

        echo '<pre>';
          print_r($moi);
        echo '</pre>';
      ?>
    </p>

    <h3>Exercice 6</h3>

    <p class="enonce">
      Crée un deuxième tableau similaire au tien, qui décrive ton papa (ou une personne de ta famille): $papa.<br/>
      Assure-toi d'y avoir également décrit ses hobbies<br/>
      Ensuite, à ton tableau $moi, ajoute un élément dont la clef est 'papa' et la valeur équivaut à $papa<br/>
      Affiche le contenu de $moi via la fonction print_r(). (Utilise la balises html <pre> pour rendre cela plus lisible).<br/>
      Relis ton code pour t'assurer de comprendre ce qui se passe à chaque ligne.
    </p>

    <p class="reponse">
      <?php
      $Lou = array(
        'naissance' => 2006,
        'prenom' => 'Lou',
        'nom' => 'Rouchet',
        'aime le foie' => FALSE,
        'aime la musique' => TRUE,
        'hobbies' => array (
                              'sport' => 'natation',
                              'musique' => 'piano',
                              'lecture'=> 'livres sur les animaux',
                              'artistique'=>'dessin'
                            ),
      );

      $moi = array(
        'naissance' => 1973,
        'prenom' => 'Marie',
        'nom' => 'Bouchat',
        'aime le foie' => FALSE,
        'aime la musique' => TRUE,
        'hobbies' => array (
                              'sport' => 'natation',
                              'musique' => 'guitare',
                              'lecture'=> 'romans',
                              'artistique'=>'dessin'
                            ),
        'fille' => $Lou,
      );

        echo '<pre>';
          print_r($moi);
        echo '</pre>';
      ?>
    </p>

    <h3>Exercice 7</h3>

    <p class="enonce">
      Tu veux savoir combien de hobbies a ton père. <br/>
      Trouve la fonction PHP qui permette de **compter** le nombre d'éléments d'un tableau. count() <br/>
      Compte tes propres hobbies<br/>
      Additionne les deux et affiche le résultat
    </p>

    <p class="reponse">
      <?php
      $Lou = array(
        'naissance' => 2006,
        'prenom' => 'Lou',
        'nom' => 'Rouchet',
        'aime le foie' => FALSE,
        'aime la musique' => TRUE,
        'hobbies' => array (
                              'sport' => 'natation',
                              'musique' => 'piano',
                              'lecture'=> 'livres sur les animaux',
                              'artistique'=>'dessin'
                            ),
      );

      $moi = array(
        'naissance' => 1973,
        'prenom' => 'Marie',
        'nom' => 'Bouchat',
        'aime le foie' => FALSE,
        'aime la musique' => TRUE,
        'hobbies' => array (
                              'sport' => 'natation',
                              'musique' => 'guitare',
                              'lecture'=> 'romans',
                              'artistique'=>'dessin'
                            ),
        'fille' => $Lou,
      );

        echo '<pre>';
          print_r($moi);
        echo '</pre>';

        echo ('Nombre de mes hobbies : ');
        $hobbies_moi= count($moi['hobbies']);
        echo $hobbies_moi;
        echo ('<br/>');

        echo ('Nombre des hobbies de Lou : ');
        $hobbies_lou = count($Lou['hobbies']);
        echo $hobbies_lou;
        echo ('<br/>');

        echo ('Somme de mes hobbies et de ceux de Lou : ');
        $nos_hobbies= $hobbies_lou + $hobbies_moi;
        echo $nos_hobbies;
      ?>
    </p>

    <h3>Exercice 8</h3>

    <p class="enonce">
      Un ami t'a fait découvrir les joies de la taxidermie. <br/>
      Trouve la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".
    </p>

    <p class="reponse">
      <?php

      $moi = array(
        'naissance' => 1973,
        'prenom' => 'Marie',
        'nom' => 'Bouchat',
        'aime le foie' => FALSE,
        'aime la musique' => TRUE,
        'hobbies' => array (
                              'sport' => 'natation',
                              'musique' => 'guitare',
                              'lecture'=> 'romans',
                              'artistique'=>'dessin'
                            ),
      );

        echo '<pre>';
          print_r($moi);
        echo '</pre>';

        // array_push($moi['hobbies']['animaux'],'taxidermie'); //Ne fonctionne pas ! Pourquoi?
        array_push($moi['hobbies'],'taxidermie');
        echo '<pre>';
          print_r($moi);
        echo '</pre>';
      ?>

      <h3>Exercice 9</h3>

      <p class="enonce">
        Tu te disputes avec ton père et tu décides de changer de nom de famille.<br/>
        Ta contestation n'a d'autre objet que de faire chier le système et de faire parler de toi dans les médias.<br/>
        Tu choisis donc de porter le nom de Dieudonné. <br/>
        Comment mettre à jour ton tableau pour refléter ce changement de nom de famille?
      </p>

      <p class="reponse">
        <?php

        $moi = array(
          'naissance' => 1973,
          'prenom' => 'Marie',
          'nom' => 'Bouchat',
          'aime le foie' => FALSE,
          'aime la musique' => TRUE,
          'hobbies' => array (
                                'sport' => 'natation',
                                'musique' => 'guitare',
                                'lecture'=> 'romans',
                                'artistique'=>'dessin'
                              ),
        );

          $moi['nom'] = "Dieudonné";

          echo '<pre>';
            print_r($moi);
          echo '</pre>';

        ?>
    </p>

    <h3>Exercice 10</h3>

    <p class="enonce">
      Un jour, tu rencontres ton `$ame_soeur`.  <br/>
      Décris-la sous forme d'un Tableau `$toi` .  <br/>
      Quels seront le ou les hobbies que votre enfant aura? <br/>

      Il se trouve que tu as vu un documentaire à la télé dans lequel un spécialiste en génétique héréditaire, expliquait qu'il y a 2 possibilités: <br/>
      1. soit **l'intersection** (les hobby communs aux deux array),  <br/>
      2. soit la **fusion** (tous les hobby de chaque array). <br/>
       Devine le nom des 2 fonctions PHP correspondantes dans la documentation de PHP <br/>
      (indice: elles commencent toutes deux par `array_`) et teste leur syntaxe. <br/>
      Affiche le résultat de chacune via la fonction `print_r()`.
    </p>

    <p class="reponse">
      <?php

      $moi = array(
        'prenom' => 'Marie',
        'hobbies' => array (
                              'sport' => 'natation',
                              'musique' => 'guitare',
                              'lecture'=> 'romans',
                              'artistique'=>'dessin'
                            ),
      );

      $ame_soeur = array(
        'prenom' => 'Chris',
        'hobbies' => array (
                              'sport' => 'surf',
                              'decoration' => 'bricolage',
                              'sorties'=> 'shopping',
                              'artistique'=>'dessin'
                            ),
      );

        echo '<pre>';
          print_r($moi);
        echo '</pre>';

        echo '<pre>';
          print_r($ame_soeur);
        echo '</pre>';

        echo "Les hobbies de notre enfant si intersection : <br/>";
        $hobbie_enfant_inter = array_intersect ($moi['hobbies'], $ame_soeur['hobbies']);
        print_r ($hobbie_enfant_inter);
        echo '<br/>';

        echo "Les hobbies de notre enfant si fusion : <br/>";
        $hobbie_enfant_fusion = array_merge($moi['hobbies'], $ame_soeur['hobbies']);
        print_r ($hobbie_enfant_fusion);
        // surf à écraser natation car elle possède la même clef. Si cela avait été une clef numérique elle n'aurait pas été écrasée mais ajoutée et les numéros de clef aurait été incrémentée en conséquence.
      ?>
      </p>


      <h2>Exercices</h2>

        <p class="enonce">

          <strong>Note:</strong>Pour chacun de ces exercices, affiche le résultat via la fonction `print_r()` <br/>
          afin de vérifier que tu obtiens le bon résultat. (Et dans une balise html pre c'est encore mieux).
            <ul>
              <li>Crée un tableau` $web_development` contenant une clef "frontend" et une clef "backend". À chaque clef, associe un sous-tableau vide.</li>
              <li>ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "xhtml".</li>
              <li>ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Ruby on Rails".</li>
              <li>ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "CSS".</li>
              <li>ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Flash".</li>
              <li>ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Javascript".</li>
              <li>ensuite, ajoute une ligne en dessous qui remplace la ligne contenant "xhtml" par "html".</li>
              <li>ensuite, ajoute une ligne en dessous qui efface la ligne contenant "Flash".</li>
            </ul>
        </p>

        <p class="reponse">

        </p>


  </body>

</html>
