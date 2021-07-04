<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;

class TambahPertanyaan extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Tambah Pertanyaan'
        ];
        return view('/pages/konten/lifestyle/tambahpertanyaan', $data);
    }
}
