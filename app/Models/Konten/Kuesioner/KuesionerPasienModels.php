<?php

namespace App\Models\Konten\Kuesioner;

use CodeIgniter\Model;

class KuesionerPasienModels extends Model
{
    protected $table = 'kuesioner_pasien';
    protected $primaryKey = 'id_kuesioner_pasien';
    protected $allowedFields = ['id_pasien', 'idpertanyaan', 'hasil'];
    public function getKuesionerPasien($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_pasien' => $id])->find();
    }
}
