<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;
use App\Models\Konten\Lifestyle\PertanyaanLifestyleModel;

class Dashboard extends BaseController
{
    protected $dataPertanyaanLifestyleModel;
    public function __construct()
    {
        $this->dataPertanyaanLifestyleModel = new PertanyaanLifestyleModel();
    }
    public function index()
    {
        $data = [
            'title' => 'dashboard',
            'datapertanyaanlifestyle' => $this->dataPertanyaanLifestyleModel->getDataPertanyaanLifestyle()
        ];
        return view('pages\konten\lifestyle\dashboard', $data);
    }
}
