<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/animals.php');
include_once(__DIR__ . '/../models/veterinarians.php');
include_once(__DIR__ . '/../models/types.php');
include_once(__DIR__ . '/../models/clients.php');

class EditController extends Controller {
  
  function handle(&$session, $get) {
    $username = $session['username'];

    if (isset($get['id'])) {
     
        $id = intval($get['id']);

        $model = new aniModel($this->db);
        $animal = $model->get($id);

        $vetModel = new vetModel($this->db);
        $veterinarians = $vetModel->getAll();
    
        $typModel = new typModel($this->db);
        $types = $typModel->getAll();

        $cliModel = new clientModel($this->db);
        $clients = $cliModel->getAll();

      include(__DIR__ .'/../views/edit_form.php');
    } else {
        $model = new aniModel($this->db);
        $animals = $model->getAll();
        include(__DIR__ . '/../views/edit_select_animal.php');
    }
  }
  
  function handlePost(&$session, $get, $post) {
    $animalID = $get['id'];
    
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
    $model->update($animalID, $post['name'], $post['breed'], $post['type'], $post['age'], $post['vet_name'], $post['client_name'], $post['health_description']);


    include(__DIR__ . '/../views/edit_confirmation.php');
  }

  function isRestricted() {
    return true;
  }

}

?>