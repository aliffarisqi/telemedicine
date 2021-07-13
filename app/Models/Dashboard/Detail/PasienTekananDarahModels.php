<?php

namespace App\Models\Dashboard\Detail;

use CodeIgniter\Model;

class PasienTekananDarahModels extends Model
{
    public function getDataTekananDarah($id)
    {
        return $this->db->table('pasien')
            ->join('data_pasien', 'pasien.id_pasien = data_pasien.id_pasien')
            ->join('tekanan_darah', 'tekanan_darah.id_data_pasien=data_pasien.id_data_pasien')
            ->where('data_pasien.id_data_pasien', $id)->get()->getResultArray();
    }
}
