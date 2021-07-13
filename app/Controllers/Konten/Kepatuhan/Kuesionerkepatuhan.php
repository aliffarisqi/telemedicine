<?php

namespace App\Controllers\Konten\Kepatuhan;

use App\Controllers\BaseController;
use App\Models\Konten\Kuesioner\KuesionerModels;

class KuesionerKepatuhan extends BaseController
{
    protected $daftarkuesioner;
    public function __construct()
    {
        $this->daftarkuesioner = new KuesionerModels();
    }
    public function index()
    {
        $data = [
            'title' => 'Kuesioner',
            'daftarkuesioner' => $this->daftarkuesioner->getKuesioner()
        ];
        return view('pages\konten\kepatuhan\kuesioner', $data);
    }
    public function lihatkuesioner()
    {
        $data = [
            'title' => 'Kuesioner',
            'daftarkuesioner' => $this->daftarkuesioner->getKuesioner()
        ];
        return view('pages\konten\kepatuhan\lihatkuesioner', $data);
    }
    public function tambahkuesioner()
    {
        session();
        $data = [
            'title' => 'Tambah Kuesioner',
            'validation' => \Config\Services::validation()
        ];
        return view('pages\konten\kepatuhan\tambahpertanyaan', $data);
    }
    public function tambahkepatuhanproses()
    {
        //validation
        if (!$this->validate([
            'pertanyaankuesioner' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ]
        ])) {
            return redirect()->to('/konten/kepatuhan/kuesionerkepatuhan/tambahkuesioner')->withInput();
        }

        //memasukan data ke database
        $this->daftarkuesioner->save([
            'nama_pertanyaan' => htmlspecialchars($this->request->getVar('pertanyaankuesioner'))
        ]);
        session()->setFlashdata('pesan', 'Data pertanyaan berhasil ditambahkan');
        return redirect()->to('/konten/kepatuhan/kuesionerkepatuhan');
    }
    public function update($id)
    {
        session();
        $data = [
            'title' => 'Edit Kuesioner',
            'daftarkuesioner' => $this->daftarkuesioner->getKuesioner($id),
            'validation' => \Config\Services::validation()
        ];
        return view('pages\konten\kepatuhan\editkuesioner', $data);
    }
    public function updateproses()
    {
        $id = $this->request->getVar('id');
        //validation
        if (!$this->validate([
            'pertanyaankuesioner' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ]
        ])) {
            return redirect()->to('/konten/kepatuhan/kuesionerkepatuhan/update/' . $id)->withInput();
        }
        $this->daftarkuesioner->save([
            'id_kuesioner' => $id,
            'nama_pertanyaan' => htmlspecialchars($this->request->getVar('pertanyaankuesioner'))
        ]);
        session()->setFlashdata('pesan', 'Data kuesioner Berhasil di Update');
        return redirect()->to('/konten/kepatuhan/kuesionerkepatuhan');
    }
    public function delete($id)
    {
        $this->daftarkuesioner->delete($id);
        session()->setFlashdata('pesan', 'Data Kuesioner berhasil di Delete');
        return redirect()->to('/konten/kepatuhan/kuesionerkepatuhan');
    }
}
