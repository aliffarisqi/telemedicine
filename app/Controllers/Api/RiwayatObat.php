<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class RiwayatObat extends ResourceController
{
    protected $modelName = 'App\Models\Api\RiwayatObatModels';
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
        // $validate = $this->validation->run($data, 'riwayat_obat');

        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $riwayatObat = new \App\Entities\ApiTelemedicine();
        $riwayatObat->fill($data);
        if ($this->model->save($riwayatObat)) {
            return $this->respondCreated($riwayatObat, 'Riwayat Obat Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_riwayat_obat'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        // $validate = $this->validation->run($data, 'riwayat_obat_update');
        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $riwayatObat = new \App\Entities\ApiTelemedicine();
        $riwayatObat->fill($data);
        if ($this->model->save($riwayatObat)) {
            return $this->respondUpdated($riwayatObat, 'Riwayat Obat Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_riwayat_obat' => $id . ' Deleted']);
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
