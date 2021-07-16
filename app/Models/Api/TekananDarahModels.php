<?php

namespace App\Models\Api;

use CodeIgniter\Model;

class TekananDarahModels extends Model
{
    protected $table = 'tekanan_darah';
    protected $primaryKey = 'id_tekanan_darah';
    protected $allowedFields = [
        'id_data_pasien', 'sistole', 'diastole', 'tanggal', 'jam', 'note_td', 'nyeri_tengkuk', 'pusing'
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
}
