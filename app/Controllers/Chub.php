<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Chub extends BaseController
{
    public function index()
    {
        $page['contenu'] = view('v_hub');
        $page['css'] = 'css/style_hub.css';
        return view('Commun/v_template', $page);
    }

}
