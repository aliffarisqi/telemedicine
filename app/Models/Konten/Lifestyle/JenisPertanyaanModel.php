<?php

namespace App\Models\Konten\Lifestyle;

use CodeIgniter\Model;

class JenisPertanyaanModel extends Model
{
    protected $table = 'jenis_lifestyle';
    protected $primaryKey = 'id_jenis_lifestyle';
    protected $allowedFields = ['jenis_lifestyle'];

    public function getJenislifestyle($idJenislifestyle = false)
    {
        if ($idJenislifestyle == false) {
            return $this->findAll();
        }
        return $this->where(['id_jenis_lifestyle' => $idJenislifestyle]);
    }
}
