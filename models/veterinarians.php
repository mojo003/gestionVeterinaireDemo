<?php

class vetModel {
  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $query = $this->db->query('SELECT id, name, first_name FROM veterinarians');
    return $query->fetchAll();
  }
}

?>