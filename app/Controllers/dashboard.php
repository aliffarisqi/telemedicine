<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'home'
        ];
        return view('pages\dashboard', $data);
    }
}
