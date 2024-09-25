<?php

namespace App\Models;

use CodeIgniter\Model;


class Metudiant extends Model
{

    protected $table = 'personne';
    protected $primaryKey = 'idContact';
    protected $returnType = 'array';


    public function createEtudiant($prmData)
    {
        $this->allowedFields = ['email', 'pass'];
        $this->insert($prmData);
    }
    
    public function loginPersonne($prmData)
    {
        $requete = $this->select('*')
        ->where(['login' => $prmData['login'] ]);
        return $requete->findAll();
    }

}