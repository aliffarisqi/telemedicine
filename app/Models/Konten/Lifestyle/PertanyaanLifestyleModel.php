<?php

namespace App\Models\Konten\Lifestyle;

use CodeIgniter\Model;

class PertanyaanLifestyleModel extends Model
{
    protected $table = 'data_lifestyle';
    protected $primaryKey = 'id_datalifestyle';
    protected $allowedFields = ['data_pertanyaan', 'jenis_pertanyaan'];

    public function getDataPertanyaanLifestyle($idLifestyle = false)
    {
        if ($idLifestyle == false) {
            return $this->findAll();
        }
        return $this->where(['id_datalifestyle' => $idLifestyle])->first();
    }
    public function search($keyword)
    {
        return $this->table('data_lifestyle')->like('data_pertanyaan', $keyword)->orLike('jenis_pertanyaan', $keyword);
    }
}
