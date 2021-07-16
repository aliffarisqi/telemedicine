<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Dashboard\ListPasienModel;
use App\Models\Dashboard\Detail\PasienTekananDarahModels;

class Hasil extends BaseController
{
    protected $dataTekananDarah;
    protected $dataPasien;

    public function __construct()
    {
        $this->dataTekananDarah = new PasienTekananDarahModels();
        $this->dataPasien = new ListPasienModel();
    }
    public function hasiltekanandarah($id)
    {
        session();
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'title' => 'Hasil tekanan Darah',
            'pasien' => $this->dataTekananDarah->getDataTekananDarah($id),
            'datapasien' => $this->dataPasien->getListPasien($id),
            'hariini' => date('Y:m:d'),
            'pager' => $this->dataTekananDarah->pager,
        ];
        return view('pages\detail\hasil', $data);
    }
}
