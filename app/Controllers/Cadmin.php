<?php

namespace App\Controllers;

use App\Models\Mcheck_etudiant;
use App\Models\Metudiant;
use CodeIgniter\Controller;
use CodeIgniter\Model;

class Cadmin extends Controller
{
    protected $session;

    public function __construct()
    {
        // Initialisation de la session
        $this->session = \Config\Services::session();
    }

    public function index()
    {

        // Liste des IDs autorisés
        $authorizedIds = [1, 2, 3, 4];

        // Vérifier si l'utilisateur est connecté et autorisé
        if (!isset($_SESSION['id_etudiant']) || !in_array($_SESSION['id_etudiant'], $authorizedIds)) {
            // Redirection vers la page d'accueil si non autorisé
            return redirect()->to('Caccueil');
        }

        $page['titre'] = "Dashboard";
        $page['contenu'] = view('v_admin');
        return view('Commun/v_template_admin', $page);
    }
    public function GestionETD()
    {
        $page['titre'] = "Gestion ETD";

        $checkEtudiantModel = new Mcheck_etudiant();
        $data['result_check_ETD'] = $checkEtudiantModel->getAllCheckEtudiant();

        $etudiantModel = new Metudiant();
        $data['result_ETD'] = $etudiantModel->getAllEtudiant();

        $page['contenu'] = view('v_gestion_etd', $data);
        return view('Commun/v_template_admin', $page);
    }

    public function createEtudiant()
    {
        $etudiantModel = new Metudiant();

        // Récupérer les données envoyées depuis la vue
        $data = [
            'mail' => $this->request->getGet('mail'),
            'pass' => $this->request->getGet('pass'),
        ];

        $id = $this->request->getGet('id_etudiant');

        // Insérer les données dans la base
        if ($etudiantModel->createEtudiant($data)) {
            return redirect()->to('Cadmin/deleteCheckEtudiant/' . $id); // Redirection après ajout
        }
    }

    public function deleteCheckEtudiant($id)
    {
        $checkEtudiantModel = new Mcheck_etudiant();

        // Supprimer l'étudiant avec l'ID donné
        $checkEtudiantModel->delete($id);

        return redirect()->to('Cadmin/GestionETD'); // Redirection après suppression
    }

    public function GestionFiche()
    {
        $page['titre'] = "Gestion Fiche";

        $etudiantModel = new Metudiant();
        $data['result_ETD'] = $etudiantModel->getAllEtudiant();

        $page['contenu'] = view('v_gestion_fiche', $data);
        return view('Commun/v_template_admin', $page);
    }

    public function voirEtudiant($id)
    {
        $page['titre'] = "Visualisation Profil";

        // Charger le modèle
        $etudiantModel = new Metudiant();
        $data['result'] = $etudiantModel->getEtudiant($id);


        $page['contenu'] = view('v_profil_admin', $data);
        $page['css'] = 'css/profil.css';
        return view('Commun/v_template_admin', $page);
    }

    public function Support()
    {
        $page['titre'] = "Support";
        $page['contenu'] = view('v_support');
        return view('Commun/v_template_admin', $page);
    }
}
