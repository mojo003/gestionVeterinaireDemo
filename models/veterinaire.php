<?php

class vetModel {
  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $query = $this->db->query('SELECT id, nom, prenom AS name FROM vétérinaire');
    return $query->fetchAll();
  }
}

?>