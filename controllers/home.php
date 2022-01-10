<?php

include_once(__DIR__ . '/../controller.php');

class HomeController extends Controller {
  function handle(&$session, $get) {
    $username = $session['username'];
    
    include(__DIR__ . '/../views/home.php');
  }

  function isRestricted() {
    return true;
  }
}

?>