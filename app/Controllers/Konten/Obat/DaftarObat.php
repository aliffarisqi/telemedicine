<?php

namespace App\Controllers\Konten\Obat;

use App\Controllers\BaseController;
use App\Models\Konten\Obat\ObatModels;

class DaftarObat extends BaseController
{
    protected $dataObat;
    public function __construct()
    {
        $this->dataObat = new ObatModels();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Obat',
            'dataobat' => $this->dataObat->getObat()
        ];
        return view('pages\konten\obat\daftarobat', $data);
    }
    public function update($id)
    {
        session();
        $data = [
            'title' => 'Edit Obat',
            'dataobat' => $this->dataObat->getObat($id),
            'validation' => \Config\Services::validation()
        ];
        return view('pages\konten\obat\editobat', $data);
    }
    public function updateProses()
    {
        $id = $this->request->getVar('id');
        //validation
        if (!$this->validate([
            'namaobat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ]
        ])) {
            return redirect()->to('/konten/obat/daftarobat/update/' . $id)->withInput();
        }
        $this->dataObat->save([
            'id_obat' => $id,
            'nama_obat' => htmlspecialchars($this->request->getVar('namaobat'))
        ]);
        session()->setFlashdata('pesan', 'Data obat Berhasil di Update');
        return redirect()->to('/konten/obat/daftarobat');
    }
    public function tambahobat()
    {
        session();
        $data = [
            'title' => 'Tambah Obat',
            'validation' => \Config\Services::validation()
        ];
        return view('pages\konten\obat\tambahobat', $data);
    }
    public function tambahobatproses()
    {
        //validation
        if (!$this->validate([
            'namaobat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ]
        ])) {
            return redirect()->to('/konten/obat/daftarobat/tambahobat')->withInput();
        }

        //memasukan data ke database
        $this->dataObat->save([
            'nama_obat' => htmlspecialchars($this->request->getVar('namaobat'))
        ]);
        session()->setFlashdata('pesan', 'Data obat berhasil ditambahkan');
        return redirect()->to('/konten/obat/daftarobat');
    }
    public function delete($id)
    {
        $this->dataObat->delete($id);
        session()->setFlashdata('pesan', 'Data obat berhasil di Delete');
        return redirect()->to('/konten/obat/daftarobat');
    }
}
