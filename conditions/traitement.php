<?php
  $age = ['age'];

  $message = ("Il est approximativement " . $heure . heures);// On affiche l'heure actuelle

  if ($age <12)
  {
    echo("Salut petit !");
  }
  elseif ($age >= 12 and $age <18)
  {
    echo("Salut l'ado !");
  }
  else if ($age >= 18 and $age <=115)
  {
    echo("Salut l'adulte !");
  }
  elseif ($age < 0)// Si l'utilisateur entre une valeur négative par exemple -25
  {
    echo("Vous vous prenez pour Benjamin Button ou pour Marty McFly ?");
  }
  elseif ($age > 115)
  {
    echo("Wow ! Toujours vivant ?");
  }
  ;
?>
