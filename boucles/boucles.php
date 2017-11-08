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


    <h2>Exercices</h2>

    <p class="enonce">
      <ul>
        <li>Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  while</li>
        <li>Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  for</li>
        <li>Crée un tableau contenant tous les prénoms des personnes composant ta classe.<br/>
           Affiche ces prénoms à l'aide d'une boucle.</li>
        <li>Crée un tableau contenant au moins 10 pays du monde. <br/>
          Une fois fait, utilise une boucle pour générer du html correspondant <br/>
          à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.</li>
        <li>A présent, modifie ton tableau contenant les pays pour qu'il soit un tableau associatif: <br/>
          la clef est le code ISO du pays, la valeur étant le nom du pays: <br/>
          par exemple: $pays = array('BE'=>'Belgique'); au lieu de simplement $pays = array('Belgique');. <br/>
          Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html.</li>
      </ul>

    </p>

    <p class="reponse">
    <?php
      $chiffre = 1; // on indique que l'on commence a afficher les numéro à partir de la valeur 1

      // Dans la boucle while, on indique que tant que le chiffre est inférieur ou égal à 120 on continue à boucler
      while($chiffre <= 120)
      {
        echo $chiffre . " - "; // On affiche un tiret entre chaque chiffre pour augmenter la lisibilité , on aurait put aussi ajouter un "<br/>" pour aller à la ligne après chaque chiffre
        $chiffre++;// On indique la valeur de l'incrémentation en disant qu'à chaque tour de boucle on doit ajouter 1 à la valeur précédente.
      }
    ?>

    <br/>
    <br/>

    <?php
      //Avec boucle for: paramètre 1 = la boucle commence à 1; paramètre 2 on boucle tant que la valeur est inférieur ou égal à 120; 3e paramètre: on incrémente de 1 la valeur à chaque tour de boucle (++ signifie +1)
      for ($chiffre = 1; $chiffre <= 120; $chiffre++)
      {
        echo $chiffre . " - "; //On affiche le chiffre incrémenté à chaque tour de boucle séparé par un espace, tiret, espace pour la lisibilité
      }
    ?>
    <br/>
    <br/>

    <?php
      $lovelace = ['Omar','Syl','Laureen','Nicolas','Caroline','Marie-Ange','Delphine','Ilias','Stéphane','Axel','Kevin','Antoine','Jimmy','Steve','Marvin','Mohamid','Vincent','Thomas','Gaëtan','Ornella','Kevin','Mehdi','Weichuan','Thomas','Nicolas'];
      $taille_tableau = count($lovelace);

      // echo $taille_tableau . " membres <br/>"; // On affiche la longueur du tableau et donc le nombre de membre que celui-ci contient

      //Avec la boucle for, on commence à 0 (index tableau commence à 0), puis on dit continue de boucler tant que l'index est inférieur à la longueur du tableau (pour que tout les membres soient affichés), on incrémente de 1 à chaque tour de boucle ++
      for ($i = 0; $i <= $taille_tableau; $i++)
      {
        echo $lovelace[$i] . '<br/>'; // On affiche un nouveau membre à chaque tour de boucle suivi d'un retour à la ligne en html pour la lisibilité.
      }
    ?>

    <br/>
    <br/>

    <?php
    echo 'Choisissez le pays que vous souhaitez visiter : <br/>';
    $pays = ['Autriche','Belgique','Cambodge','Egypte','Fidji','Guadeloupe','Islande','Liban','Malte','Nepal',];
    $longueur_tableau = count($pays);
    // echo $longueur_tableau; //Vérification nombre d'éléments (pays) dans le tableau
    echo '<select>';
    for ($i=0; $i<= $longueur_tableau; $i++)
        echo '<option value ="'.$pays[$i].'">'.$pays[$i].'</option>';
        echo $pays[$i];
        echo '</option>';
    echo '</select>';

      // Autriche
      // Belgique
      // Cambodge
      // Egypte
      // Fidji
      // Guadeloupe
      // Islande
      // Liban
      // Malte
      // Népal


    // <select>
    //   <option value="volvo">Volvo</option>
    //   <option value="saab">Saab</option>
    //   <option value="mercedes">Mercedes</option>
    //   <option value="audi">Audi</option>
    // </select>
    ?>

    <br/>
    <br/>

    <?php
        echo 'Choisissez le pays que vous souhaitez visiter (version ISO) : <br/>';
        $pays = ['AU'=>'Autriche','BE'=>'Belgique','CA'=>'Cambodge','EG'=>'Egypte','FI'=>'Fidji','GU'=>'Guadeloupe','IS'=>'Islande','LI'=>'Liban','MA'=>'Malte','NE'=>'Nepal'];
        $longueur_tableau = count($pays);
        echo '<select>';
        for ($i=0; $i<= $longueur_tableau; $i++)
            echo '<option value ="'.$pays[$i].'">'.$pays[$i].'</option>';
            echo $pays[$i];
            echo '</option>';
        echo '</select>';

    ?>
    </p>


  </body>

</html>
