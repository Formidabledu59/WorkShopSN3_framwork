<?php

namespace App\Models;

use CodeIgniter\Model;

class Metudiant extends Model {
    protected $table = 'etudiant';
    protected $primaryKey = 'id_etudiant';
    protected $returnType = 'array';

    public function createEtudiant($nom, $prenom, $mail, $pass, $age, $photo_profil, $bio, $domaine, $interets, $facebook, $instagram, $linkedin, $github) {
        // Préparation de la requête SQL
        $sql = "INSERT INTO {$this->table} (nom, prenom, mail, pass, age, photo_profil, bio, domaine, interets, facebook, instagram, linkedin, github) 
                VALUES ('$nom', '$prenom', '$mail', '$pass', $age, '$photo_profil', '$bio', '$domaine', '$interets', '$facebook', '$instagram', '$linkedin', '$github')";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }

    public function getEtudiant($id) {
        // Préparation de la requête SQL
        $sql = "SELECT * FROM {$this->table} WHERE id_etudiant = $id";

        // Exécution de la requête SQL
        $query = $this->db->query($sql);
        return $query->getRowArray(); // Retourne un tableau associatif
    }

    public function updateEtudiant($id, $nom, $prenom, $mail, $pass, $age, $photo_profil, $bio, $domaine, $interets, $facebook, $instagram, $linkedin, $github) {
        // Préparation de la requête SQL
        $sql = "UPDATE {$this->table} SET nom = '$nom', prenom = '$prenom', mail = '$mail', pass = '$pass', age = $age, 
                photo_profil = '$photo_profil', bio = '$bio', domaine = '$domaine', interets = '$interets', 
                facebook = '$facebook', instagram = '$instagram', linkedin = '$linkedin', github = '$github' 
                WHERE id_etudiant = $id";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }

    public function deleteEtudiant($id) {
        // Préparation de la requête SQL
        $sql = "DELETE FROM {$this->table} WHERE id_etudiant = $id";

        // Exécution de la requête SQL
        $result = $this->db->query($sql);
        return $result ? true : false;
    }

    public function loginPersonne($dataLogin)
    {
        // Récupération du nom d'utilisateur ou de l'email
        $login = $dataLogin['login'];

        // Vérification si l'utilisateur existe
        $user = $this->where('mail', $login)->orWhere('login', $login)->first();

        // Si l'utilisateur existe, vérifier le mot de passe
        if ($user) {
            return $user; // Retourne l'utilisateur s'il existe
        }

        return null; // Retourne null si l'utilisateur n'existe pas
    }
}

