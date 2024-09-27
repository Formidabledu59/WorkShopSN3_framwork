<?php

namespace App\Models;

use CodeIgniter\Model;

class Metudiant extends Model
{
    protected $table = 'etudiant';
    protected $primaryKey = 'id_etudiant';
    protected $returnType = 'array';

    // public function createEtudiant($nom, $prenom, $mail, $pass, $age, $photo_profil, $bio, $domaine, $data['interets_1'], $facebook, $instagram, $linkedin, $github)
    // {
    //     // Préparation de la requête SQL
    //     $sql = "INSERT INTO {$this->table} (nom, prenom, mail, pass, age, photo_profil, bio, domaine, interets, facebook, instagram, linkedin, github) 
    //             VALUES ('$nom', '$prenom', '$mail', '$pass', $age, '$photo_profil', '$bio', '$domaine', '$data['interets_1']', '$facebook', '$instagram', '$linkedin', '$github')";

    //     // Exécution de la requête SQL
    //     $result = $this->db->query($sql);
    //     return $result ? true : false;
    // }

    public function createEtudiant($data)
    {
        // Extraction du nom et du prénom à partir de l'email
        $email = $data['mail'];
        list($user, $domain) = explode('@', $email);

        // Vérifier si le domaine est valide (EPSI ou WIS)
        if (!in_array($domain, ['ecoles-epsi.net', 'ecoles-wis.net'])) {
            // Annuler la création si le domaine n'est pas valide
            return false;
        }

        list($prenom, $nom) = explode('.', $user);

        // Vérification si l'extraction du prénom et du nom est correcte
        if (empty($prenom) || empty($nom)) {
            // Annuler la création si l'extraction du prénom ou du nom échoue
            return false;
        }

        // Formater le prénom avec la première lettre en majuscule et le nom en majuscules
        $prenom = ucfirst(strtolower($prenom));
        $nom = strtoupper($nom);

        // Extraction du groupe entre "ecloes-" et ".net"
        preg_match('/ecoles-(.*).net/', $email, $matches);
        $groupe = $matches[1] ?? null;

        // Vérification si le groupe a bien été extrait
        if (is_null($groupe)) {
            // Annuler la création si le groupe ne peut pas être trouvé
            return false;
        }

        // Mise à jour de la requête SQL pour inclure nom, prenom et groupe
        $sql = "INSERT INTO {$this->table} (mail, pass, nom, prenom, user) VALUES (:mail:, :pass:, :nom:, :prenom:, :user:)";

        // Exécution de la requête avec les nouvelles données
        $result = $this->db->query($sql, [
            'mail'   => $data['mail'],
            'pass'   => $data['pass'],
            'nom'    => $nom,
            'prenom' => $prenom,
            'user' => $user
        ]);

        return $result;
    }

    public function getEtudiant($id)
    {
        // Préparation de la requête SQL
        $sql = "SELECT * FROM {$this->table} WHERE id_etudiant = $id";

        // Exécution de la requête SQL
        $query = $this->db->query($sql);
        return $query->getRowArray(); // Retourne un tableau associatif
    }

    public function getAllEtudiantFiltre($nom_prenom = null, $ecole = null, $annee = null)
    {
        // Initialisation de la clause WHERE
        $conditions = [];

        // Vérification des paramètres et construction de la clause WHERE
        if (!empty($nom_prenom)) {
            // Recherche par nom ou prénom
            $conditions[] = "(nom LIKE '%" . $this->db->escapeLikeString($nom_prenom) . "%' OR prenom LIKE '%" . $this->db->escapeLikeString($nom_prenom) . "%')";
        }

        if (!empty($ecole)) {
            // Filtrage par école
            if ($ecole === 'EPSI') {
                $conditions[] = "mail LIKE '%ecoles-epsi.net'";
            } elseif ($ecole === 'WIS') {
                $conditions[] = "mail LIKE '%ecoles-wis.net'";
            }
        }

        if (!empty($annee)) {
            // Filtrage par année de naissance
            switch ($annee) {
                case 'before_2000':
                    $conditions[] = "YEAR(birth_day) < 2000";
                    break;
                case '2000':
                    $conditions[] = "YEAR(birth_day) = 2000";
                    break;
                case '2001':
                    $conditions[] = "YEAR(birth_day) = 2001";
                    break;
                case '2002':
                    $conditions[] = "YEAR(birth_day) = 2002";
                    break;
                case '2003':
                    $conditions[] = "YEAR(birth_day) = 2003";
                    break;
                case '2004':
                    $conditions[] = "YEAR(birth_day) = 2004";
                    break;
                case 'after_2005':
                    $conditions[] = "YEAR(birth_day) > 2005";
                    break;
            }
        }

        // Construction de la requête SQL
        $sql = "SELECT * FROM etudiant";

        // Si des conditions sont présentes, les ajouter à la requête
        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(' AND ', $conditions);
        }

