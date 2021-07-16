<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class LifestylePasienModels extends Model
{
    protected $table = 'lifestyle_pasien';
    protected $primaryKey = 'id_lifestyle_pasien';
    protected $allowedFields = [
        'id_datalifestyle', 'id_data_pasien', 'status_lifestyle', 'tanggal_lifestyle'
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
