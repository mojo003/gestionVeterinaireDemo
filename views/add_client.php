<!DOCTYPE html>
<html>
  <head>
    <title>
      Ajouter un client
    </title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
  </head>
  <body>
  <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list_client">Liste de clients</a>
      &nbsp;/&nbsp;
      Ajouter un client
    </p>          
    <h1>Ajouter un client</h1>
    <main>
      <form action="?action=add_client" method="POST">
        <p>
          <label for="name_input">Nom:</label>
          <input type="text" id="name_input" name="name" />
        </p>

        <p>
          <label for="first_name_input">Prénom:</label>
          <input type="text" id="first_name_input" name="first_name"/>
        </p>
        <p>
          <label for="phone_number_input">Numéro de téléphone:</label>
          <input type="text" id="phone_number_input" name="phone_number" />
        </p>
        <p>
          <label for="address_input">Adresse:</label>
          <input type="text" id="address_input" name="address" />
        </p>  
        <p>
          <label for="city_input">Ville:</label>
          <input type="text" id="city_input" name="city" /> 
        <p>
          <input type="submit" name="submit" value="Soumettre" />
        </p>                      
      </form>
    </main>
  </body>
</html>
