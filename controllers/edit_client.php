<?php

include_once(__DIR__ . '/../controller.php');
include_once(__DIR__ . '/../models/clients.php');


class EditClientController extends Controller {

  
  function handle(&$session, $get) {
    $username = $session['username'];

    if (isset($get['id'])) {
      $model = new clientModel($this->db);
      $clients = $model->getClientId($get['id']);    

 

      include(__DIR__ .'/../views/edit_form_client.php');
    } else {
      $model = new clientModel($this->db);
      $clients = $model->getAllClient();
      
      include(__DIR__ . '/../views/list_client.php');
    }
  }

  function handlePost(&$session, $get, $post) {
    $id = $get['id'];
    
    
    
    $lastName = trim($post['name']);
    $firstName = trim($post['first_name']);
    $phoneNumber = trim($post['phone_number']);
    $adresse= trim($post['address']);
    $city = trim($post['city']);

    if (empty($lastName) || empty($firstName) || empty($phoneNumber) || empty($adresse) || empty($city)) {
      exit('Le formulaire n\'est pas complet');
    }

    if(
      !isset($post['name'])
      || !isset($post['first_name'])
      || !isset($post['phone_number'])
      || !isset($post['address'])
      || !isset($post['city'])
    ){
      exit('Les données sont invalides');
    }


    $model = new clientModel($this->db);
    $model->update($id, $post['name'], $post['first_name'], $post['phone_number'], $post['address'], $post['city']);


    include(__DIR__ . '/../views/edit_client_confirmation.php');
  }

  function isRestricted() {
    return true;
  }

}

?>

