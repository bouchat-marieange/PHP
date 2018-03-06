<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post" id="form_delete">
      <table>
        <?php
          foreach ($data as $dataCity) {
            echo '<tr><td>'.$dataCity[0].'</td><td>'.$dataCity[2].'</td><td>'.$dataCity[1].'</td><td><input type="checkbox" name="'.lcfirst($dataCity[0]).'"/></td></tr>';
          }
        ?>
      </table>
      <label for="del">Supprimer les villes sélectionnées : </label>
      <input type="submit" name="del" value="Supprimer" id="del"/>
    </form>
  <section>
    <form action="" method="post" id="form_add">
      <fieldset>
        <legend>Ajouter une ville</legend>
        <label for="ville">Ville: </label><input type="text" name="ville" />
        <label for="min">Min: </label><input type="number" name="min" min="-30" max="50"/>
        <label for="max">Max: </label><input type="number" name="max" min="-30" max="50" /> <br/>
        <input type="submit" name="add" value="Ajouter"/>
      </fieldset>
    </form>
  </section>
  </body>
</html>
