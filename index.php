<?php

include_once('db.php');
include_once('./controllers/login.php');
include_once('controllers/display.php');
include_once('./controllers/connected.php');
include_once('./controllers/logout.php');
include_once('./controllers/users_info.php');
include_once('./controllers/register.php');

session_start();

include_once('controllers/home.php');
include_once('controllers/list.php');
include_once('controllers/add.php');
include_once('controllers/edit.php');
include_once('controllers/delete.php');
include_once('controllers/add_adoption.php');
include_once('controllers/list_adoption.php');
include_once('controllers/delete_adoption.php');
include_once('controllers/display_client.php');
include_once('controllers/add_client.php');
include_once('controllers/edit_client.php');
include_once('controllers/list_client.php');



$action = 'home';
if (isset($_GET['action'])) {
  $action = $_GET['action'];
}

$controller;
switch ($action) {
  case 'connected':
    $controller = new ConnectedController($db);
    break;
  case 'login':
    $controller = new LoginController($db);
    break;
  case 'user_info':
    $controller = new UserInfoController($db);
    break;
  case 'logout':
    $controller = new LogoutController($db);
    break;
  case 'register':
    $controller = new RegisterController($db);
    break;
  case 'list':
      $controller = new ListController($db);
    break;
  case 'display':
    $controller = new DisplayController($db);
    break;
  case 'add':
    $controller = new AddController($db);
    break;
  case 'edit':
    $controller = new EditController($db);
    break;
  case 'delete':
    $controller = new DeleteController($db);
    break;
  case 'add_adoption':
    $controller = new AddAdoptionController($db);
    break;
  case 'list_adoption':
    $controller = new ListAdoptionController($db);
    break;
  case 'delete_adoption':
    $controller = new DeleteAdoptionController($db);
    break;
  case 'add_client':
    $controller = new AddClientController($db);
    break;
  case 'display_client':
    $controller = new DisplayClientController($db);
    break;    
  case 'edit_client':
    $controller = new EditClientController($db);
    break;
  case 'list_client':
    $controller = new ListClientController($db);
    break;
  case 'home':
    default:
    $controller = new HomeController($db);
}




if ($controller->isRestricted() && !isset($_SESSION['username'])) {
  $controller = new LoginController($db);
}

if (!empty($_POST)) {
  $controller->handlePost($_SESSION, $_GET, $_POST);
} else {
  $controller->handle($_SESSION, $_GET);
}



?>