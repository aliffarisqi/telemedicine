<?php

namespace App\Controllers\Konten;

use App\Controllers\BaseController;

class Konten extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Konten'
        ];
        return view('pages\konten\konten', $data);
    }
}
