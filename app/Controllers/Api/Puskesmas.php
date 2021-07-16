<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Puskesmas extends ResourceController
{
    protected $modelName = 'App\Models\Api\PuskesmasModels';
    protected $format = 'json';

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        return $this->respond($this->model->findAll());
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
