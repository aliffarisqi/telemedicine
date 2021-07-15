<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;
use App\Models\Konten\Lifestyle\JenisPertanyaanModel;
use App\Models\Konten\Lifestyle\PertanyaanLifestyleModel;

class Lifestyle extends BaseController
{

    protected $dataJenisPertanyaan;
    protected $dataPertanyaan;
    public function __construct()
    {

        $this->dataJenisPertanyaan = new JenisPertanyaanModel();
        $this->dataPertanyaan = new PertanyaanLifestyleModel();
    }
    public function index()
    {
        session();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pertanyaan = $this->dataPertanyaan->search($keyword);
        } else {
            $pertanyaan = $this->dataPertanyaan;
        }
        $currentPage = $this->request->getVar('page_data_lifestyle') ? $this->request->getVar('page_data_lifestyle') : 1;
        $data = [
            'title' => 'Lifestyle',
            'datapertanyaanlifestyle' => $pertanyaan->paginate(5, 'data_lifestyle'),
            'pager' => $this->dataPertanyaan->pager,
            'currentpage' => $currentPage
        ];
        return view('pages\konten\lifestyle\dashboard', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Pertanyaan',
            'pertanyaanlifestyle' => $this->dataPertanyaan->getDataPertanyaanLifestyle($id)
        ];
        return view('pages\konten\lifestyle\lihatpertanyaan', $data);
    }
    public function delete($id)
    {
        $this->dataPertanyaan->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di Delete');
        return redirect()->to('/konten/lifestyle/lifestyle');
    }
    public function tambahpertanyaan()
    {
        session();
        $data = [
            'title' => 'Tambah Pertanyaan',
            'jenisLifestyle' => $this->dataJenisPertanyaan->getJenislifestyle(),
            'validation' => \Config\Services::validation()
        ];
        return view('/pages/konten/lifestyle/tambahpertanyaan', $data);
    }
    public function tambahpertanyaanProses()
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
            return redirect()->to('/konten/lifestyle/lifestyle/tambahpertanyaan')->withInput();
        }

        //memasukan data ke database
        $this->dataPertanyaan->save([
            'data_pertanyaan' => htmlspecialchars($this->request->getVar('pertanyaan')),
            'jenis_pertanyaan' => $this->request->getVar('jenis')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/konten/lifestyle/lifestyle/');
    }
    public function update($id)
    {
        session();
        $data = [
            'title' => 'Edit Pertanyaan Lifestyle',
            'pertanyaanlifestyle' => $this->dataPertanyaan->getDataPertanyaanLifestyle($id),
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
            return redirect()->to('/konten/lifestyle/lifestyle/update/' . $id)->withInput();
        }
        $this->dataPertanyaan->save([
            'id_datalifestyle' => $id,
            'data_pertanyaan' => htmlspecialchars($this->request->getVar('pertanyaan')),
            'jenis_pertanyaan' => $this->request->getVar('jenis')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil di Update');
        return redirect()->to('/konten/lifestyle/lifestyle');
    }
}
