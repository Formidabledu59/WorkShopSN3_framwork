<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Chub extends BaseController
{

    protected $session;
    
    public function __construct()
    {
        // Initialisation de la session
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        $page['contenu'] = view('v_hub');
        $page['css'] = 'css/style_hub.css';
        return view('Commun/v_template', $page);
    }

}
