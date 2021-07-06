<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/animal.php');
include_once(__DIR__ . '/../models/veterinaire.php');
include_once(__DIR__ . '/../models/espece.php');

class EditController extends Controller {
  /*
    La méthode handle affiche le formulaire de sélection de la partie à modifier si celle-ci n'a pas été sélectionnée,
    puis affiche le formulaire de modification une fois que le premier formulaire est soumis.

    La méthode handlePost traite les données du formulaire de modification une fois que celui-ci est soumis.
  */
  
  function handle(&$session, $get) {
    $username = $session['username'];

    if (isset($get['id'])) {
      $model = new aniModel($this->db);
      $animal = $model->get($get['id']);    

      $vetModel = new vetModel($this->db);
      $veterinaires = $vetModel->getAll();
  
      $espModel = new espModel($this->db);
      $especes = $espModel->getAll();

      include(__DIR__ .'/../views/edit_form.php');
    } else {
      $model = new aniModel($this->db);
      $animals = $model->getAll();

      include(__DIR__ . '/../views/edit_select_animal.php');
    }
  }

  function handlePost(&$session, $get, $post) {
    $animalID = $get['id'];
    
    
    
    $name = trim($post['nom']);
    $vetname = trim($post['master_name']);
    $masterfirstname = trim($post['master_first_name']);
    $mastername= trim($post['master_tel_num']);
    $vetname = trim($post['vet_name']);
    $description = trim($post['description_sante']);

    if (empty($name) || empty($vetname) || empty($masterfirstname) || empty($mastername) || empty($vetname) || empty($description )) {
      exit('Data is not complete');
    }

    $age = trim($post['age']);

    if ($age < 0) {
      exit('The age is not correct');
    }

    if(
      !isset($post['type'])
      || !isset($post['espece'])
      || !isset($post['age'])
      || !isset($post['adresse'])
      || !isset($post['ville'])
    ){
      exit('Invalid data received');
    }



    $model = new aniModel($this->db);
    $model->update($animalID, $post['nom'], $post['type'], $post['espece'], $post['age'], $post['master_name'], $post['master_first_name'],  $post['master_tel_num'], $post['adresse'], $post['ville'], $post['vet_name'], $post['description_sante']);


    include(__DIR__ . '/../views/edit_confirmation.php');
  }

  function isRestricted() {
    return true;
  }

}

?>