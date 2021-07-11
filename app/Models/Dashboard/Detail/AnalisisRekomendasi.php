<?php

namespace App\Models\Dashboard\Detail;

use CodeIgniter\Model;

class AnalisisRekomendasi extends Model
{
    protected $table = 'analisis_rekomendasi';
    protected $primaryKey = 'id_data_pasien';
    protected $allowedFields = ['judul', 'note_analisis', 'tanggal_analisis', 'status_analisis'];
    public function getAnalisisRekomendasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_data_pasien' => $id])->find();
    }
}
