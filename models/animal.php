<?php

class aniModel  {
  private $db;
  
  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $response = $this->db->query('
          SELECT a.id,
          a.nom,
          a.type,
          e.espece,
          a.age,
          a.nom_maitre || \' \' || a.prenom_maitre AS master_name,
          a.num_tel_maitre AS master_tel_num,
          a.adresse,
          a.ville,
          v.nom || \' \' || v.prenom  AS vet_name,
          a.description_sante
      FROM animaux a
      JOIN vétérinaire v ON v.id = a.id_vet
      JOIN espece e ON e.id = a.id_espece

      ORDER BY a.nom;
    ');
    return $response->fetchAll();
  }

  function get($id) {
    $query = $this->db->prepare('
          SELECT a.id,
          a.nom,
          a.type,
          e.espece,
          a.age,
          a.nom_maitre AS master_name,
          a.prenom_maitre AS master_first_name,
          a.num_tel_maitre AS master_tel_num,
          a.adresse,
          a.ville,
          v.nom AS vet_name,
          a.description_sante
      FROM animaux a
      JOIN vétérinaire v ON v.id = a.id_vet
      JOIN espece e ON e.id = a.id_espece
      WHERE a.id = ?
    ');
    $query->execute([ $id ]);
    return $query->fetch();
  }

  function insert($name, $type, $species, $age, $master_name, $master_first_name, $phone_number, $adress, $ville, $id_vet, $description) {
    $query = $this->db->prepare('INSERT INTO animaux(nom, type, id_espece, age, nom_maitre, prenom_maitre, num_tel_maitre, adresse, ville, id_vet, description_sante) 
                                              VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $query->execute([ $name, $type, $species, $age, $master_name, $master_first_name, $phone_number, $adress, $ville, $id_vet, $description ]);
  }


  function update($id, $name, $type, $species, $age, $master_name, $master_first_name, $phone_number, $adress, $ville, $id_vet, $description) {
    $query = $this->db->prepare('UPDATE animaux SET nom = ?, type = ?, id_espece = ?, age = ?, nom_maitre = ?, prenom_maitre = ?, num_tel_maitre = ?, adresse = ?, ville = ?, id_vet = ?, description_sante = ? WHERE id = ?');
    $query->execute([ $name, $type, $species, $age, $master_name, $master_first_name, $phone_number, $adress, $ville, $id_vet, $description, $id ]);
  }


  function delete($id) {
    $query = $this->db->prepare('DELETE FROM animaux WHERE id = ?');
    $query->execute([ $id ]);
  }
}

?>