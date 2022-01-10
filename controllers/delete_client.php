<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/clients.php');

class DeleteClientController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    if (isset($get['id'])) {
      $id = $get['id'];

      $model = new clientModel($this->db);
      $model->delete($id);
    }
    
    include(__DIR__ . '/../views/delete_client_confirmation.php');
  }
  
  function isRestricted() {
    return false;
  }
}

?>