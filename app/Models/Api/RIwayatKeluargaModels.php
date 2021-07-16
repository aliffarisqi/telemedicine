<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class RiwayatKeluargaModels extends Model
{
    protected $table = 'riwayat_keluarga';
    protected $primaryKey = 'id_riwayat_keluarga';
    protected $allowedFields = [
        'id_data_pasien', 'nama_penyakit', 'status_keluarga', 'tanggal_mulai', 'tanggal_selesai', 'note_keluarga'
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