        // Exécution de la requête SQL
        $query = $this->db->query($sql);
        return $query->getResultArray(); // Retourne un tableau associatif de tous les résultats
    }




    public function getAllEtudiant()
    {
        // Préparation de la requête SQL
        $sql = "SELECT * FROM {$this->table}";

        // Exécution de la requête SQL
        $query = $this->db->query($sql);

        // Retourne toutes les lignes sous forme d'un tableau associatif
        return $query->getResultArray();
    }

    public function updateEtudiant($data)
    {
        // Préparation de la requête SQL sans les deux points autour des paramètres
        $sql = "UPDATE {$this->table} 
                    SET birth_day = ?, pass = ?, num = ?, adresse = ?, domaine = ?,
                    git = ?, instagram = ?, discord = ?, linkedin = ?,
                    interets_1 = ?, interets_2 = ?, interets_3 = ?, interets_4 = ?
                    WHERE id_etudiant = ?";

        // Exécution de la requête avec les données
        $result = $this->db->query($sql, [
            $data['birth_day'],
            $data['pass'],
            $data['num'],
            $data['adresse'],
            $data['domaine'],
            $data['git'],
            $data['instagram'],
            $data['discord'],
            $data['linkedin'],
            $data['interets_1'],
            $data['interets_2'],
            $data['interets_3'],
            $data['interets_4'],
            $data['id'] // L'ID en dernier, pour la condition WHERE
        ]);

        return $result ? true : false;
    }

    public function updateBioEtudiant($data)
    {
        // Préparation de la requête SQL sans les deux points autour des paramètres
        $sql = "UPDATE {$this->table} 
                    SET bio = ?
                    WHERE id_etudiant = ?";

        // Exécution de la requête avec les données
        $result = $this->db->query($sql, [
            $data['bio'],
            $data['id'] // L'ID en dernier, pour la condition WHERE
        ]);

        return $result ? true : false;
    }

    public function updatePPEtudiant($data)
    {
        // Préparation de la requête SQL sans les deux points autour des paramètres
        $sql = "UPDATE {$this->table} 
                    SET photo_profil = ?
                    WHERE id_etudiant = ?";

        // Exécution de la requête avec les données
        $result = $this->db->query($sql, [
            $data['photo_profil'],
            $data['id'] // L'ID en dernier, pour la condition WHERE
        ]);

        return $result ? true : false;
    }

    // public function updateEtudiant($data)
    // {
    //     // Préparation de la requête SQL avec des paramètres nommés
    //     $sql = "UPDATE {$this->table} 
    //                 SET birth_day = :birth_day:, pass = :pass:, num = :num:, adresse = :adresse:, domaine = :domaine:,
    //                 git = :git:, instagram = :instagram:, discord = :discord:, linkedin = :linkedin:,
    //                 interets_1 = :interets_1:, interets_2 = :interets_2:, interets_3 = :interets_3:, interets_4 = :interets_4:
    //                 WHERE id_etudiant = :id:";


    //     // Exécution de la requête avec les données
    //     $result = $this->db->query($sql, [
    //     // Lier les paramètres
    //     'id'=> $data['id'],
    //     'birth_day'=> $data['birth_day'],
    //     'pass'=> $data['pass'],
    //     'num'=> $data['num'],
    //     'adresse'=> $data['adresse'],
    //     'domaine'=> $data['domaine'],
    //     'git'=> $data['git'],
    //     'instagram'=> $data['instagram'],
    //     'discord'=> $data['discord'],
    //     'linkedin'=> $data['linkedin'],
    //     'interets'=> $data['interets_1'],
    //     'interets'=> $data['interets_2'],
    //     'interets'=> $data['interets_3'],
    //     'interets'=> $data['interets_4'],
    //     ]);
    //     return $result ? true : false;

    // }


    public function deleteEtudiant($id)
    {
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
        $user = $this->where('mail', $login)->orWhere('user', $login)->first();

        // Si l'utilisateur existe, vérifier le mot de passe
        if ($user) {
            return $user; // Retourne l'utilisateur s'il existe
        }

        return null; // Retourne null si l'utilisateur n'existe pas
    }
}
