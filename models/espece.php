<?php

class espModel {
  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $query = $this->db->query('SELECT id, espece AS espece FROM espece');
    return $query->fetchAll();
  }
}

?>