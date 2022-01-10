<?php

class clientModel {
  private $db;
  
  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $query = $this->db->query('SELECT id, name, first_name FROM masters');
    return $query->fetchAll();
  }

  function getClient($idClient) {
    $query = $this->db->prepare('
    SELECT m.id,
           m.first_name || \' \' || m.name AS full_name,
           m.phone_number,
           m.address,
           m.city
    FROM masters m
    WHERE m.id = ?
    ');
    $query->execute(array($idClient));
    return $query->fetch();
  }

  function getAllClient() {
    $response = $this->db->query('
    SELECT m.id,
           m.first_name || \' \' || m.name AS full_name,
           m.phone_number,
           m.address,
           m.city
    FROM masters m
    ORDER BY full_name;
    ');
    return $response->fetchAll();
  }

  function getClientId($id) {
    $query = $this->db->prepare('
    SELECT m.id AS id,
           m.name, 
           m.first_name, 
           m.phone_number,
           m.address,
           m.city
    FROM masters m
    Where id = ?
    ');
    $query->execute([$id]);
    return $query->fetch();
  }

  function insert($lastName, $firstName, $master_tel_num, $adresse, $city) {
    $query = $this->db->prepare('INSERT INTO masters(name, first_name, phone_number, address, city) VALUES(?, ?, ?, ?, ?)  RETURNING id');
    $query->execute([ $lastName, $firstName, $master_tel_num, $adresse, $city ]);

    return $query->fetchColumn();
  }

  function update($id, $lastName, $firstName, $phoneNumber, $adresse, $city) {
    $query = $this->db->prepare('UPDATE masters SET name = ?, first_name = ?, phone_number = ?, address = ?, city = ? WHERE id = ?');
    $query->execute([ $lastName, $firstName, $phoneNumber, $adresse, $city, $id ]);
  }


}

?>