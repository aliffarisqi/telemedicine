<?php

namespace App\Controllers\Konten\Kepatuhan;

use App\Controllers\BaseController;
use App\Models\Konten\Kuesioner\KuesionerModels;
use App\Models\Konten\Kuesioner\KuesionerPasienModels;

class Tanggapan extends BaseController
{
    protected $tanggapan;
    protected $kuesioner;
    public function __construct()
    {
        $this->tanggapan = new KuesionerPasienModels();
        $this->kuesioner = new KuesionerModels();
    }
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'title' => 'Tanggapan Kuesioner',
            'tanggapan' => $this->tanggapan->getKuesionerPasien(),
            'jumlahtanggapan' => count($this->tanggapan->getKuesionerPasien()),
            'tanggapan' => $this->kuesioner->getKuesioner(),
            'hariini' => date('Y - m - d')

        ];
        return view('pages\konten\kepatuhan\tanggapan', $data);
    }
}
