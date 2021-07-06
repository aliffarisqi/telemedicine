<?php

namespace App\Models\Konten\Artikel;

use CodeIgniter\Model;

class KontenModel extends Model
{
    protected $table = 'konten';
    protected $primaryKey = 'id_konten';
    protected $allowedFields = ['gambar_konten', 'judul_konten', 'isi_konten', 'tanggal_publish', 'publisher'];
    public function getKonten($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_konten' => $id])->first();
    }
}
