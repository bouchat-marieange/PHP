<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi !</title>
  </head>

  <body>
    <h1>Bonjour
      <?php echo $_GET['nom']; ?>!
      Ce code php permet d'ajouter un nom après Bonjour. Ce nom aura transiter via l'url de la page sous la forme de http://localhost/variable/humans.php?nom=Alexandre
    </h1>
  </body>

</html>
