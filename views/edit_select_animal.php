<!DOCTYPE html>
<html>
  <head>
    <title>Modifier un animal</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list">Liste des animaux</a>
        &nbsp;/&nbsp;
        Sélectionner un animal à modifier
    </p>   
    <h1>Modifier un animal</h1>
    <p>Sélectionner l'animal à modifier:</p>
    <form action="." method="GET">
      <p>
        <input type="hidden" name="action" value="edit" />
        <select name="id">
          <?php
            foreach ($animals as $animal) {
              echo '<option value="' . $animal['id'] . '">' . $animal['name'] . '</option>';
            }
          ?>
        </select>
        <p><input type="submit" /></p>
        
      </p>
    </form>
  </body>
</html>
