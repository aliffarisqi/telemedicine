<?php

namespace App\Models\Konten\Kuesioner;

use CodeIgniter\Model;

class KuesionerPasienModels extends Model
{
    protected $table = 'kuesioner_pasien';
    protected $primaryKey = 'id_kuesioner_pasien';
    protected $allowedFields = ['id_pasien', 'idpertanyaan', 'hasil'];
    public function getKuesionerPasien($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_pasien' => $id])->find();
    }
    public function getListKuesioner()
    {
        return $this->groupBy('kode')->findAll();
    }
    public function getTanggapanKuesionerPasien($kode)
    {
        return $this->db->table('kuesioner_pasien')
            ->join('kuesioner', 'kuesioner_pasien.id_kuesioner = kuesioner.id_kuesioner')
            ->join('data_pasien', 'kuesioner_pasien.id_pasien=data_pasien.id_data_pasien')
            ->where('kuesioner_pasien.kode', $kode)->get()->getResultArray();
    }
    public function getTanggapanKuesionerPasienGroup($kode)
    {
        return $this->db->table('kuesioner_pasien')
            ->join('kuesioner', 'kuesioner_pasien.id_kuesioner = kuesioner.id_kuesioner')
            ->join('data_pasien', 'kuesioner_pasien.id_pasien=data_pasien.id_data_pasien')
            ->groupBy('data_pasien.nama')
            ->where('kuesioner_pasien.kode', $kode)->get()->getResultArray();
    }
}
