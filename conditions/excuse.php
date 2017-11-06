<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="excuse.css">
    <title>Générateur d'excuses</title>
  </head>

  <body>
    <h1>Générateur d'excuses</h1>

    <p class="description">
      Tu es parent d'un enfant ou de plusieurs enfants qui sont à l'école primaire ? <br/>
      Tu n'en peux plus de trouver des motifs falacieux pour excuser l'absence ou les retards répétés de ta progéniture dû à ton manque d'organisation et de ponctualité ?<br/>
      <br/>
      Alors le générateur d'excuses BeCode est fait pour toi ! <br/>
      Fini le casse-tête des mots écrit en dernière minute, quelques cases à cocher et le tour est joué !</br>
      Tu n'auras plus qu'à copier-coller le texte générer par cette excellente appli pour rédiger toutes tes lettres d'excuses.
    </p>
    <br/>

    <p>
      <form method="get" action="excuse.php">
        <p>
        <label for="nom_enfant">Nom de l'enfant : </label><br/>
        <input type="text" name="nom_enfant" id="nom_enfant"/><br/>
        </p>

        <p>
        <label for="nom_instit">Nom de l'institutrice : </label><br/>
        <input type="text" name="nom_instit" id="nom_instit"/><br/>
        </p>

        <p>
          <label for="motif">Motif de l'absence ou du retard :</label><br/>
            <input class="radio" type= "radio" name="motif" value="maladie"> Maladie<br/>
            <input class="radio" type= "radio" name="motif" value="deces"> Décès de l'animal de compagnie (ou d'un membre de la famille)<br/>
            <input class="radio" type= "radio" name="motif" value="activite"> Activité extra-scolaire importante<br/>
            <input class="radio" type= "radio" name="motif" value="super_heros">Mission secrète de la plus haute importance<br/>
        </p>

        <p>
          <input type="submit" value="Envoyer" />
        </p>
      </form>
    </p>

    <?php
      $enfant = $_GET['nom_enfant'];
      $instit = $_GET['nom_instit'];
      $motif = $_GET['motif'];
      $autre_excuse = $_GET['super_'];

      echo("<p class=\"instruction\">");
          echo ("Vous pouvez à présent copier-coller le texte généré pour vous! Il ne vous reste qu'à l'imprimer et à apposer votre signature.");
      echo ("</p></br>");

      echo("<div class=\"texte_genere\">");
          echo("<p class=\"date\">");
            // Affichage de la date en français
            setlocale(LC_ALL, 'fr_FR');; // Definir la langue francaise avec setlocale
            echo strftime("%A %d %B %Y");
          echo ("</p>");

          // echo date("l j F Y ");
          echo ("Chère madame ". $instit . ", <br/><br/>");
          echo ($enfant. " ne pourra assister au cours aujourd'hui car, ");

          switch ($motif)
          {
            case maladie:
                echo ("il eu un intoxication alimentaire, le contraint à rester en permanence dans un périmètre de 5 mètres maximum des toilettes !");
                break;
            case deces:
                echo ("son poisson rouge est mort ! Etand donné l'immense attachement qu'il portait à cet animal, je n'ai pu me résoudre à l'envoyer à l'école vu l'étendue de son chagrin!");
                break;
            case activite:
                echo ("il avait aqua-poney ! Oui ça existe !!! Cette activité est particulièrement importante pour la carrière de jockey auquel il se destine.");
                break;
            case super_heros:
                echo ("il a dû mettre ces super-pouvoirs au service de la nation en sauvant un groupe d'étudiants dont le bus scolaire avait basculer dans un ravin ! Si vous ne me croyez pas, regardez le JT ce soir!");
                break;
          };
          echo("<p class=\"signature\">Signature parent : </p>");
      echo ("</div>");
    ?>


  </body>

</html>
