<?php

namespace App\Controllers;
use App\Models\Mcheck_etudiant;
use CodeIgniter\Controller;

class Caccueil extends BaseController
{
    public function index()
    {
        $page['contenu'] = view('v_accueil');
        $page['css'] = 'css/style_accueil.css';
        return view('Commun/v_template', $page);
    }

 // Fonction pour gérer l'inscription
 public function register()
 {
     $checkEtudiantModel = new Mcheck_etudiant();

     $dataRegister = $this->request->getPost();

     // Insertion dans la base de données
     if ($checkEtudiantModel->createEtudiant($dataRegister)) {
         return redirect()->to('/success'); // Redirection vers une page de succès
     } else {
         return redirect()->back()->with('error', 'Erreur lors de l\'inscription');
     }
 }

}
