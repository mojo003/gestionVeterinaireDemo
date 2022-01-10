<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/animals.php');
include_once(__DIR__ . '/../models/veterinarians.php');
include_once(__DIR__ . '/../models/types.php');
include_once(__DIR__ . '/../models/clients.php');

class AddController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    $vetModel = new vetModel($this->db);
    $veterinarians = $vetModel->getAll();

    $typModel = new typModel($this->db);
    $types = $typModel->getAll();

    $cliModel = new clientModel($this->db);
    $clients = $cliModel->getAll();

    include(__DIR__ . '/../views/add.php');
  }

  function handlePost(&$session, $get, $post) {
    if (
      !isset($post['breed'])
      || !isset($post['health_description'])
    ) {
      exit ('Les données sont invalides');
    }

    $name = trim($post['name']);
    $type = trim($post['type']);
    $age = trim($post['age']);
    $vetName = trim($post['vet_name']);
    $clientName = trim($post['client_name']);


    if (empty($name) || empty($type) || empty($age) || empty($vetName) || empty($clientName)) {
      exit('Le formulaire n\'est pas complet');
    }

    if ($age < 1) {
      exit('L\'âge n\'est pas correct');
    }

    $model = new aniModel($this->db);
    $model->insert( $post['name'], $post['breed'], $post['type'], $post['age'], $post['vet_name'], $post['client_name'], $post['health_description']);


    include(__DIR__ . '/../views/add_confirmation.php');
  }

  function isRestricted() {
    return true;
  }
}

?>