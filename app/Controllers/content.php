<?php

namespace App\Controllers;

class Content extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Content'
        ];
        return view('pages\content', $data);
    }
}
