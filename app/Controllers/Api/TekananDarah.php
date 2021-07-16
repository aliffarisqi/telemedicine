<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class TekananDarah extends ResourceController
{
    protected $modelName = 'App\Models\Api\TekananDarahModels';
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
        // $validate = $this->validation->run($data, 'tekanan_darah');

        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $tekananDarah = new \App\Entities\ApiTelemedicine();
        $tekananDarah->fill($data);
        if ($this->model->save($tekananDarah)) {
            return $this->respondCreated($tekananDarah, 'Tekanan Darah Created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id_tekanan_darah'] = $id;
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' tidak ditemukan');
        }
        // $validate = $this->validation->run($data, 'tekanan_darah_update');
        // $errors = $this->validation->getErrors();
        // if ($errors) {
        //     return $this->fail($errors);
        // }

        $tekananDarah = new \App\Entities\ApiTelemedicine();
        $tekananDarah->fill($data);
        if ($this->model->save($tekananDarah)) {
            return $this->respondUpdated($tekananDarah, 'tekananDarah Update');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('ID ' . $id . ' Tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id_tekanan_darah' => $id . ' Deleted']);
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
