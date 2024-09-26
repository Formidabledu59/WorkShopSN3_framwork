<?php

namespace App\Controllers;

use App\Models\Metudiant;
use CodeIgniter\Controller;

class Ccontact extends BaseController
{

    protected $session;

    public function __construct()
    {
        // Initialisation de la session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $etudiantModel = new Metudiant();
        $data['result'] = $etudiantModel->getAllEtudiant();

        $page['contenu'] = view('v_contact', $data);
        $page['css'] = 'css/style_hub.css';
        return view('Commun/v_template', $page);
    }

    public function filtre()
    {
        $etudiantModel = new Metudiant();

        $nom_prenom = $this->request->getPost('nom_prenom');
        $ecole = $this->request->getPost('ecole');
        $annee = $this->request->getPost('annee');

        $data['result'] = $etudiantModel->getAllEtudiantFiltre($nom_prenom, $ecole, $annee);

        $page['contenu'] = view('v_contact', $data);
        $page['css'] = 'css/style_hub.css';
        return view('Commun/v_template', $page);
    }


    public function voirProfil($id)
    {
        // Charger le modèle
        $etudiantModel = new Metudiant();
        $data['result'] = $etudiantModel->getEtudiant($id);


        $page['contenu'] = view('v_profil', $data);
        $page['css'] = 'css/profil.css';
        return view('Commun/v_template', $page);
    }
}
