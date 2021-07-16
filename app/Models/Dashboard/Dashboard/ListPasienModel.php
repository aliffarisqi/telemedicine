<?php

namespace App\Models\Dashboard\Dashboard;

use CodeIgniter\Model;

class ListPasienModel extends Model
{
    protected $table = 'data_pasien';
    protected $primaryKey = 'id_data_pasien';
    protected $allowedFields = ['id_pasien', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'id_puskesmas', 'tinggi_badan', 'berat_badan', 'diagnosis_pasien', 'gambar_pasien'];
    public function getListPasien($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_data_pasien' => $id])->first();
    }
}
