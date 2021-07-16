<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class LifestylePasien extends ResourceController
{
    protected $modelName = 'App\Models\Api\LifestylePasienModels';
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
        // $validate = $this->validation->run($data, 'lifestyle_pasien');

        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $lifestylePasien = new \App\Entities\ApiTelemedicine();
        $lifestylePasien->fill($data);
        if ($this->model->save($lifestylePasien)) {
            return $this->respondCreated($lifestylePasien, 'lifestyle Pasien Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_lifestyle_pasien'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        // $validate = $this->validation->run($data, 'lifestyle_pasien_update');
        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $lifestylePasien = new \App\Entities\ApiTelemedicine();
        $lifestylePasien->fill($data);
        if ($this->model->save($lifestylePasien)) {
            return $this->respondUpdated($lifestylePasien, 'lifestyle Pasien Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_lifestyle_pasien ' => $id . ' Deleted']);
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
