<?php

namespace App\Controllers\Detail;

use App\Controllers\BaseController;

class Detail extends BaseController
{
    public function index()
    {
        return view('pages\detail\detail');
    }
}
