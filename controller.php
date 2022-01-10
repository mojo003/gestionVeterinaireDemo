<?php

abstract class Controller {
  protected $db; 

  function __construct($db) {
    $this->db = $db;
  }
  
  abstract function handle(&$session, $get);

  function handlePost(&$session, $get, $post) {}

  abstract function isRestricted();
}

?>