<?php

namespace App\Controllers\Konten\Lifestyle;

use App\Controllers\BaseController;

class EditPertanyaan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Edit Pertanyaan Lifestyle'
        ];
        return view('pages\konten\lifestyle\editpertanyaan', $data);
    }
}
