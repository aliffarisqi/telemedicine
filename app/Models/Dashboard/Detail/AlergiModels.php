<?php

namespace App\Models\Dashboard\Detail;

use CodeIgniter\Model;

class AlergiModels extends Model
{
  protected $table = 'alergi';
  protected $primaryKey = 'id_alergi';
  protected $allowedFields = [
    'id_data_pasien', 'nama_alergi', 'note_alergi'
  ];

  protected $useTimestamps = false;
  public function getAlergi($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->where(['id_data_pasien' => $id])->get()->getResultArray();
  }
  public function findById($id_alergi)
  {
    $data = $this->find($id_alergi);
    if ($data) {
      return $data;
    }
    return false;
  }
}
