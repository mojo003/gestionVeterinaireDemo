<!DOCTYPE html>
<html>
  <head>
    <title>Modifier un animal</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list">Liste des animaux</a>
        &nbsp;/&nbsp;
        Modifier un animal
    </p>   
    <h1>Modifier un animal</h1>
    <form action="?action=edit&id=<?= $animal['id'] ?>" method="POST">
      <p>
        <label for="name_input">Nom:</label>
        <input type="text" id="name_input" name="name" value="<?= $animal['name'] ?>" />
      </p>
      <p>
        <label for="breed_input">Race:</label>
        <input type="text" id="breed_input" name="breed" value="<?= $animal['breed'] ?>" />
      </p>

      <p>
          <label for="type_select">Type:</label>
          <select id="type_input" name="type" required>
            <?php
              foreach ($types as $type) {
                echo '<option value="' . $type['id'] . '" ' . ($type['id'] === $animal['id_type'] ? 'selected' : '') . '>' . $type['type'] . '</option>';
              }
            ?>
          </select>
        </p>
      
      <p>
          <label for="age_input">Âge:</label>
          <input type="number" id="age_input" name="age" value="<?= $animal['age'] ?>"/>
      </p>
      <p>
        <label for="vet_name_select">Vétérinaire:</label>
        <select id="vet_name_input" name="vet_name" required>
          <?php
            foreach ($veterinarians as $veterinary) {
              echo '<option value="' . $veterinary['id'] . '" ' . ($veterinary['id'] === $animal['id_vet'] ? 'selected' : '') . '>' . $veterinary['first_name'] . ' ' . $veterinary['name'] . '</option>';
            }
          ?>
        </select>
      </p>
      <p>
        <label for="client_name_select">Client:</label>
        <select id="client_name_input" name="client_name" required>
          <?php
            foreach ($clients as $client) {
              echo '<option value="' . $client['id'] . '" ' . ($client['id'] === $animal['id_client'] ? 'selected' : '') . '>' . $client['first_name'] . ' ' . $client['name'] . '</option>';
            }
          ?>
        </select>
      </p>
      <p>
        <label for="health_description_input">Description santé:</label>
        <input type="text" id="health_description_input" name="health_description" value="<?= $animal['health_description'] ?>" />
      </p>
      <p>
        <input type="submit" name="submit" value="Valider" />
      </p>      
    </form>
    <a href="?action=delete&id=<?= $animal['id'] ?>" class="button1" onclick="return confirm('Voulez-vous vraiment supprimer cet animal?')">Supprimer l'animal <i class='fas fa-dog'></i></a>
  </body>
</html>
