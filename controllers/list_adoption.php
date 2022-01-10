<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/adoptions.php');


class ListAdoptionController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];

    $model = new adoptModel($this->db);
    $adoptions = $model->getAll();
    
    include(__DIR__ . '/../views/list_adoption.php');
  }

  function isRestricted() {
    return true;
  }
}

?>