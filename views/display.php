<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= $animal['nom'] ?>
    </title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animaux.css" />
  </head>
  <body>
    <?php include(__DIR__ . '/header.php') ?>
    <p>
      <a href="?action=list">Liste des animaux</a>
      &nbsp;/&nbsp;
      <?= $animal['nom'] ?>
    </p>
    <h1><?= $animal['nom'] ?></h1>   
    
    <p>
      <a href="?action=edit&id=<?= $id ?>">
        ✏️
      </a>
      &nbsp;
      <a
        onclick="return confirm('Voulez-vous vraiment supprimer cet animal « <?= $animal['nom'] ?> » ?')"
        href="?action=delete&id=<?= $id ?>"
      >
        ❌
      </a>
    </p>

    <main>
    <p>
        <strong>Type: </strong>
        <?= $animal['type'] ?>
      </p>
      <p>
        <strong>Espèce: </strong>
        <?= $animal['espece'] ?>
      </p>
      <p>
        <strong>Âge: </strong>
        <?= $animal['age'] ?>
      </p>
      <p>
        <strong>Nom de mâtre: </strong>
        <?= $animal['master_name'] ?>
      </p>
      <p>
        <strong>Prénom de mâtre: </strong>
        <?= $animal['master_first_name'] ?>
      </p>
      <p>
        <strong>Téléphone: </strong>
        <?= $animal['master_tel_num'] ?>
      </p> 
      <p>
        <strong>Adresse: </strong>
        <?= $animal['adresse'] ?>
      </p>          
      <p>
        <strong>Ville: </strong>
        <?= $animal['ville'] ?>
      </p> 
      <p>
        <strong>Nom du veterinaire: </strong>
        <?= $animal['vet_name'] ?>
      </p> 
      <p>
        <strong>Description santé: </strong>
        <?= $animal['description_sante'] ?>
      </p>   
    
    </main>
  </body>
</html>

