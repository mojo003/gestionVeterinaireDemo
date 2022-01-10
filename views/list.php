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
      <h1>Liste des animaux</h1>

      <p>
      <a href="?action=add" class="button">Ajouter un animal <i class='fas fa-cat '></i> </a>
      </p>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Race</th>
            <th>Type</th>
            <th>Âge</th>
            <th>Nom du vétérinaire</th>
            <th>Nom du maître</th>
            <th>Description santé</th>
            <th>Action</th>
            <th>Adoption</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($animals as $animal) {
              ?>
                <tr class="data_line" id="tr">
                
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['name'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['breed'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['type'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['age'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['vet_name'] ?></td>
                    <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['client_name'] ?></td>
                  <td onClick="window.location.href='?action=display&id=<?= $animal['id'] ?>'">
                    <?= $animal['health_description'] ?></td>
                  <td class="col-center">
                    <a href="?action=edit&id=<?= $animal['id'] ?>">
                      ✏️
                    </a>
                    &nbsp;
                    <a
                      onclick="return confirm('Voulez-vous vraiment supprimer l\'animal « <?= $animal['name'] ?> » ?')"
                      href="?action=delete&id=<?= $animal['id'] ?>"
                    >
                      ❌
                    </a>
                  </td>
                  <td class="col-center">
                    <?php if($animal['type']=="Chien") : ?>
                      <a
                        onclick="return confirm('Voulez-vous mettre l\'animal « <?= $animal['name'] ?> » en adoption  ?')"
                        href="?action=add_adoption&id=<?= $animal['id'] ?>">
                        🐶
                      </a>
                      <?php else : ?>
                      <a
                        onclick="return confirm('Voulez-vous mettre l\'animal « <?= $animal['name'] ?> » en adoption  ?')"
                        href="?action=add_adoption&id=<?= $animal['id'] ?>">
                        🐱
                      </a>
                    <?php endif; ?>
                  </td>
                  <?php
                 ?>                
                </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </main>
  </body>
</html>