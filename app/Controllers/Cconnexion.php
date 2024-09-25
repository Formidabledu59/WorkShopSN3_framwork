<?php

namespace App\Controllers;

use App\Models\Metudiant;
use CodeIgniter\Controller;

class Cconnexion extends BaseController
{
    public function index()
    {
        $page['contenu'] = view('v_connexion');
        $page['css'] = 'css/style_connexion.css';
        return view('Commun/v_template', $page);
    }

    public function authentification()
    {
        $session = \Config\Services::session();

        $model = new Metudiant();

        $dataLogin = $this->request->getPost();
        $result = $model->loginPersonne($dataLogin);

        if ($result != null) {
            // if (password_verify($dataLogin['password'], $result[0]['pass']))
            // Compare directement le mot de passe sans hachage
            if ($dataLogin['password'] === $result['pass']) {
                // Stocke l'ID de l'étudiant dans la session
                $session->set([
                    'id_etudiant' => $result['id_etudiant']
                    
                ]);
                return redirect()->to('Caccueil'); // Redirige vers la page d'accueil
            }
        }

        // Redirige si les informations de connexion sont incorrectes
        return redirect()->to('Cconnexion'); // Remplace Caccueil par Cconnexion pour une gestion des erreurs

    }

    public function Deconnexion()
    {
        $session = \Config\Services::session();
        if ($session->has('id_etudiant')) {
            $session->destroy();
        }
        return redirect()->to('Cconnexion');
    }
}
