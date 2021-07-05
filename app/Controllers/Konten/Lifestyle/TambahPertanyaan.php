<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;
use App\Models\Konten\Lifestyle\JenisPertanyaanModel;
use App\Models\Konten\Lifestyle\PertanyaanLifestyleModel;

class TambahPertanyaan extends BaseController
{
    protected $dataJenisPertanyaan;
    public function __construct()
    {
        $this->dataJenisPertanyaan = new JenisPertanyaanModel();
        $this->dataPertanyaan = new PertanyaanLifestyleModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Tambah Pertanyaan',
            'jenisLifestyle' => $this->dataJenisPertanyaan->getJenislifestyle()
        ];
        return view('/pages/konten/lifestyle/tambahpertanyaan', $data);
    }
    public function save()
    {
        $this->dataPertanyaan->save([
            'data_pertanyaan' => $this->request->getVar('pertanyaan'),
            'jenis_pertanyaan' => $this->request->getVar('jenis')
        ]);
        return redirect()->to('/konten/lifestyle/dashboard/');
    }
}
