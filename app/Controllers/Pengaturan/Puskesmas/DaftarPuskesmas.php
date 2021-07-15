<?php

namespace App\Controllers\Pengaturan\Puskesmas;

use App\Controllers\BaseController;
use App\Models\Pengaturan\Puskesmas\PuskesmasModels;

class DaftarPuskesmas extends BaseController
{
    protected $dataPuskesmas;
    public function __construct()
    {
        $this->dataPuskesmas = new PuskesmasModels();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $puskesmas = $this->dataPuskesmas->search($keyword);
        } else {
            $puskesmas = $this->dataPuskesmas;
        }
        $data = [
            'title' => 'daftar Puskesmas',
            'datapuskesmas' => $puskesmas->getPuskesmas()
        ];
        return view('pages\pengaturan\puskesmas\daftarpuskesmas', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Puskesmas',
            'datapuskesmas' => $this->dataPuskesmas->getPuskesmas($id),
            'datapasien' => 'data pasien'
        ];
        return view('pages\pengaturan\puskesmas\detail', $data);
    }
    public function tambahPuskesmas()
    {
        session();
        $data = [
            'title' => 'tambah Puskesmas',
            'validation' => \Config\Services::validation()
        ];
        return view('pages\pengaturan\puskesmas\tambahpuskesmas', $data);
    }
    public function tambahproses()
    {
        //validation
        if (!$this->validate([
            'namapuskesmas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ],
            'telephone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ],
        ])) {
            return redirect()->to('/pengaturan/puskesmas/daftarpuskesmas/tambahpuskesmas')->withInput();
        }

        //memasukan data ke database
        $this->dataPuskesmas->save([
            'nama_puskesmas' => htmlspecialchars($this->request->getVar('namapuskesmas')),
            'telephone' => htmlspecialchars($this->request->getVar('telephone')),
            'alamat' => htmlspecialchars($this->request->getVar('alamat'))
        ]);
        session()->setFlashdata('pesan', 'Berhasil manambahkan puskesmas');
        return redirect()->to('/pengaturan/puskesmas/daftarpuskesmas');
    }
}
