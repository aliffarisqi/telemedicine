<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Lifestyle extends BaseController
{
    public function index()
    {
        return view('pages/detail/lifestyle');
    }
    public function edukasiperilaku($id)
    {
        $data = [
            'tabel' => 'edukasi perilaku',
            'idpasien' => $id
        ];
        return view('pages/detail/lifestyle', $data);
    }
    public function polamakan($id)
    {
        $data = [
            'tabel' => 'pola makan'
        ];
        return view('pages/detail/lifestyle', $data);
    }
    public function perilakuolahraga($id)
    {
        $data = [
            'tabel' => 'perilaku olahraga'
        ];
        return view('pages/detail/lifestyle', $data);
    }
}
