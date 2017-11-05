<?php
  // On récupère la valeur entrée par l'utilisateur dans la page conditions.php grâce à son nom (name="age_utilisateur")
  // On la stocke dans une variable appelée "age" pour pouvoir manipuler cette information et l'utiliser dans une condition if ... elseif
  $age = $_GET['age_utilisateur'];
  $genre = $_GET['genre']; // Si l'utilisateur à cliquer sur le bouton radio Femme , la valeur envoyée sera "femme", si l'utilisateur à cliquer sur le bouton radio Homme, la valeur renvoyée sera "homme"
  $langue = $_GET['english'];// Si l'utilisateur à cliquer sur Oui, la valeur renvoyée sera oui, si l'utilisateur à cliquer sur non, la valeur renvoyée sera non

  if ($age >=0 and $age<12) // Si l'age de l'utilisateur est compris entre 0 et 12 ans
  {
    if ($genre == "femme" and $langue =="non")
    {
      echo("Salut petite !");
    }
    elseif ($genre == "femme" and $langue =="oui")
    {
        echo("Hello Girl !");
    }
    elseif ($genre == "homme" and $langue =="non")
    {
      echo("Salut petit !");
    }
    elseif ($genre == "homme" and $langue =="oui")
    {
      echo("Hello Boy !");
    }
  }
  elseif ($age >= 12 and $age <18) // Si l'age de l'utilisateur est compris entre 12 ans (inclus) et 18 (exclus)
  {
    if ($genre == "femme" and $langue =="non")
    {
      echo("Salut l'adolescente !");
    }
    elseif ($genre == "femme" and $langue =="oui")
    {
        echo("Hello Teenage girl !");
    }
    elseif ($genre == "homme" and $langue =="non")
    {
      echo("Salut l'adolescent !");
    }
    elseif ($genre == "homme" and $langue =="oui")
    {
      echo("Hello Teenage boy !");
    }
  }
  else if ($age >= 18 and $age <=115)// Si l'age de l'utilisateur est compris entre 18 (inclus) et 115 (inclus)
  {
    if ($genre == "femme" and $langue =="non")
    {
      echo("Bonjour Madame !");
    }
    elseif ($genre == "femme" and $langue =="oui")
    {
        echo("Hello Lady !");
    }
    elseif ($genre == "homme" and $langue =="non")
    {
      echo("Bonjour Monsieur !");
    }
    elseif ($genre == "homme" and $langue =="oui")
    {
      echo("Hello Sir !");
    }
  }
  elseif ($age > 115) // Si l'age de l'utilisateur est supérieur à 115
  {
    if ($genre == "femme" and $langue =="non")
    {
      echo("Wow! Toujours vivante ?");
    }
    elseif ($genre == "femme" and $langue =="oui")
    {
        echo("Wow! Still alive, old lady ?");
    }
    elseif ($genre == "homme" and $langue =="non")
    {
      echo("Wow! Toujours vivant ?");
    }
    elseif ($genre == "homme" and $langue =="oui")
    {
      echo("Wow! Still alive, old man ?");
    }
  }
  else // Si l'utilisateur entre un nombre négatif (exemple: -5)
  {
    echo("Êtes-vous Benjamin Button ou Marty McFly, car vous avez encodé un âge négatif !");
  };
?>
