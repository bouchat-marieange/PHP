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


  </body>

</html>
