<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/animal.php');

class DeleteController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    if (isset($get['id'])) {
      $animalID = $get['id'];

      $model = new aniModel($this->db);
      $model->delete($animalID);
    }
    
    include(__DIR__ . '/../views/delete_confirmation.php');
  }
  
  function isRestricted() {
    return false;
  }
}

?>