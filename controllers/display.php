<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/animal.php');

class DisplayController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    if (!isset($get['id'])) {
      throw new Exception('Parameter `id` is missing.');
    }
    $id = intval($get['id']);

    $model = new aniModel($this->db);

    $animal = $model->get($id);

    include(__DIR__ . '/../views/display.php');
  }
  
  function isRestricted() {
    return false;
  }
}

?>