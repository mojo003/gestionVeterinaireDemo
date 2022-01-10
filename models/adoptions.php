<?php

class adoptModel {
  private $db;
  
  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $response = $this->db->query(
      'SELECT a.id,
          a.name,
          a.breed,
          b.type,
          a.age,
          v.name || \' \' || v.first_name  AS vet_name,
          a.health_description
      FROM adoptions a
      JOIN veterinarians v ON v.id = a.id_vet
      JOIN types b ON b.id = a.id_type

      ORDER BY a.name;
    ');
    return $response->fetchAll();
  }

  function insert($id) {
    $query = $this->db->prepare('INSERT INTO adoptions(name, breed, id_type, age, id_vet, health_description) SELECT name, breed, id_type, age, id_vet, health_description FROM animals WHERE id = ?');  
    $query->execute([ $id ]);
  }

  function deleteAnimal($id) {
    $query = $this->db->prepare('DELETE FROM animals WHERE id = ?');
    $query->execute([ $id ]);
  }

  function delete($id) {
    $query = $this->db->prepare('DELETE FROM adoptions WHERE id = ?');
    $query->execute([ $id ]);
  }

}

?>