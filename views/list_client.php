<!DOCTYPE html>
<html>
  <head>
    <title>Liste des animaux</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <main>
      <?php include(__DIR__ . '/header.php') ?>
      <h1>Liste des clients</h1>

      <p>
      <a href="?action=add_client" class="button">Ajouter un client <i class='fas fa-user-plus'></i> </a>
      </p>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Numéro de téléphone</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($clients as $client) {
              ?>
                <tr class="data_line">
                  <td>
                    <?= $client['full_name'] ?></td>
                  <td>
                    <?= $client['phone_number'] ?></td>
                  <td>
                    <?= $client['address'] ?></td>
                  <td>
                  <?= $client['city'] ?></td>
                  <td class="col-center">
                    <a href="?action=edit_client&id=<?= $client['id'] ?>">
                      ✏️
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