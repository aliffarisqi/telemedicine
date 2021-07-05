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
        session();
        $data = [
            'title' => 'Tambah Pertanyaan',
            'jenisLifestyle' => $this->dataJenisPertanyaan->getJenislifestyle(),
            'validation' => \Config\Services::validation()
        ];
        return view('/pages/konten/lifestyle/tambahpertanyaan', $data);
    }
    public function save()
    {
        //validation
        if (!$this->validate([
            'pertanyaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ]
        ])) {
            return redirect()->to('/konten/lifestyle/tambahpertanyaan')->withInput();
        }

        //memasukan data ke database
        $this->dataPertanyaan->save([
            'data_pertanyaan' => htmlspecialchars($this->request->getVar('pertanyaan')),
            'jenis_pertanyaan' => $this->request->getVar('jenis')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/konten/lifestyle/dashboard/');
    }
}
