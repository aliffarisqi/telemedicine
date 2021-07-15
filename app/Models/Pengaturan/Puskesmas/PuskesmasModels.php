<?php

namespace App\Models\Pengaturan\Puskesmas;

use CodeIgniter\Model;

class PuskesmasModels extends Model
{
    protected $table = 'puskesmas';
    protected $primaryKey = 'id_puskesmas';
    protected $allowedFields = ['nama_puskesmas', 'alamat', 'telephone'];
    public function getPuskesmas($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_puskesmas' => $id])->first();
    }
    public function search($keyword)
    {
        return $this->table('puskesmas')->like('nama_puskesmas', $keyword);
    }
}
