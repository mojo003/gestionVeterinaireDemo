<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/adoptions.php');
include_once(__DIR__ . '/../models/animals.php');


class AddAdoptionController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    if (isset($get['id'])) {
      $adoptionID = $get['id'];

      $model = new adoptModel($this->db);
      $model->insert($adoptionID);
      $model->deleteAnimal($adoptionID);
    }

    include(__DIR__ . '/../views/adoption_confirmation.php');
    
  }
  
  function isRestricted() {
    return false;
  }
}

?>