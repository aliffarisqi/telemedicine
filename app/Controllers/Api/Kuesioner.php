<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Kuesioner extends ResourceController
{
    protected $modelName = 'App\Models\Api\KuesionerModels';
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

        $kuesioner = new \App\Entities\ApiTelemedicine();
        $kuesioner->fill($data);
        if ($this->model->save($kuesioner)) {
            return $this->respondCreated($kuesioner, 'Kuesioner Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_kuesioner'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        $kuesioner = new \App\Entities\ApiTelemedicine();
        $kuesioner->fill($data);
        if ($this->model->save($kuesioner)) {
            return $this->respondUpdated($kuesioner, 'Kuesioner Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_kuesioner' => $id . ' Deleted']);
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
