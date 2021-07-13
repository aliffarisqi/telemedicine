<?php

namespace App\Controllers\Pengaturan;

use App\Controllers\BaseController;

class PengaturanAdmin extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Pengaturan'
        ];
        return view('pages\pengaturan\pengaturanadmin', $data);
    }
}
