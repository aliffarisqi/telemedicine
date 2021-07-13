<?php

namespace App\Controllers\Konten\artikel;

use App\Controllers\BaseController;
use App\Models\Konten\Artikel\KontenModel;

class Artikel extends BaseController
{
    protected $kontenModel;
    public function __construct()
    {
        $this->kontenModel = new KontenModel();
    }
    public function index()
    {
        session();
        $data = [
            'title' => 'tambah artikel',
            'validation' => \Config\Services::validation()
        ];
        return view('pages\konten\artikel\tambahartikel', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'tambah artikel',
            'datakonten' => $this->kontenModel->getKonten($id)
        ];
        return view('pages\konten\artikel\lihatartikel', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'judulkonten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Judul Konten harus di isi'
                ]
            ],
            'publisher' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Penulis harus di isi'
                ]
            ],
            'isiartikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Isi Artikel harus di isi'
                ]
            ],
            'gambarkonten' => [
                'rules' => 'max_size[gambarkonten,30100]|is_image[gambarkonten]|mime_in[gambarkonten, image/jpeg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar masksimal 3 MB',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/konten/artikel/artikel')->withInput();
        }
        $filegambar = $this->request->getFile('gambarkonten');
        if ($filegambar->getError() == 4) {
            $namagambar = 'default.png';
        } else {
            //generate sampul ranadom
            $namagambar = $filegambar->getRandomName();

            //pindahkan file gambar ke folder img
            $filegambar->move('img/konten', $namagambar);
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->kontenModel->save([
            'judul_konten' => htmlspecialchars($this->request->getVar('judulkonten')),
            'publisher' => htmlspecialchars($this->request->getVar('publisher')),
            'isi_konten' => htmlspecialchars($this->request->getVar('isiartikel')),
            'tanggal_publish' => date('Y:m:d H:i:s'),
            'gambar_konten' => $namagambar
        ]);
        session()->setFlashdata('pesan', 'Berhasil Menambahkan Konten Baru');
        return redirect()->to('/konten/konten');
    }
    public function update($id)
    {
        session();
        $data = [
            'title' => 'tambah artikel',
            'datakonten' => $this->kontenModel->getKonten($id),
            'validation' => \Config\Services::validation()
        ];
        return view('pages\konten\artikel\editartikel', $data);
    }
    public function updateprocess()
    {
        $id =  $this->request->getVar('id_konten');
        //validation
        if (!$this->validate([
            'judulkonten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Judul Konten harus di isi'
                ]
            ],
            'publisher' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Penulis harus di isi'
                ]
            ],
            'isiartikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Isi Artikel harus di isi'
                ]
            ],
            'gambarkonten' => [
                'rules' => 'max_size[gambarkonten,30100]|is_image[gambarkonten]|mime_in[gambarkonten, image/jpeg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar masksimal 3 MB',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/konten/artikel/artikel/update/' . $id)->withInput();
        }
        $gambarlama = $this->request->getVar('gambarlama');
        $filegambar = $this->request->getFile('gambarkonten');
        if ($filegambar->getError() == 4) {
            $namagambar = $gambarlama;
        } else {
            //generate sampul ranadom
            $namagambar = $filegambar->getRandomName();

            //pindahkan file gambar ke folder img
            $filegambar->move('img/konten', $namagambar);
            //hapus
            if ($gambarlama != 'default.png') {

                unlink('img/konten/' . $gambarlama);
            }
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->kontenModel->save([
            'id_konten' => $id,
            'judul_konten' => htmlspecialchars($this->request->getVar('judulkonten')),
            'publisher' => htmlspecialchars($this->request->getVar('publisher')),
            'isi_konten' => htmlspecialchars($this->request->getVar('isiartikel')),
            'tanggal_publish' => date('Y:m:d H:i:s'),
            'gambar_konten' => $namagambar
        ]);
        session()->setFlashdata('pesan', 'Berhasil Mengedit Konten');
        return redirect()->to('/konten/konten');
    }
    public function delete($id)
    {
        //cari konten berdasarkan id
        $konten = $this->kontenModel->find($id);
        if ($konten['gambar_konten'] != 'default.png') {
            //menghapus gambar
            unlink('img/konten/' . $konten['gambar_konten']);
        }
        $this->kontenModel->delete($id);
        session()->setFlashdata('pesan', 'Konten Berhasil di Delete');
        return redirect()->to('/konten/konten');
    }
}
