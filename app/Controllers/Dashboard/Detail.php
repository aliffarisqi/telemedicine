<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Dashboard\ListPasienModel;
use App\Models\Dashboard\Detail\AnalisisRekomendasi;

class Detail extends BaseController
{
    protected $listPasien;
    protected $analisisRekomendasi;
    public function __construct()
    {
        $this->listPasien = new ListPasienModel();
        $this->analisisRekomendasi = new AnalisisRekomendasi();
    }
    public function detailPasien($id)
    {

        $data = [
            'title' => 'Data Pasien',
            'datapasien' => $this->listPasien->getListPasien($id),
            'analisisrekomendasi' => $this->analisisRekomendasi->getAnalisisRekomendasi($id)
        ];
        return view('pages\detail\detail', $data);
    }
}
