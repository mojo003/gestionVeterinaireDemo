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



/*
  On a ajouté une méthode "isRestricted" aux contrôleurs.
  Si elle retourne true, la page correspondante n'est accessible
  qu'aux utilisateurs authentifiés.
*/

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
  case 'home':
    default:
    $controller = new HomeController($db);
}

/*
  Si la page n'est accessible qu'aux utilisateurs authentifiés
  et que l'utilisateur ne l'est pas, remplacer $controller
  par le contrôleur de login.
*/
if ($controller->isRestricted() && !isset($_SESSION['username'])) {
  $controller = new LoginController($db);
}

if (!empty($_POST)) {
  $controller->handlePost($_SESSION, $_GET, $_POST);
} else {
  $controller->handle($_SESSION, $_GET);
}



?>