<?php

namespace App\Controllers\Konten\Kepatuhan;

use App\Controllers\BaseController;

class Tanggapan extends BaseController
{
    public function index()
    {
        return view('pages\konten\kepatuhan\tanggapan');
    }
}
