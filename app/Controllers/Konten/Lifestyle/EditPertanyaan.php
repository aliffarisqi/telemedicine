<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;
use App\Models\Konten\Lifestyle\JenisPertanyaanModel;
use App\Models\Konten\Lifestyle\PertanyaanLifestyleModel;

class EditPertanyaan extends BaseController
{
    protected $dataPertanyaanLifestyleModel;
    protected $dataJenisPertanyaan;
    public function __construct()
    {
        $this->dataPertanyaanLifestyleModel = new PertanyaanLifestyleModel();
        $this->dataJenisPertanyaan = new JenisPertanyaanModel();
    }
    public function update($id)
    {
        session();
        $data = [
            'title' => 'Edit Pertanyaan Lifestyle',
            'pertanyaanlifestyle' => $this->dataPertanyaanLifestyleModel->getDataPertanyaanLifestyle($id),
            'jenispertanyaan' => $this->dataJenisPertanyaan->getJenislifestyle(),
            'validation' => \Config\Services::validation()
        ];
        return view('pages\konten\lifestyle\editpertanyaan', $data);
    }
    public function updateProcess()
    {
        $id = $this->request->getVar('id');
        //validation
        if (!$this->validate([
            'pertanyaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ]
        ])) {
            return redirect()->to('/konten/lifestyle/editpertanyaan/update/' . $id)->withInput();
        }
        $this->dataPertanyaanLifestyleModel->save([
            'id_datalifestyle' => $id,
            'data_pertanyaan' => htmlspecialchars($this->request->getVar('pertanyaan')),
            'jenis_pertanyaan' => $this->request->getVar('jenis')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil di Update');
        return redirect()->to('/konten/lifestyle/dashboard');
    }
}
