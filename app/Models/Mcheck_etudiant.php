<?php

namespace App\Models;

use CodeIgniter\Model;

class Mcheck_etudiant extends Model {
    protected $table = 'check_etudiant';
    protected $primaryKey = 'id_etudiant';
    protected $returnType = 'array';

    public function createCheckEtudiant($mail, $pass, $msg) {
        // Préparation de la requête SQL
        $sql = "INSERT INTO {$this->table} (mail, pass, msg) VALUES ('$mail', '$pass', '$msg')";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);

        // Vérification si l'insertion a réussi
        return $result ? true : false;
    }


    public function getAllCheckEtudiant() {
        // Préparation de la requête SQL
        $sql = "SELECT * FROM {$this->table}";
    
        // Exécution de la requête SQL
        $query = $this->db->query($sql);
    
        // Retourne toutes les lignes sous forme d'un tableau associatif
        return $query->getResultArray(); 
    }
    

    public function getCheckEtudiant($id) {
        // Préparation de la requête SQL
        $sql = "SELECT * FROM {$this->table} WHERE id_etudiant = $id";

        // Exécution de la requête SQL
        $query = $this->db->query($sql);
        return $query->getRowArray(); // Retourne un tableau associatif
    }

    public function updateCheckEtudiant($id, $mail, $pass, $msg) {
        // Préparation de la requête SQL
        $sql = "UPDATE {$this->table} SET mail = '$mail', pass = '$pass', msg = '$msg' WHERE id_etudiant = $id";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }

    public function deleteCheckEtudiant($id) {
        // Préparation de la requête SQL
        $sql = "DELETE FROM {$this->table} WHERE id_etudiant = $id";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }
}

