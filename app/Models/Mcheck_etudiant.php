<?php

namespace App\Models;

use CodeIgniter\Model;

class Mcheck_etudiant extends Model
{
    protected $table      = 'check_etudiant';
    protected $primaryKey = 'id_etudiant';
    
    protected $allowedFields = ['mail', 'pass', 'msg'];

    // Optionnel : utiliser des règles de validation
    protected $validationRules = [
        'mail' => 'required|valid_email',
        'pass' => 'required|min_length[8]',
        'msg'  => 'permit_empty|max_length[150]'
    ];
}
