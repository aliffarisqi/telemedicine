<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class PasienModels extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $allowedFields = [
        'username_pasien', 'email_pasien', 'password_pasien'
    ];
    // protected $returnType = 'App\Entities\Users';
    protected $useTimestamps = false;

    public function findById($id)
    {
        $data = $this->find($id);
        if ($data) {
            return $data;
        }
        return false;
    }
}
