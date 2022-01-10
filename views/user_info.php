<!DOCTYPE html>
<html>
  <head>
    <title>Infos de l'utilisateur</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <h1>Infos de l'utilisateur</h1>
    <p>
      Prénom:
      <?= $user['first_name'] ?>
    </p>   
    <p>
      Nom:
      <?= $user['last_name'] ?>
    </p> 
    <a  class="button1" href="?action=logout">Se déconnecter </a>
  </body>
</html>

