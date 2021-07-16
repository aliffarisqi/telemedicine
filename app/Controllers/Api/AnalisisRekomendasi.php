<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class AnalisisRekomendasi extends ResourceController
{
    protected $modelName = 'App\Models\Api\AnalisisRekomendasiModels';
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
        // $validate = $this->validation->run($data, 'analisis_rekomendasi');

        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }
        $analisisRekomendasi = new \App\Entities\ApiTelemedicine();
        $analisisRekomendasi->fill($data);
        if ($this->model->save($analisisRekomendasi)) {
            return $this->respondCreated($analisisRekomendasi, 'analisis Rekomendasi Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_analisis'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        // $validate = $this->validation->run($data, 'admin_update');
        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }
        $analisisrekomendasi = new \App\Entities\ApiTelemedicine();
        $analisisrekomendasi->fill($data);
        if ($this->model->save($analisisrekomendasi)) {
            return $this->respondUpdated($analisisrekomendasi, 'Analisis Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_analisis ' => $id . ' Deleted']);
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
