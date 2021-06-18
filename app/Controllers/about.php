<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'about me'
        ];
        return view('pages\about', $data);
    }
}
