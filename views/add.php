<!DOCTYPE html>
<html>
  <head>
    <title>Ajouter un animal</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animaux.css" />
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <h1>Ajouter un animal</h1>
    <form action="?action=add" method="POST">
      <p>
        <label for="name_input">Nom:</label>
        <input type="text" id="name_input" name="nom"/>
      </p>
      <p>
        <label for="type_input">Type:</label>
        <input type="text" id="type_input" name="type" />
      </p>
      <p>
        <label for="species_select">Espèce:</label>
        <select id="species_input" name="espece">
          <option value="">Sélectionner un espèce</option>
          <?php
            foreach ($especes as $espece) {
              echo '<option value="' . $espece['id'] . '">' . $espece['espece'] . '</option>';
            }
          ?>
        </select>
      </p>
      <p>
          <label for="age_input">Age:</label>
          <input type="number" id="age_input" name="age" />
      </p>
      <p>
        <label for="mastername_input">Nome de maître:</label>
        <input type="text" id="mastername_input" name="master_name" />
      </p>
      <p>
        <label for="masterfirstname_input">Prénom de maître:</label>
        <input type="text" id="masterfirstname_maitre_input" name="master_first_name" />
      </p>
      <p>
        <label for="masternumber_input">Téléphone:</label>
        <input type="text" id="masternumber_input" name="master_tel_num" />
      </p>
      <p>
        <label for="adress_input">Adresse:</label>
        <input type="text" id="adress_input" name="adresse" />
      </p>
      <p>
        <label for="city_input">Ville:</label>
        <input type="text" id="city_input" name="ville" />
      </p>
      <p>
        <label for="vet_select">Vétérinaire:</label>
        <select id="vet_input" name="vet_name" >
          <option value="">Sélectionner un vétérinaire</option>
          <?php
            foreach ($veterinaires as $veterinaire) {
              echo '<option value="' . $veterinaire['id'] . '">' . $veterinaire['nom'] . $veterinaire['prenom'] .'</option>';
            }
          ?>
        </select>
        </p>
        <p>
        <label for="description_input">Description santé:</label>
        <input type="text" id="description_input" name="description_sante" />
      </p>
      <p>
        <input type="submit" name="submit" value="Valider" />
      </p>      
    </form>
  </body>
</html>
