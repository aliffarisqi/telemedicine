<?php

namespace App\Models\Dashboard\Detail;

use CodeIgniter\Model;

class AnalisisRekomendasiModels extends Model
{
    protected $table = 'analisis_rekomendasi';
    protected $primaryKey = 'id_analisis';
    protected $allowedFields = ['id_data_pasien', 'judul', 'note_analisis', 'tanggal_analisis', 'status_analisis'];
    public function getAnalisisRekomendasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_data_pasien' => $id])->find();
    }
    public function getIdPasienByanalisis($id)
    {
        return $this->where(['id_analisis' => $id])->first();
    }
}
