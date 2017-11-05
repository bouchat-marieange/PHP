<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/excuse.css">
    <title>Générateur d'excuses</title>
  </head>

  <body>
    <h1>Générateur d'excuses</h1>

    <p>
      Tu es parent d'un enfant ou de plusieurs enfants qui sont à l'école primaire. <br/>
      Tu n'en peux plus de trouver des motifs falacieux pour excuser l'absence ou les retards répétés de ta progéniture dû à ton manque d'organisation et de ponctualité?
      Alors le générateur d'excuses BeCode est fait pour toi ! Fini le casse-tête des mots écrit en dernière minute, quelques cases à cocher et le tour est joué !
      Tu n'auras plus qu'à copier-coller la réponse pour rédiger la lettre d'excuses.
    </p>

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
            <input type= "radio" name="motif" value="maladie"> Maladie<br/>
            <input type= "radio" name="motif" value="deces"> Décès de l'animal de compagnie (ou d'un membre de la famille)<br/>
            <input type= "radio" name="motif" value="activite"> Activité extra-scolaire importante<br/>
            <input type= "radio" name="motif" value="autre">Autre excuse<br/>
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
    ?>
  </body>

</html>
