<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/animals.php');

class DeleteAdoptionController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    if (isset($get['id'])) {
      $adoptionlID = $get['id'];

      $model = new adoptModel($this->db);
      $model->delete($adoptionlID);
    }
    
    include(__DIR__ . '/../views/delete_adoption_confirmation.php');
  }
  
  function isRestricted() {
    return false;
  }
}

?>