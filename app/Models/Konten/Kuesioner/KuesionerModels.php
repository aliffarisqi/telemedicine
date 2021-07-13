<?php

namespace App\Models\Konten\Kuesioner;

use CodeIgniter\Model;

class KuesionerModels extends Model
{
    protected $table = 'kuesioner';
    protected $primaryKey = 'id_kuesioner';
    protected $allowedFields = ['nama_pertanyaan'];
    public function getKuesioner($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_kuesioner' => $id])->first();
    }
}
