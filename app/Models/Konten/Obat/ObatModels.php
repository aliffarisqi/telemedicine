<?php

namespace App\Models\Konten\Obat;

use CodeIgniter\Model;

class ObatModels extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'id_obat';
    protected $allowedFields = ['nama_obat'];
    public function getObat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_obat' => $id])->first();
    }
    public function search($keyword)
    {
        // $builder = $this->table('obat');
        // $builder->like('nama_obat', $keyword);
        // $builder->like('what', $keyword);
        // return $builder;

        return $this->table('obat')->like('nama_obat', $keyword);
        // ->orLike('what', $keyword)
    }
}
