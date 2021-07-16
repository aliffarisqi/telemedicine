<?php

namespace App\Models\Dashboard\Detail;

use CodeIgniter\Model;

class RiwayatObat extends Model
{
  protected $table = 'riwayat_obat';
  protected $primaryKey = 'id_riwayat_obat';
  protected $allowedFields = [
    'id_data_pesan', 'nama_obat', 'pemakaian_obat', 'note_obat'
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
  public function getRiwayatObat($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->where(['id_data_pasien' => $id])->get()->getResultArray();
  }
}
