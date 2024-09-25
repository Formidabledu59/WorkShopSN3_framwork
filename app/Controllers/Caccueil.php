<?php

namespace App\Controllers;

use App\Models\Mcheck_etudiant;

use CodeIgniter\Controller;

class Caccueil extends Controller
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
        $request = \Config\Services::request();

        $checkEtudiantModel = new Mcheck_etudiant();

        $etdMail = $request->getPost('mail');
        $etdPass = $request->getPost('password');
        $etdMsg = $request->getPost('msg');
        if ($etdMsg == "NULL" or $etdMsg == "") {
            $etdMsg = NULL;
        }

        $dataRegister = [
            'mail' => $etdMail,
            'pass' => $etdPass,
            'msg' => $etdMsg
        ];

        $data['result'] = $checkEtudiantModel->createEtudiant($dataRegister);
    }
}
