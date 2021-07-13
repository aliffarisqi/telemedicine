<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Dashboard\ListPasienModel;
use App\Models\Dashboard\Detail\AnalisisRekomendasiModels;

class Detail extends BaseController
{
    protected $listPasien;
    protected $analisisRekomendasi;
    public function __construct()
    {
        $this->listPasien = new ListPasienModel();
        $this->analisisRekomendasi = new AnalisisRekomendasiModels();
    }
    public function detailPasien($id)
    {
        session();
        $data = [
            'title' => 'Data Pasien',
            'datapasien' => $this->listPasien->getListPasien($id),
            'analisisrekomendasi' => $this->analisisRekomendasi->getAnalisisRekomendasi($id)
        ];
        return view('pages\detail\detail', $data);
    }
    public function tambahAnalisis()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_data_pasien = $this->request->getVar('iddatapasien');
        $this->analisisRekomendasi->save([
            'id_data_pasien' => $id_data_pasien,
            'judul' => htmlspecialchars($this->request->getVar('judul')),
            'note_analisis' => htmlspecialchars($this->request->getVar('noteanalisis')),
            'tanggal_analisis' => date('Y:m:d')
        ]);
        session()->setFlashdata('pesan', 'Berhasil Menambahkan Analisis');
        return redirect()->to('/dashboard/detail/detailPasien/' . $id_data_pasien);
    }
    public function deleteAnalisis()
    {
        $id = $this->request->getVar('id_analisis');
        $idpasien = $this->analisisRekomendasi->getIdPasienByanalisis($id);
        $idnew = $idpasien['id_data_pasien'];
        $this->analisisRekomendasi->delete($id);
        session()->setFlashdata('pesan', 'Pesan analisis Berhasil di Delete');
        return redirect()->to('/dashboard/detail/detailPasien/' . $idnew);
    }
}
