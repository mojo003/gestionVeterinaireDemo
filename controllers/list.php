<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/animal.php');

class ListController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    $model = new aniModel($this->db);
    $animals = $model->getAll();
    
    include(__DIR__ . '/../views/list.php');
  }

  function isRestricted() {
    return true;
  }
}

?>