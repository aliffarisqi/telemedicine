<?php

namespace App\Controllers\Pengaturan;

use App\Controllers\BaseController;

class DaftarAdmin extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'daftaradmin'
        ];
        return view('pages\pengaturan\admin\daftaradmin', $data);
    }
}
