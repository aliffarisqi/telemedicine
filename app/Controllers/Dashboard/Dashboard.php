<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Dashboard\ListPasienModel;
use App\Models\Dashboard\Dashboard\PesanModels;

class Dashboard extends BaseController
{
    protected $listPasienModel;
    protected $datapesan;
    public function __construct()
    {
        $this->listPasienModel = new ListPasienModel();
        $this->datapesan = new PesanModels();
    }
    public function index()
    {
        session();
        $data = [
            'title' => 'home',
            'listpasien' => $this->listPasienModel->getListPasien()
        ];
        return view('pages\dashboard\dashboard', $data);
    }
    public function kirimpesan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $jumlah = 1;
        foreach ($_POST['pasienpenerima'] as $result) {
            $jumlah++;
        }
        if ($jumlah > 2) {
            foreach ($_POST['pasienpenerima'] as $result) {
                if ($result != "0") {
                    $this->datapesan->save([
                        'id_pasien' => $result,
                        'isi_pesan' => htmlspecialchars($this->request->getVar('pesan')),
                        'status' => '1',
                        'tanggal_pesan' => date('Y:m:d'),
                        'waktu_pesan' => date('H:i:s'),
                    ]);
                }
            }
        } else {
            session()->setFlashdata('pesangagal', 'Pesan gagal ditambahkan');
            return redirect()->to('/dashboard/dashboard');
        }
        session()->setFlashdata('pesan', 'Pesan berhasil ditambahkan');
        return redirect()->to('/dashboard/dashboard');
    }
}
