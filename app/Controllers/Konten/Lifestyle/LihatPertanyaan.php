<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;

class LihatPertanyaan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pertanyaan'
        ];
        return view('pages\konten\lifestyle\lihatpertanyaan', $data);
    }
}
