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

      $chaine = 'Cette chaine va etre melangee !';
      $chaine = str_shuffle($chaine);

      echo $chaine;

    ?>

  </body>

</html>
