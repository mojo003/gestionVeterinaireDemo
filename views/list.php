<!DOCTYPE html>
<html>
  <head>
    <title>Liste des animaux</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animaux.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <main>
      <?php include(__DIR__ . '/header.php') ?>
      <h1>Liste des animaux</h1>

      <p>
      <a href="?action=add" class="button">Ajouter un animal <i class='fas fa-cat'></i> </a>
      </p>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Espèce</th>
            <th>Âge</th>
            <th>Nom de mâtre</th>
            <th>Téléphone de mâtre</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Nom de vétérinaire</th>
            <th>Description santé</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($animals as $animal) {
              ?>
                <tr class="ligne-donnees">
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['nom'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['type'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['espece'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['age'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                  <?= $animal['master_name'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['master_tel_num'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['adresse'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['ville'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['vet_name'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['description_sante'] ?></td>
                  <td class="col-actions">
                    <a href="?action=edit&id=<?= $animal['id'] ?>">
                      ✏️
                    </a>
                    &nbsp;
                    <a
                      onclick="return confirm('Voulez-vous vraiment supprimer l\'animal « <?= $animal['nom'] ?> » ?')"
                      href="?action=delete&id=<?= $animal['id'] ?>"
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