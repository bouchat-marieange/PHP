<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Boucles</title>
  </head>

  <body>
    <h1>PHP - Les boucles</h1>

    <h2>Exercices</h2>

    <p class="enonce">
      Voici un array :<br/>
      $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');<br/>
      Construis une boucle qui affiche chaque élément de l'array à l'aide de foreach<br/>
      Ensuite, dans ta boucle, conjuge le verbe "coder" en fonction du pronom.<br/>
      (utilise une condition pour cela)<br/>
    </p>

    <p class="reponse">
    <?php
      $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Ils/Elles');

      echo '<pre>';
      foreach ($pronoms_personnels as $element)
      {
        echo $element . '<br/>';
      }
      echo '</pre>';


      echo '<pre>';
      foreach ($pronoms_personnels as $element)
      {
        echo $element; // On affiche à chaque tour de boucle le pronom
        echo ' '; // On affiche ensuite un espace vide qui se placera entre le pronom et le verbe conjuguer

        //On fait une boucle switch pour déterminer la forme du verbe conjugué à affiché en fonction du pronom à chaque tour de boucle
        switch ($element)
        {
          case 'Je':
              echo "code". "<br/>";
              break;
          case 'Tu':
              echo "codes". "<br/>";
              break;
          case 'Il/Elle':
              echo "code". "<br/>";
              break;
          case 'Nous':
              echo "codons". "<br/>";
              break;
          case 'Vous':
              echo "codez". "<br/>";
              break;
          case 'Ils/Elles':
              echo "codent". "<br/>";
              break;
        }
      }
      echo '</pre>';


    ?>
    </p>


  </body>

</html>
