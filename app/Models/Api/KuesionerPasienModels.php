<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class KuesionerPasienModels extends Model
{
    protected $table = 'kuesioner_pasien';
    protected $primaryKey = 'id_kuesioner_pasien';
    protected $allowedFields = [
        'id_pasien', 'hasil', 'tanggal_kuesioner', 'kode', 'id_kuesioner'
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
