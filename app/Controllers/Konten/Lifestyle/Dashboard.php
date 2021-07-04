<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dashboard'
        ];
        return view('pages\konten\lifestyle\dashboard', $data);
    }
}
