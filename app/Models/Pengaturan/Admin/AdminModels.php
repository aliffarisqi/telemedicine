<?php

namespace App\Models\Pengaturan\Admin;

use CodeIgniter\Model;

class AdminModels extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['username_admin', 'email_admin', 'password_admin', 'id_puskesmas', 'status', 'is_active'];
    public function getAdmin($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_admin' => $id])->first();
    }
    public function getAdminByPuskesmas($id)
    {
        return $this->db->table('admin')
            ->join('puskesmas', 'admin.id_puskesmas = puskesmas.id_puskesmas')
            ->where('admin.id_admin', $id)->get()->getResult();
    }
    public function search($keyword)
    {
        return $this->table('admin')->like('username_admin', $keyword)->orLike('status', $keyword);
    }
}
