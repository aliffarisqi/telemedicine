<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class RiwayatKeluarga extends ResourceController
{
    protected $modelName = 'App\Models\Api\RiwayatKeluargaModels';
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
        // $validate = $this->validation->run($data, 'riwayat_keluarga');

        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $riwayatKeluarga = new \App\Entities\ApiTelemedicine();
        $riwayatKeluarga->fill($data);
        if ($this->model->save($riwayatKeluarga)) {
            return $this->respondCreated($riwayatKeluarga, 'Riwayat Keluarga Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_riwayat_keluarga'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        // $validate = $this->validation->run($data, 'riwayat_keluarga_update');
        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $riwayatKeluarga = new \App\Entities\ApiTelemedicine();
        $riwayatKeluarga->fill($data);
        if ($this->model->save($riwayatKeluarga)) {
            return $this->respondUpdated($riwayatKeluarga, 'Riwayat Keluarga Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_riwayat_keluarga ' => $id . ' Deleted']);
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
