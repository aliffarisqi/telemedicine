<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class DataPasien extends ResourceController
{
    protected $modelName = 'App\Models\Api\DataPasienModels';
    protected $format = 'json';

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
    public function create()
    {
        $filegambar = $this->request->getFile('gambar_pasien');
        if ($filegambar->getError() == 4) {
            $namagambar = 'default.png';
        } else {
            //generate sampul ranadom
            $namagambar = $filegambar->getRandomName();

            //pindahkan file gambar ke folder img
            $filegambar->move('img/pasien', $namagambar);
        }

        $data = [
            'id_pasien' => $this->request->getVar('id_pasien'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'id_puskesmas' => $this->request->getVar('id_puskesmas'),
            'tinggi_badan' => $this->request->getVar('tinggi_badan'),
            'berat_badan' => $this->request->getVar('berat_badan'),
            'diagnosis_pasien' => $this->request->getVar('diagnosis_pasien'),
            'gambar_pasien' => $namagambar
        ];
        $dataPasien = new \App\Entities\ApiTelemedicine;
        $dataPasien->fill($data);
        if ($this->model->save($dataPasien)) {
            return $this->respondCreated($dataPasien, 'data Pasien Created');
        }
    }
    public function update($id = null)
    {
        // $filegambar = $this->request->getFile('gambar_pasien');
        // $gambarlama = $this->request->getVar('gambarlama');
        // if ($filegambar->getError() == 4) {
        //     $namagambar = $gambarlama;
        // } else {
        //     //generate sampul ranadom
        //     $namagambar = $filegambar->getRandomName();

        //     //pindahkan file gambar ke folder img
        //     $filegambar->move('img/pasien', $namagambar);
        //     //hapus
        //     if ($gambarlama != 'default.png') {
        //         unlink('img/pasien/' . $gambarlama);
        //     }
        // }

        $data = [
            'id_pasien' => $this->request->getVar('id_pasien'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'id_puskesmas' => $this->request->getVar('id_puskesmas'),
            'tinggi_badan' => $this->request->getVar('tinggi_badan'),
            'berat_badan' => $this->request->getVar('berat_badan'),
            'diagnosis_pasien' => $this->request->getVar('diagnosis_pasien'),
            //     //'gambar_pasien' => $namagambar
        ];
        $data['id_data_pasien'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        $dataPasien = new \App\Entities\ApiTelemedicine;
        $dataPasien->fill($data);
        if ($this->model->save($dataPasien)) {
            return $this->respondUpdated($dataPasien, 'data Pasien Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        $data = $this->model->findById($id);
        if ($data['gambar_pasien'] != 'default.png') {
            //menghapus gambar
            unlink('img/pasien/' . $data['gambar_pasien']);
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id Data Pasien ' => $id . ' Deleted']);
        }
    }
    public function show($id = null)
    {
        $data = $this->model->findById($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->fail('ID ' . $id . ' tidak ditemukan');
    }
}
