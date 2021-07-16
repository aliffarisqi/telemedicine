<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class DataLifestyle extends ResourceController
{
    protected $modelName = 'App\Models\Api\DataLifestyleModels';
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
        // $validate = $this->validation->run($data, 'data_lifestyle');

        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }
        $dataLifestyle = new \App\Entities\ApiTelemedicine();
        $dataLifestyle->fill($data);
        if ($this->model->save($dataLifestyle)) {
            return $this->respondCreated($dataLifestyle, 'dataLifestyle Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_datalifestyle'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        // $validate = $this->validation->run($data, 'datalifestyle_update');
        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $datalifestyle = new \App\Entities\ApiTelemedicine();
        $datalifestyle->fill($data);
        if ($this->model->save($datalifestyle)) {
            return $this->respondUpdated($datalifestyle, 'datalifestyle Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_datalifestyle ' => $id . ' Deleted']);
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
