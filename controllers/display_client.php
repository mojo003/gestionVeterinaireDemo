
<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/clients.php');

class DisplayClientController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];
    if (!isset($get['id'])) {
      throw new Exception('Parameter `id` is missing.');
    }
    $id = intval($get['id']);

    $model = new clientModel($this->db);
    $client = $model->getClient($id);

    include(__DIR__ . '/../views/display_client.php');
  }
  function isRestricted() {
    return true;
  }
}

?>