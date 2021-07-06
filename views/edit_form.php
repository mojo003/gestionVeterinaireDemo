<!DOCTYPE html>
<html>
  <head>
    <title>Modifier un animal</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animaux.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <h1>Modifier un animal</h1>
    <form action="?action=edit&id=<?= $animal['id'] ?>" method="POST">
      <p>
        <label for="nom_input">Nom:</label>
        <input type="text" id="nom_input" name="nom" value="<?= $animal['nom'] ?>" required />
      </p>
      <p>
        <label for="type_input">Type:</label>
        <input type="text" id="type_input" name="type" value="<?= $animal['type'] ?>" required />
      </p>
      <p>
        <label for="espece_select">Espèce:</label>
        <select id="espece_input" name="espece">
          <?php
            foreach ($especes as $espece) {
              echo '<option value="' . $espece['id'] . '"' . ($espece['id'] === $animal['id_espece'] ? 'selected' : '') . '>' . $espece['espece'] . '</option>';
            }
          ?>
        </select>
      </p>
      <p>
          <label for="age_input">Age:</label>
          <input type="number" id="age_input" name="age" value="<?= $animal['age'] ?>" required/>
      </p>
      <p>
        <label for="nom_maitre_input">Nome de maître:</label>
        <input type="text" id="nom_maitre_input" name="master_name" value="<?= $animal['master_name'] ?>" required />
      </p>
      <p>
        <label for="prenom_maitre_input">Prénom de maître:</label>
        <input type="text" id="prenom_maitre_input" name="master_first_name" value="<?= $animal['master_first_name'] ?>" required />
      </p>
      <p>
        <label for="telephone_maitre_input">Téléphone:</label>
        <input type="text" id="telephone_maitre_input" name="master_tel_num" value="<?= $animal['master_tel_num'] ?>" required />
      </p>
      <p>
        <label for="adresse_input">Adresse:</label>
        <input type="text" id="adresse_input" name="adresse" value="<?= $animal['adresse'] ?>" required />
      </p>
      <p>
        <label for="Ville_input">Ville:</label>
        <input type="text" id="ville_input" name="ville" value="<?= $animal['ville'] ?>" required />
      </p>
      <p>
        <label for="veterinaire_select">Vétérinaire:</label>
        <select id="veterinaire_input" name="vet_name">
          <?php
            foreach ($veterinaires as $veterinaire) {
              echo '<option value="' . $veterinaire['id'] . '"' . ($veterinaire['id'] === $animal['id_vet'] ? 'selected' : '') . '>' . $veterinaire['nom'] . $veterinaire['prenom'] . '</option>';
            }
          ?>
        </select>
      </p>
      <p>
        <label for="description_sante_input">Description santé:</label>
        <input type="text" id="description_sante_input" name="description_sante" value="<?= $animal['description_sante'] ?>" required />
      </p>
      <p>
        <input type="submit" name="submit" value="Valider" />
      </p>      
    </form>
    <a href="?action=delete&id=<?= $animal['id'] ?>" class="button1" onclick="return confirm('Voulez-vous vraiment supprimer cet animal?')">Supprimer l'animal <i class='fas fa-dog'></i></a>
  </body>
</html>
