<!DOCTYPE html>
<html>
  <head>
    <title>Liste des animaux en adoption</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <main>
      <?php include(__DIR__ . '/header.php') ?>
      <h1>Liste des animaux en adoption</h1>
      <p>
      <a href="?action=list" class="button">Liste des animaux <i class='fas fa-cat'></i> </a>
      </p>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Race</th>
            <th>Type</th>
            <th>Âge</th>
            <th>Nom de vétérinaire</th>
            <th>Description santé</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($adoptions as $adoption) {
              ?>
                <tr class="data_line">
                  <td><?= $adoption['name'] ?></td>
                  <td><?= $adoption['breed'] ?></td>
                  <td><?= $adoption['type'] ?></td>
                  <td><?= $adoption['age'] ?></td>
                  <td><?= $adoption['vet_name'] ?></td>
                  <td><?= $adoption['health_description'] ?></td>
                  <td class="col-center">
                    <a
                      onclick="return confirm('Voulez-vous vraiment supprimer l\'animal « <?= $adoption['name'] ?> » ?')"
                      href="?action=delete_adoption&id=<?= $adoption['id'] ?>"
                    >
                      ❌
                    </a>
                  </td>
                </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </main>
  </body>
</html>