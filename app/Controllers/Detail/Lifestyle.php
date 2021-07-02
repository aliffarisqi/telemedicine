<?php

namespace App\Controllers\Detail;

use App\Controllers\BaseController;

class Lifestyle extends BaseController
{
    public function index()
    {
        return view('pages/detail/lifestyle');
    }
    public function edukasiperilaku($tabel)
    {
        $data = [
            'tabel' => 'edukasi perilaku'
        ];
        return view('pages/detail/lifestyle', $data);
    }
    public function polamakan($tabel)
    {
        $data = [
            'tabel' => 'pola makan'
        ];
        return view('pages/detail/lifestyle', $data);
    }
    public function perilakuolahraga($tabel)
    {
        $data = [
            'tabel' => 'perilaku olahraga'
        ];
        return view('pages/detail/lifestyle', $data);
    }
}
