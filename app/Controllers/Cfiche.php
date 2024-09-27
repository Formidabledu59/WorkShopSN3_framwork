<?php

namespace App\Controllers;

use App\Models\Metudiant;
use CodeIgniter\Controller;

class Cfiche extends BaseController
{

    protected $session;

    public function __construct()
    {
        // Initialisation de la session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!isset($_SESSION['id_etudiant'])) {
            // Redirection vers la page d'accueil si non autorisé
            return redirect()->to('Caccueil');
        }

        // Charger le modèle
        $etudiantModel = new Metudiant();

        $id = $_SESSION['id_etudiant'];

        $data['result'] = $etudiantModel->getEtudiant($id);


        $page['contenu'] = view('v_fiche', $data);
        $page['css'] = 'css/profil.css';
        return view('Commun/v_template', $page);
    }

    public function ModifieFiche()
    {
        if (!isset($_SESSION['id_etudiant'])) {
            // Redirection vers la page d'accueil si non autorisé
            return redirect()->to('Caccueil');
        }

        // Charger le modèle
        $etudiantModel = new Metudiant();

        $id = $_SESSION['id_etudiant'];

        $data['result'] = $etudiantModel->getEtudiant($id);

        $page['contenu'] = view('v_fiche_update', $data);
        $page['css'] = 'css/profil.css';
        return view('Commun/v_template', $page);
    }

    public function ficheUpdate()
    {
        // Charger le modèle
        $etudiantModel = new Metudiant();

        // Récupérer les données envoyées depuis la vue
        $data = [
            'id' => $_SESSION['id_etudiant'],
            'birth_day' => $this->request->getPost('birth_day'),
            'pass' => $this->request->getPost('pass'),
            'num' => $this->request->getPost('num'),
            'adresse' => $this->request->getPost('adresse'),
            'domaine' => $this->request->getPost('domaine'),

            'git' => $this->request->getPost('git'),
            'instagram' => $this->request->getPost('instagram'),
            'discord' => $this->request->getPost('discord'),
            'linkedin' => $this->request->getPost('linkedin'),

            'interets_1' => $this->request->getPost('interets_1'),
            'interets_2' => $this->request->getPost('interets_2'),
            'interets_3' => $this->request->getPost('interets_3'),
            'interets_4' => $this->request->getPost('interets_4')
        ];

        // Appeler la méthode de mise à jour du modèle
        $updateSuccess = $etudiantModel->updateEtudiant($data);

        if ($updateSuccess) {
            // Redirigez ou affichez un message de succès
            return redirect()->to('Cfiche');  // Remplacez par le chemin vers votre vue
        } else {
            // Gérer l'échec de la mise à jour
            return redirect()->to('Cfiche/ficheUpdate');  // Remplacez par le chemin vers votre vue
        }
    }

    public function bioUpdate()
    {
        // Charger le modèle
        $etudiantModel = new Metudiant();

        // Récupérer les données envoyées depuis la vue
        $data = [
            'id' => $_SESSION['id_etudiant'],
            'bio' => $this->request->getPost('bio')
        ];

        // Appeler la méthode de mise à jour du modèle
        $updateSuccess = $etudiantModel->updateBioEtudiant($data);

        if ($updateSuccess) {
            // Redirigez ou affichez un message de succès
            return redirect()->to('Cfiche');  // Remplacez par le chemin vers votre vue
        } else {
            // Gérer l'échec de la mise à jour
            return redirect()->to('Cfiche/ficheUpdate');  // Remplacez par le chemin vers votre vue
        }
    }
    public function ppUpdate()
    {
        // Charger le modèle
        $etudiantModel = new Metudiant();

        // Récupérer les données envoyées depuis la vue
        $data = [
            'id' => $_SESSION['id_etudiant'],
            'photo_profil' => $this->request->getPost('pp')
        ];

        // Appeler la méthode de mise à jour du modèle
        $updateSuccess = $etudiantModel->updatePPEtudiant($data);

        if ($updateSuccess) {
            // Redirigez ou affichez un message de succès
            return redirect()->to('Cfiche');  // Remplacez par le chemin vers votre vue
        } else {
            // Gérer l'échec de la mise à jour
            return redirect()->to('Cfiche/ficheUpdate');  // Remplacez par le chemin vers votre vue
        }
    }
}
