<?php

namespace App\Controllers\Konten\Kepatuhan;

use App\Controllers\BaseController;

class KuesionerKepatuhan extends BaseController
{
    public function index()
    {
        return view('pages\konten\kepatuhan\kuesioner');
    }
}
