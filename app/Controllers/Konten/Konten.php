<?php

namespace App\Controllers\Konten;

use App\Controllers\BaseController;
use App\Models\Konten\Artikel\KontenModel;
use App\Models\Konten\Lifestyle\PertanyaanLifestyleModel;

class Konten extends BaseController
{
    protected $pertanyaanLifestyleModel;
    protected $kontenModel;
    public function __construct()
    {
        $this->pertanyaanLifestyleModel = new PertanyaanLifestyleModel();
        $this->kontenModel = new KontenModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Konten',
            'datalifestyle' => count($this->pertanyaanLifestyleModel->getDataPertanyaanLifestyle()),
            'kontenartikel' => $this->kontenModel->getKonten()
        ];
        return view('pages\konten\konten', $data);
    }
}
