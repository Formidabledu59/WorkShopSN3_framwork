<?php

namespace App\Controllers;
use App\Models\Mcheck_etudiant;
use CodeIgniter\Controller;

class Caccueil extends BaseController
{
    public function index()
    {
        $page['contenu'] = view('v_accueil');
        $page['css'] = 'css/style_accueil.js';
        return view('Commun/v_template', $page);
    }

 // Fonction pour gérer l'inscription
 public function register()
 {
     $checkEtudiantModel = new Mcheck_etudiant();

     // Récupérer les données du formulaire
     $email = $this->request->getPost('email');
     $password = $this->request->getPost('password');
     $message = $this->request->getPost('message');

     // Hachage du mot de passe avant l'insertion
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     // Préparation des données à insérer
     $data = [
         'mail' => $email,
         'pass' => $hashedPassword,
         'msg'  => $message
     ];

     // Insertion dans la base de données
     if ($checkEtudiantModel->insert($data)) {
         return redirect()->to('/success'); // Redirection vers une page de succès
     } else {
         return redirect()->back()->with('error', 'Erreur lors de l\'inscription');
     }
 }

}
