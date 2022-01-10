<?php

class aniModel  {
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
          v.first_name || \' \' || v.name  AS vet_name,
          m.first_name || \' \' || m.name  AS client_name,
          a.health_description
      FROM animals a
      JOIN veterinarians v ON v.id = a.id_vet
      JOIN types b ON b.id = a.id_type
      JOIN masters m ON m.id = a.id_client 

      ORDER BY a.name;
    ');
    return $response->fetchAll();
  }

  function get($id) {
    $query = $this->db->prepare(
      'SELECT a.id,
          a.name,
          a.breed,
          a.id_type,
          b.type,
          a.age,
          a.id_vet,
          v.first_name || \' \' || v.name  AS vet_name,
          a.id_client,
          m.first_name || \' \' || m.name  AS client_name,
          a.health_description
      FROM animals a
      JOIN veterinarians v ON v.id = a.id_vet
      JOIN types b ON b.id = a.id_type
      JOIN masters m ON m.id = a.id_client 
      WHERE a.id = ?
    ');
    $query->execute(array($id));
    return $query->fetch();
  }

  function insert($name, $breed, $type, $age, $id_vet, $id_client, $description) {
    $query = $this->db->prepare('INSERT INTO animals(name, breed, id_type, age, id_vet, id_client, health_description) 
                                              VALUES(?, ?, ?, ?, ?, ?, ?)');
    $query->execute([ $name, $breed, $type, $age, $id_vet, $id_client, $description ]);
  }


  function update($id, $name, $breed, $type, $age, $id_vet, $id_client, $description) {
    $query = $this->db->prepare('UPDATE animals SET name = ?, breed = ?, id_type = ?, age = ?, id_vet = ?, id_client = ?, health_description = ? WHERE id = ?');
    $query->execute([ $name, $breed, $type, $age, $id_vet, $id_client, $description, $id ]);
  }


  function delete($id) {
    $query = $this->db->prepare('DELETE FROM animals WHERE id = ?');
    $query->execute([ $id ]);
  }
}

?>