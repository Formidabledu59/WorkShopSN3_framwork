<?php
namespace App\Models;

use CodeIgniter\Model;

class MeetModel extends Model {
    protected $table = 'meet';
    protected $primaryKey = 'id_match';
    protected $returnType = 'array';

    public function createMeet($id_etudiant_1, $id_etudiant_2, $statut) {
        // Préparation de la requête SQL
        $sql = "INSERT INTO {$this->table} (id_etudiant_1, id_etudiant_2, statut) 
                VALUES ($id_etudiant_1, $id_etudiant_2, '$statut')";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }

    public function getMeet($id) {
        // Préparation de la requête SQL
        $sql = "SELECT * FROM {$this->table} WHERE id_match = $id";

        // Exécution de la requête SQL
        $query = $this->db->query($sql);
        return $query->getRowArray(); // Retourne un tableau associatif
    }

    public function updateMeet($id, $id_etudiant_1, $id_etudiant_2, $statut) {
        // Préparation de la requête SQL
        $sql = "UPDATE {$this->table} SET id_etudiant_1 = $id_etudiant_1, id_etudiant_2 = $id_etudiant_2, statut = '$statut' 
                WHERE id_match = $id";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }

    public function deleteMeet($id) {
        // Préparation de la requête SQL
        $sql = "DELETE FROM {$this->table} WHERE id_match = $id";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }
}
