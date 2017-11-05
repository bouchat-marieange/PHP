<?php

$note = $_GET['note'];
echo ($note . " - " );

// Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
// Si la note est égale à 4, 5, 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
// Si la note est égale à 10, affiche "Tout juste!"
// Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
// Si la note est 15, 16, 17, ou 18, affiche "Bravo!".
// Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!".

switch ($note)
{
  case 0:
  case 1:
  case 2:
  case 3:
          echo "Ce travail est nul!";
          break;
  case 4:
  case 5:
  case 6:
  case 7:
  case 8:
  case 9:
          echo "Ce travail n'est pas terrible !";
          break;
  case 10:
          echo "Tout juste !";
          break;
  case 11:
  case 12:
  case 13:
  case 14:
          echo "C'est pas mal !";
          break;
  case 15:
  case 16:
  case 17:
  case 18:
          echo "Bravo !";
          break;
  case 19:
  case 20:
          echo "Police ! Arrêtez ce tricheur !";
};

 ?>
