<!DOCTYPE html>
<html>
  <head>
    <title>Ajouter un animal</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list">Liste des animaux</a>
        &nbsp;/&nbsp;
        Ajouter un animal
      </p>   
        <h1>Ajouter un animal</h1>
        <form action="?action=add" method="POST">
      </p>
      <p>
        <label for="name_input">Nom:</label>
        <input type="text" id="name_input" name="name"/>
      </p>
      <p>
        <label for="breed_input">Race:</label>
        <input type="text" id="breed_input" name="breed" />
      </p>
      <p>
        <label for="type_select">Type:</label>
        <select id="type_input" name="type">
          <option value="">Sélectionner un type</option>
          <?php
            foreach ($types as $type) {
              echo '<option value="' . $type['id'] . '">' . $type['type'] . '</option>';
            }
          ?>
        </select>
      </p>
      <p>
          <label for="age_input">Âge:</label>
          <input type="number" id="age_input" name="age" />
      </p>
      <p>
        <label for="vet_name_select">Vétérinaire:</label>
        <select id="vet_name_input" name="vet_name" >
          <option value="">Sélectionner un vétérinaire</option>
          <?php
            foreach ($veterinarians as $veterinary) {
              echo '<option value="' . $veterinary['id'] . '">' . $veterinary['name'] . ' ' . $veterinary['first_name'] .'</option>';
            }
          ?>
        </select>
        </p>
        <p>
        <label for="master_name_select">Client:</label>
        <select id="master_name_input" name="client_name" >
          <option value="">Sélectionner un client</option>
          <?php
            foreach ($clients as $client) {
              echo '<option value="' . $client['id'] . '">' . $client['name'] . ' ' . $client['first_name'] .'</option>';
            }
          ?>
        </select>
        </p>
        <p>
        <label for="health_description_input">Description santé:</label>
        <input type="text" id="health_description_input" name="health_description" />
      </p>
      <p>
        <input type="submit" name="submit" value="Valider" />
      </p>
    </form>
  </body>
</html>
