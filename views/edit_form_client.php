<!DOCTYPE html>
<html>
  <head>
    <title>Modifier un clients</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list_client">Liste de clients</a>
        &nbsp;/&nbsp;
        Modifier un client
    </p>   
    <h1>Modifier le clients</h1>
    <form action="?action=edit_client&id=<?= $clients['id'] ?>" method="POST">
      <p>
        <label for="name_input">Nom:</label>
        <input type="text" id="name_input" name="name" value="<?= $clients['name'] ?>" required />
      </p>
      <p>
        <label for="first_name_input">Prénom:</label>
        <input type="text" id="first_name_input" name="first_name" value="<?= $clients['first_name'] ?>" required />
      </p>
      <p>
          <label for="num_tel_input">Numéro de téléphone:</label>
          <input type="text" id="num_tel_input" name="phone_number" value="<?= $clients['phone_number'] ?>" required/>
      </p>
      <p>
        <label for="address_input">Adresse:</label>
        <input type="text" id="address_input" name="address" value="<?= $clients['address'] ?>" required />
      </p>
      <p>
        <label for="city_input">Ville:</label>
        <input type="text" id="city_input" name="city" value="<?= $clients['city'] ?>" required />
      </p>
      <p>
        <input type="submit" name="submit" value="Valider" />
      </p>      
    </form>
  </body>
</html>
