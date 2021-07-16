<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class AnalisisRekomendasiModels extends Model
{
    protected $table = 'analisis_rekomendasi';
    protected $primaryKey = 'id_analisis';
    protected $allowedFields = [
        'id_data_pasien', 'judul', 'note_analisis', 'tanggal_analisis', 'status_analisis'
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
