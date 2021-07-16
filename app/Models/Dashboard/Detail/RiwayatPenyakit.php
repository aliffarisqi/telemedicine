<?php

namespace App\Models\Dashboard\Detail;

use CodeIgniter\Model;

class RiwayatPenyakit extends Model
{
  protected $table = 'riwayat_penyakit';
  protected $primaryKey = 'id_riwayat_penyakit';
  protected $useTimestamps = false;
  protected $allowedFields = [
    'id_data_pasien', 'nama_penyakit', 'tanggal_mulai', 'tanggal_selesai', 'note_penyakit'
  ];
  // protected $returnType = 'App\Entities\Users';

  public function findById($id)
  {
    $data = $this->find($id);
    if ($data) {
      return $data;
    }
    return false;
  }
  public function getPenyakit($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->where(['id_data_pasien' => $id])->get()->getResultArray();
  }
}
