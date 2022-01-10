<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= $animal['name'] ?>
    </title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list">Liste des animaux</a>
      &nbsp;/&nbsp;
      <?= $animal['name'] ?>
    </p>
    <h1><?= $animal['name'] ?></h1>   
    
    <p>
      <a href="?action=edit&id=<?= $id ?>">
        ✏️
      </a>
      &nbsp;
      <a
        onclick="return confirm('Voulez-vous vraiment supprimer cet animal « <?= $animal['name'] ?> » ?')"
        href="?action=delete&id=<?= $id ?>"
      >
        ❌
      </a>
      &nbsp;
      <?php if($animal['type']=="Chien") : ?>
          <a
          onclick="return confirm('Voulez-vous mettre l\'animal « <?= $animal['name'] ?> » en adoption  ?')"
          href="?action=add_adoption&id=<?= $id ?>">
            🐶
          </a>
        <?php else : ?>
          <a
          onclick="return confirm('Voulez-vous mettre l\'animal « <?= $animal['name'] ?> » en adoption  ?')"
          href="?action=add_adoption&id=<?= $id ?>">
            🐱
          </a>
        <?php endif; ?>
    </p>

    <main>
      <p>
        <strong>Race: </strong>
        <?= $animal['breed'] ?>
      </p>
      <p>
        <strong>Type: </strong>
        <?= $animal['type'] ?>
      </p>
      <p>
        <strong>Âge: </strong>
        <?= $animal['age'] ?>
      </p>
      <p>
        <strong>Nom du veterinaire: </strong>
        <?= $animal['vet_name'] ?>
      </p> 
      <p>
        <strong>Nom du client: </strong>
        <?= $animal['client_name'] ?>
      </p> 
      <p>
        <strong>Description santé: </strong>
        <?= $animal['health_description'] ?>
      </p>   
    
    </main>
  </body>
</html>

