<?php

namespace App\Models\Dashboard\Dashboard;

use CodeIgniter\Model;

class PesanModels extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $allowedFields = ['id_pasien', 'isi_pesan', 'status', 'tanggal_pesan', 'waktu_pesan'];
    public function getPasien($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_pesan' => $id])->first();
    }
}
