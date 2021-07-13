<?php

namespace App\Models\Dashboard\Detail;

use App\Models\Dashboard\Dashboard\ListPasienModel;
use CodeIgniter\Model;

class TekananDarahModels extends Model
{
    protected $listpasien;
    protected $table = 'tekanan_darah';
    protected $primaryKey = 'id_tekanan_darah';
    protected $allowedFields = ['id_data_pasien', 'sistole', 'diastole', 'tanggal', 'jam', 'note_td', 'nyeri_tengkuk', 'pusing'];

    public function __construct()
    {
        $this->listpasien = new ListPasienModel();
    }
    public function getTekananDarah($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_data_pasien' => $id])->find();
    }
}
