<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class PuskesmasModels extends Model
{
    protected $table = 'puskesmas';
    protected $primaryKey = 'id_puskesmas';
    protected $allowedFields = [
        'nama_puskesmas', 'alamat', 'telephone'
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
