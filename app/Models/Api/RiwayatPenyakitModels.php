<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class RiwayatPenyakitModels extends Model
{
    protected $table = 'riwayat_penyakit';
    protected $primaryKey = 'id_riwayat_penyakit';
    protected $allowedFields = [
        'id_data_pasien', 'nama_penyakit', 'tanggal_mulai', 'tanggal_selesai', 'note_penyakit'
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
