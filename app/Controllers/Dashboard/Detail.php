<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Dashboard\ListPasienModel;
use App\Models\Dashboard\Detail\AlergiModels;
use App\Models\Dashboard\Detail\AnalisisRekomendasiModels;
use App\Models\Dashboard\Detail\PasienTekananDarahModels;
use App\Models\Dashboard\Detail\RiwayatKeluarga;
use App\Models\Dashboard\Detail\RiwayatPenyakit;
use App\Models\Dashboard\Detail\RiwayatObat;
use App\Models\Pengaturan\Puskesmas\PuskesmasModels;

class Detail extends BaseController
{
    protected $listPasien;
    protected $analisisRekomendasi;
    protected $dataPuskesmas;
    protected $dataTekananDarah;
    protected $dataAlergi;
    protected $dataPenyakit;
    protected $riwayatObat;
    protected $riwayatKeluarga;

    public function __construct()
    {
        $this->listPasien = new ListPasienModel();
        $this->analisisRekomendasi = new AnalisisRekomendasiModels();
        $this->dataPuskesmas = new PuskesmasModels();
        $this->dataTekananDarah = new PasienTekananDarahModels();
        $this->dataAlergi = new AlergiModels();
        $this->dataPenyakit = new RiwayatPenyakit();
        $this->riwayatObat = new RiwayatObat();
        $this->riwayatKeluarga = new RiwayatKeluarga();
    }
    public function detailPasien($id)
    {
        session();
        //dd($this->dataAlergi->getAlergi($id));
        $datapasien = $this->listPasien->getListPasien($id);
        $idpuskesmas = $datapasien['id_puskesmas'];
        $namapuskesmas = $this->dataPuskesmas->getPuskesmas($idpuskesmas);
        $data = [
            'title' => 'Data Pasien',
            'datapasien' => $datapasien,
            'namapuskesmas' => $namapuskesmas['nama_puskesmas'],
            'analisisrekomendasi' => $this->analisisRekomendasi->getAnalisisRekomendasi($id),
            'datatekanandarah' => $this->dataTekananDarah->getDataTekananDarah($id),
            'dataalergi' => $this->dataAlergi->getAlergi($id),
            'datapenyakit' => $this->dataPenyakit->getPenyakit($id),
            'riwayatobat' => $this->riwayatObat->getRiwayatObat($id),
            'riwayatkeluarga' => $this->riwayatKeluarga->getRiwayatKeluarga($id),
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
