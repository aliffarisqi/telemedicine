<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class KuesionerModels extends Model
{
    protected $table = 'kuesioner';
    protected $primaryKey = 'id_kuesioner';
    protected $allowedFields = [
        'nama_pertanyaan', 'kode'
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
