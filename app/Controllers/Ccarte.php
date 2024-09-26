<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Ccarte extends BaseController
{

    protected $session;
    
    public function __construct()
    {
        // Initialisation de la session
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        return view('v_carte_visite');
    }

}
