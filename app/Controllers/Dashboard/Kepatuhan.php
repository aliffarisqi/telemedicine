<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Dashboard\ListPasienModel;
use App\Models\Konten\Kuesioner\KuesionerModels;
use App\Models\Konten\Kuesioner\KuesionerPasienModels;

class Kepatuhan extends BaseController
{
    protected $datakuesioner;
    protected $datapasien;
    protected $kuesionerpasien;
    public function __construct()
    {
        $this->datakuesioner = new KuesionerModels();
        $this->datapasien = new ListPasienModel();
        $this->kuesionerpasien = new KuesionerPasienModels();
    }
    public function detailkepatuhan($id)
    {
        session();
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'title' => 'kepatuhan',
            'pasien' => $this->datapasien->getListPasien($id),
            'datakuesioner' => $this->datakuesioner->getKuesioner(),
            'kuesionerpasien' => $this->kuesionerpasien->getKuesionerPasien($id),
            'hariini' => date('Y:m:d')
        ];
        return view('pages\detail\kuesioner', $data);
    }
}
