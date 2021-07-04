<?php

namespace App\Controllers\Konten\artikel;

use App\Controllers\BaseController;

class TambahArtikel extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'tambah artikel'
        ];
        return view('pages\konten\artikel\tambahartikel', $data);
    }
}
