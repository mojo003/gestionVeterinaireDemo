<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/types.php');
include_once(__DIR__ . '/../models/clients.php');


class AddClientController extends Controller  {

  function handle(&$session, $get) {
    $username = $session['username'];


    include(__DIR__ . '/../views/add_client.php');
  }

  function handlePost(&$session, $get, $post) {
    if (
      !isset($post['name'])
      || !isset($post['first_name'])
      || !isset($post['phone_number'])
      || !isset($post['address'])
      || !isset($post['city'])
    ) {
      exit('Les données sont invalides');
    }
    $lastName = trim($post['name']);
    $firstName = trim($post['first_name']);
    $master_tel_num = trim($_POST['phone_number']);
    $adresse = trim($_POST['address']);
    $city = trim($_POST['city']);

    if (empty($lastName) || empty($firstName) || empty($master_tel_num) || empty($adresse) || empty($city)) {
      exit('Le formulaire n\'est pas complet');
    }

    $model = new clientModel($this->db);
    $id = $model->insert($lastName, $firstName, $master_tel_num, $adresse, $city);
 
    header("Location: ?action=display_client&id=$id");
  }
  function isRestricted() {
    return true;
  }
}

?>