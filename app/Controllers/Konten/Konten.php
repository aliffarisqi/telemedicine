<?php

namespace App\Controllers\Konten;

use App\Controllers\BaseController;
use App\Models\Konten\Artikel\KontenModel;
use App\Models\Konten\Kuesioner\KuesionerModels;
use App\Models\Konten\Lifestyle\PertanyaanLifestyleModel;
use App\Models\Konten\Obat\ObatModels;

class Konten extends BaseController
{
    protected $pertanyaanLifestyleModel;
    protected $kontenModel;
    protected $obatMoodel;
    protected $kuesioner;
    public function __construct()
    {
        $this->pertanyaanLifestyleModel = new PertanyaanLifestyleModel();
        $this->kontenModel = new KontenModel();
        $this->obatMoodel = new ObatModels();
        $this->kuesioner = new KuesionerModels();
    }
    public function index()
    {
        $data = [
            'title' => 'Konten',
            'datalifestyle' => count($this->pertanyaanLifestyleModel->getDataPertanyaanLifestyle()),
            'dataobat' => count($this->obatMoodel->getObat()),
            'datakuesioner' => count($this->kuesioner->getKuesioner()),
            'kontenartikel' => $this->kontenModel->getKonten()
        ];
        return view('pages\konten\konten', $data);
    }
}
