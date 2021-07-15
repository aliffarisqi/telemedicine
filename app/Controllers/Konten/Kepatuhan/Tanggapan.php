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
        session();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kode = [
                'kode' => $keyword
            ];
        } else {
            $kode = $this->kuesioner->first();
        }

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'title' => 'Tanggapan Kuesioner',
            //untuk menampilkan jumlah tanggapan sesuai kode
            'jumlahtanggapan' => count($this->tanggapan->getTanggapanKuesionerPasienGroup($kode['kode'])),
            //menamilkan nama orang yang sudah mengisi sesuai kode
            'nama' => $this->tanggapan->getTanggapanKuesionerPasienGroup($kode['kode']),
            //untuk menampilkan list
            'listkuesioner' => $this->tanggapan->getListKuesioner(),
            //menampilkan jumlah pertaaan kuesioner
            'tanggapan' => $this->kuesioner->getKuesioner(),
            //menampilkan hasil tanggapan
            'join' => $this->tanggapan->getTanggapanKuesionerPasien($kode['kode']),
            //join saat ini
            'currentkuesioner' => $kode['kode'],
            'hariini' => date('Y - m - d')
        ];
        return view('pages\konten\kepatuhan\tanggapan', $data);
    }
}
