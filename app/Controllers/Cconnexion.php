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
        $model = new Metudiant();

        $dataLogin = $this->request->getPost();
        $result = $model->loginPersonne($dataLogin);
        if ($result != null) {
            if (password_verify($dataLogin['password'], $result[0]['pass'])) {
                $this->session->set([
                    'id_etudiant' => $result[0]['id_etudiant']
                ]);
                return redirect()->to('Caccueil');
            }
        } else {
            return redirect()->to('Caccueil');
        }
    }

    public function Deconnexion()
    {
        $session = \Config\Services::session();
        if ($session->has('login')) {
            $session->destroy();
        }
        return redirect()->to('Cconnexion');
    }
}
