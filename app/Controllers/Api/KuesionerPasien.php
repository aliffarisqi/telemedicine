<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class KuesionerPasien extends ResourceController
{
    protected $modelName = 'App\Models\Api\KuesionerPasienModels';
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
        $data = $this->request->getPost();
        $kuesionerPasien = new \App\Entities\ApiTelemedicine();
        $kuesionerPasien->fill($data);
        if ($this->model->save($kuesionerPasien)) {
            return $this->respondCreated($kuesionerPasien, 'data kuesioner Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_kuesioner_pasien'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        $dataPasien = new \App\Entities\ApiTelemedicine();
        $dataPasien->fill($data);
        if ($this->model->save($dataPasien)) {
            return $this->respondUpdated($dataPasien, 'daa$dataPasien Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_kuesioner_pasien ' => $id . ' Deleted']);
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
