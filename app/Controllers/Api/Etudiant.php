<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Mcheck_etudiant; // Utilise le modèle approprié pour CheckEtudiant
use App\Models\Metudiant; // Utilise le modèle pour Etudiant

class Etudiant extends ResourceController
{
    // DÃ©finition du nom du modÃ¨le Ã  utiliser
    protected $checkEtudiantModel;
    protected $etudiantModel;

    // DÃ©finition du format de rÃ©ponse par dÃ©faut
    protected $format = 'json';

    public function __construct()
    {
        $this->checkEtudiantModel = new Mcheck_etudiant();
        $this->etudiantModel = new Metudiant();
    }

    // Affiche tous les étudiants de la table check_etudiant
    public function index()
    {
        $etudiants = $this->checkEtudiantModel->getAllCheckEtudiant();
        return $this->respond($etudiants);
    }

    // Affiche un étudiant spécifique de la table etudiant
    public function show($prmId = null)
    {
        $etudiant = $this->etudiantModel->getEtudiant($prmId);
        
        if ($etudiant) {
            return $this->respond($etudiant);
        } else {
            return $this->failNotFound('Etudiant non trouvé');
        }
    }

    // Crée un nouvel étudiant dans la table check_etudiant
    public function create()
    {
        $data = $this->request->getPost(); // Récupère les données de la requête POST

        // Vérifie si les données nécessaires sont présentes
        if (!$this->validate([
            'mail' => 'required|valid_email',
            'pass' => 'required|min_length[6]',
        ])) {
            return $this->fail($this->validator->getErrors());
        }

        $created = $this->checkEtudiantModel->createCheckEtudiant($data['mail'], $data['pass'], $data['msg'] ?? null);

        if ($created) {
            return $this->respondCreated(['message' => 'Etudiant créé avec succès.']);
        } else {
            return $this->fail('Erreur lors de la création de l\'étudiant.');
        }
    }

    // Met à jour un étudiant dans la table etudiant
    public function update($prmId = null)
    {
        $data = $this->request->getRawInput();

        // Vérifie si les données nécessaires sont présentes
        if (!$this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required|valid_email',
            'pass' => 'required|min_length[6]',
        ])) {
            return $this->fail($this->validator->getErrors());
        }

        $updated = $this->etudiantModel->updateEtudiant($prmId, $data['nom'], $data['prenom'], $data['mail'], password_hash($data['pass'], PASSWORD_DEFAULT), $data['age'] ?? null, $data['photo_profil'] ?? null, $data['bio'] ?? null, $data['domaine'] ?? null, $data['interets'] ?? null, $data['facebook'] ?? null, $data['instagram'] ?? null, $data['linkedin'] ?? null, $data['github'] ?? null);

        if ($updated) {
            return $this->respond(['message' => 'Étudiant mis à jour avec succès.']);
        } else {
            return $this->fail('Erreur lors de la mise à jour de l\'étudiant.');
        }
    }

    // Supprime un étudiant de la table check_etudiant
    public function delete($prmId = null)
    {
        $deleted = $this->checkEtudiantModel->deleteCheckEtudiant($prmId);

        if ($deleted) {
            return $this->respond(['message' => 'Étudiant supprimé avec succès.']);
        } else {
            return $this->fail('Erreur lors de la suppression de l\'étudiant.');
        }
    }
}
