<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Dashboard\ListPasienModel;

class Dashboard extends BaseController
{
    protected $listPasienModel;
    public function __construct()
    {
        $this->listPasienModel = new ListPasienModel();
    }
    public function index()
    {
        $data = [
            'title' => 'home',
            'listpasien' => $this->listPasienModel->getListPasien()
        ];
        return view('pages\dashboard\dashboard', $data);
    }
}
