<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
  </head>
  <body>
  <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list_client">Liste de clients</a>
      &nbsp;/&nbsp;
      <?= $client['full_name'] ?>
    </p>
    <h1><?= $client['full_name'] ?></h1>   
    
    <p>
      <a href="?action=edit&id=<?= $id ?>">
        ✏️
      </a>
    </p>

    <main>
      <p>
        <strong>Nom: </strong>
        <?= $client['full_name'] ?>
      </p>
      <p>
        <strong>Numéro de téléphone: </strong>
        <?= $client['phone_number'] ?>
      </p>
      <p>
        <strong>Adresse: </strong>
        <?= $client['address'] ?>
      </p>
      <p>
        <strong>Ville: </strong>
        <?= $client['city'] ?>
      </p>             
    </main>
  </body>
</html>