<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class DataPasienModels extends Model
{
    protected $table = 'data_pasien';
    protected $primaryKey = 'id_data_pasien';
    protected $allowedFields = [
        'id_pasien', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'id_puskesmas', 'tinggi_badan', 'berat_badan', 'diagnosis_pasien', 'gambar_pasien'
    ];
    // protected $returnType = 'App\Entities\Users';
    //protected $useTimestamps = false;

    public function findById($id)
    {
        $data = $this->find($id);
        if ($data) {
            return $data;
        }
        return false;
    }
}
