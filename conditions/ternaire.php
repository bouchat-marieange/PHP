<!-- Version traditionnelle -->
<?php
// $genre = $_GET['genre'];
//
// if ($genre == "F")
// {
//   $bonjour = "Bonjour Madame !";
// }
// else
// {
//   $bonjour =  "Bonjour Monsieur !";
// };
//
// echo ($bonjour);
?>


<!-- Version ternaire -->
<?php
$genre = $_GET['genre'];
$bonjour = ($genre == "F")? "Bonjour Madame !" : "Bonjour Monsieur !";
echo ($bonjour);
?>
