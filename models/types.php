<?php

class typModel {
  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $query = $this->db->query('SELECT id, type FROM types');
    return $query->fetchAll();
  }
}

?>