<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/clients.php');

class ListClientController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    $model = new clientModel($this->db);
    $clients = $model->getAllClient();
    
    include(__DIR__ . '/../views/list_client.php');
  }

  function isRestricted() {
    return true;
  }
}

?>