<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Conditions</title>
  </head>

  <body>
    <h1>Conditions</h1>

    <h2>Exercice 1<h2>

      <p class="enonce">
        Change la condition pour qu'elle devienne: "si la température est plus grande ou égale à 15 degrés".</p>
      </p>

      <p class="reponse">
        <?php

        $temperature = 14;
        echo ("La température ce matin est de " . $temperature . "°C !");

        if( $temperature >= 15 )
          {
            $vetement_du_jour = "T-shirt";
            echo ("Si la température est supérieure ou égale à 15° je mets un " . $vetement_du_jour . ".");
          }
        else
          {
            $vetement_du_jour = "Pull-over";
            echo ("Si la température est inférieure à 15° je mets un " . $vetement_du_jour . ".");
          };
        ?>
      </p>



      <h2>Exercice 2</h2>

      <p class="enonce">
        Lance ton serveur de développement local.<br/>
        Dans le dossier racine de ton serveur, crée un fichier que tu nommes conditions.php.

        <h3>0. Représente en code le fait de devoir ranger sa chambre si elle est sale.</h3>

        Astuce: Initialise une variable booléenne $chambre_est_sale puis teste là dans une condition. Si elle est vraie, affiche "Range ta chambre, on dirait la cage d'un bonobo!". Sinon, affiche "Ta chambre est trop propre, vis un peu!".
        Fait? Bravo. A présent, modifie ton script pour représenter plutôt comment tes parents s'exprimeraient.
        Ensuite, rendons le script un peu plus subtil en permettant une gradation. Ta chambre pourrait être soit "dégoutante", "sale", "en ordre", "immaculée", "maniaque". Utilise une structure if/ elseif / else pour cela. Invente les messages à afficher en fonction de chaque cas de figure.
      </p>
      <p class="reponse">
        <?php
          $chambre_est_sale = true;

          if ($chambre_est_sale == true)
          {
            echo("Range ta chambre, on dirait la cage d'un bonobo !");
          }
          else
          {
            echo("Ta chambre est propre, vis un peu !");
          };
        ?>
      </p>



      <h4>Version parentale</h4>
      <p class="enonce">
        Fait? Bravo. A présent, modifie ton script pour représenter plutôt comment tes parents s'exprimeraient.
      </p>
      <p class="reponse">
        <?php
        $chambre_est_sale = true;

        if ($chambre_est_sale == true)
        {
          echo("Range ta chambre, si tu veux sortir ce soir !");
        }
        else
        {
          echo("Ta chambre est propre, maintenant tu peux m'aider à ranger le reste de la maison !");
        };
        ?>
      </p>


      <h4>Gradation saleté chambre (if elseif)</h4>
      <p class="enonce">
        Ensuite, rendons le script un peu plus subtil en permettant une gradation. Ta chambre pourrait être soit "dégoutante", "sale", "en ordre", "immaculée", "maniaque". Utilise une structure if/ elseif / else pour cela. Invente les messages à afficher en fonction de chaque cas de figure.
      </p>
      <p class ="reponse">
        <?php
        // $niveau_salete_chambre = "dégoutante";
        // $niveau_salete_chambre = "sale";
        // $niveau_salete_chambre = "en ordre";
        // $niveau_salete_chambre = "immaculée";
        $niveau_salete_chambre = "maniaque";

        if ($niveau_salete_chambre == "dégoutante")
        {
          echo("Ta chambre est une vraie porcherie !");
        }
        elseif ($niveau_salete_chambre == "sale")
        {
          echo("Ta chambre n'est pas un garde manger, mais au moins tes vêtements sont rangés !");
        }
        else if ($niveau_salete_chambre == "en ordre")
        {
          echo("Pourvu que ça dure !");
        }
        elseif ($niveau_salete_chambre == "immaculée")
        {
          echo("Tu as prévu de recevoir quelqu'un ce weekend ?");
        }
        elseif ($niveau_salete_chambre == "maniaque")
        {
          echo("Monk, sort de ce corps !");
        }
        else
        {
          echo("Tu n'a plus de chambre, le service de désinfection à tout brûler !");
        };
        ?>
      </p>

      <h3>1. Affiche un message de salutation différent selon l'heure courante</h3>

      <p class="enonce">
        Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".</br>
        Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".</br>
        Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".</br>
        Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".</br>
        Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".</br>
        </br>
        Astuce: Exploite le fait que l'on puisse combiner des conditions (via les opérateurs AND / OR).
      </p>

      <p class="reponse">
        <?php
          // $heure = date("H:i");
          $heure = date("H");
          $message = ("Il est approximativement " . $heure . heures);// On affiche l'heure actuelle

          if ($heure >= 5 and $heure <= 9)
          {
            echo("Bonjour ! " . $message);
          }
          elseif ($heure >= 9 and $heure <=12)
          {
            echo("Bonne journée ! " . $message);
          }
          else if ($heure >= 12 and $heure <=16)
          {
            echo("Bon après-midi ! " . $message);
          }
          elseif ($heure >= 16 and $heure <=21)
          {
            echo("Bonne soirée ! " . $message);
          }
          elseif ($heure >= 21 and $heure <=4)
          {
            echo("Bonne nuit ! " . $message);
          }
          else
          {
            echo("Vous vivez dans un autre espace temps ! Mais tout est relatif !");
          };
        ?>
      </p>



      <h3>2. Affiche une salutation différente selon l'âge de l'utilisateur</h3>

      <p class="enonce">
        Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).</br>
        Méthode: GET Affiche un message différent selon la réponse au formulaire.<br/>
        <ul>
          <li>Si l'âge est inférieur à 12 ans, affiche "Salut petit!"</li>
          <li>Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"</li>
          <li>Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"</li>
          <li>Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?"</li>
        </ul>
      </p>

      <p class="reponse">
        <form method="get" action="traitement.php">
        <!-- methode get envoie les données via l'adresse url de la page, action : indique la page vers laquelle sera dirigé l'utilisateur pour le traitement de ses données une fois envoyée avec le bouton "Envoyer" -->
          <label for="age_utilisateur">Quel est votre âge :</label>
          <input type="number" name="age_utilisateur" id="age_utilisateur"/>
          <!-- type definit le type de données à entrer par l'utilisateur -->
          <!-- name donne un nom à un élément du formulaire et permet de savoir à quoi corresponde les données envoyée au serveur en PHP -->
          <!-- id identique au name de l'input permet de lier le champ à son label qui à une valeur de for qui correspond à l'id du champ -->
          <!-- <input type="submit" value="Envoyer" /> Bouton d'envoi des données. Le visiteur sera conduit à la page indiquée dans l'attribut action du formulaire. -->
          <input type="submit" value="Envoyer" />
        </form>
        <!-- Une fois que l'utilisateur à cliquer sur le bouton "Envoyer", il est automatiquement rediriger vers la page traitement.php qui va recevoir les données qu'il a encodées et va les stockés dans une variable pour pouvoir interagir avec celle-ci. Par exemple afficher un message en fonction de la valeur envoyée. -->
      </p>




      <h3>3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur</h3>

      <p class="enonce">
        Complète le formulaire de l'exercice précédent en ajoutant une deuxième question :
        "Homme ou Femme?" (champ de type Radio).
        Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.<br/>
        Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".<br/>
        Idem pour les autres tranches d'âge.<br/>
        Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions.
      </p>

      <p class="reponse">
        <form method="get" action="traitement.php">

          <label for="age_utilisateur">Quel est votre âge :</label>
          <input type="number" name="age_utilisateur" id="age_utilisateur"/><br/>

          <label for="genre">Homme ou Femme ?</label><br/>
            <INPUT type= "radio" name="genre" value="femme"> Femme<br/>
            <INPUT type= "radio" name="genre" value="homme"> Homme<br/>

          <input type="submit" value="Envoyer" /><!-- Une fois que l'utilisateur à cliquer sur le bouton "Envoyer", il est automatiquement rediriger vers la page traitement.php qui va recevoir les données qu'il a encodées et va les stockés dans une variable pour pouvoir interagir avec celle-ci. Par exemple afficher un message en fonction de la valeur envoyée. -->
        </form>
      </p>


  </body>

</html>
