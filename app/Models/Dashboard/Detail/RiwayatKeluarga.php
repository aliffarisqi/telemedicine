<?php

namespace App\Models\Dashboard\Detail;

use CodeIgniter\Model;

class RiwayatKeluarga extends Model
{
  protected $table = 'riwayat_keluarga';
  protected $primaryKey = 'id_riwayat_keluarga';
  protected $allowedFields = [
    'id_data_pasien', 'nama_penyakit', 'status_keluarga', 'tanggal_mulai', 'tanggal_selesai', 'note_keluarga'
  ];
  // protected $returnType = 'App\Entities\Users';
  protected $useTimestamps = false;

  public function findById($id)
  {
    $data = $this->find($id);
    if ($data) {
      return $data;
    }
    return false;
  }
  public function getRiwayatKeluarga($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->where(['id_data_pasien' => $id])->get()->getResultArray();
  }
}
