<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Alergi extends ResourceController
{
    protected $modelName = 'App\Models\Api\AlergiModels';
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
        // $validate = $this->validation->run($data, 'admin');
        // $errors = $this->validation->run($data, 'alergi');
        // if ($errors) {
        //     return $this->fail($errors);
        // }
        $alergi = new \App\Entities\ApiTelemedicine();
        $alergi->fill($data);
        if ($this->model->save($alergi)) {
            return $this->respondCreated($alergi, 'data alergi added');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_alergi'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        // $validate = $this->validation->run($data, 'alergi_update');
        // $errors = $this->validation->getErrors();
        // if($errors){
        //     return $this->fail($errors);
        // }
        $alergi = new \App\Entities\ApiTelemedicine();
        $alergi->fill($data);
        if ($this->model->save($alergi)) {
            return $this->respondUpdated($alergi, ' Alergi succes update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak Ditemukan ');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_alergi ' => $id . ' Deleted']);
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
