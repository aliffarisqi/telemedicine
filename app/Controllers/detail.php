<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function index()
    {
        return view('pages\detail');
    }

    public function home()
    {
        $data = [
            'title' => 'detail'
        ];
        return view('pages\detail', $data);
    }
}
