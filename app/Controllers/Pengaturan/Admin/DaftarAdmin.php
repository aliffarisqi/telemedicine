<?php

namespace App\Controllers\Pengaturan\Admin;

use App\Controllers\BaseController;
use App\Models\Pengaturan\Admin\AdminModels;
use App\Models\Pengaturan\Puskesmas\PuskesmasModels;

class DaftarAdmin extends BaseController
{
    protected $dataadmin;
    protected $datapuskesmas;
    public function __construct()
    {
        $this->dataadmin = new AdminModels();
        $this->datapuskesmas = new PuskesmasModels();
    }
    public function index()
    {
        session();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $admin = $this->dataadmin->search($keyword);
        } else {
            $admin = $this->dataadmin;
        }
        $currentPage = $this->request->getVar('page_admin') ? $this->request->getVar('page_admin') : 1;
        $data = [
            'title' => 'daftaradmin',
            'dataadmin' => $admin->paginate(5, 'admin'),
            'pager' => $this->dataadmin->pager,
            'currentpage' => $currentPage
        ];
        return view('pages\pengaturan\admin\daftaradmin', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'detail admin',
            'dataadmin' => $this->dataadmin->getAdminByPuskesmas($id)
        ];
        return view('pages\pengaturan\admin\detailadmin', $data);
    }
    public function tambah()
    {
        session();
        $data = [
            'title' => 'Tambah Admin',
            'validation' => \Config\Services::validation(),
            'datapuskesmas' => $this->datapuskesmas->getPuskesmas()
        ];
        return view('pages\pengaturan\admin\tambahadmin', $data);
    }
    public function tambahproses()
    {
        //validation
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi '
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[admin.email_admin]',
                'errors' => [
                    'required' => 'kolom {field} Harus di isi ',
                    'valid_email' => 'email yang anda masukan tidak valid',
                    'is_unique' => 'email ini Sudah terdaftar '
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[15]',
                'errors' => [
                    'required' => 'kolom {field} Harus diisi',
                    'min_length' => 'password anda terlalu pendek, minimal 6 character',
                    'max_length' => 'password anda terlalu panjang, maksimal 15 character'
                ]
            ],
            're-password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'kolom {field} Harus diisi',
                    'matches' => 'password yang anda masukan tidak sama'
                ]
            ]
        ])) {
            return redirect()->to('/pengaturan/admin/daftaradmin/tambah')->withInput();
        }
        //memasukan data ke database

        $this->dataadmin->save([
            'username_admin' => htmlspecialchars($this->request->getVar('username')),
            'email_admin' => htmlspecialchars($this->request->getVar('email')),
            'status' => htmlspecialchars($this->request->getVar('status')),
            'id_puskesmas' => htmlspecialchars($this->request->getVar('puskesmas')),
            'password_admin' => htmlspecialchars($this->request->getVar('password'))
        ]);
        session()->setFlashdata('pesan', 'Data admin berhasil ditambahkan');
        return redirect()->to('/pengaturan/admin/daftaradmin');
    }
    public function update($id)
    {
        session();
        $data = [
            'title' => 'Edit Admin',
            'validation' => \Config\Services::validation(),
            'datapuskesmas' => $this->datapuskesmas->getPuskesmas(),
            'dataadmin' => $this->dataadmin->getAdmin($id)
        ];
        return view('pages\pengaturan\admin\editadmin', $data);
    }
    public function updateproses()
    {
        $id = $this->request->getVar('id');
        $password = $this->request->getVar('password');
        $repassword = $this->request->getVar('re-password');
        $password = $this->request->getVar('passwordlama');
        //validation
        if ($password) {
            if (!$this->validate([
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'kolom {field} Harus di isi '
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email|is_unique[admin.email_admin]',
                    'errors' => [
                        'required' => 'kolom {field} Harus di isi ',
                        'valid_email' => 'email yang anda masukan tidak valid',
                        'is_unique' => 'email ini Sudah terdaftar '
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[6]|max_length[15]',
                    'errors' => [
                        'required' => 'kolom {field} Harus diisi',
                        'min_length' => 'password anda terlalu pendek, minimal 6 character',
                        'max_length' => 'password anda terlalu panjang, maksimal 15 character'
                    ]
                ],
                're-password' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'kolom {field} Harus diisi',
                        'matches' => 'password yang anda masukan tidak sama'
                    ]
                ]
            ])) {
                return redirect()->to('/pengaturan/admin/daftaradmin/update')->withInput();
            }
        }
        //memasukan data ke database
        echo "ok";
        // $this->dataadmin->save([
        //     'id_admin' => $id,
        //     'username_admin' => htmlspecialchars($this->request->getVar('username')),
        //     'email_admin' => htmlspecialchars($this->request->getVar('email')),
        //     'status' => htmlspecialchars($this->request->getVar('status')),
        //     'id_puskesmas' => htmlspecialchars($this->request->getVar('puskesmas')),
        //     'password_admin' => htmlspecialchars($this->request->getVar('password'))
        // ]);
        // session()->setFlashdata('pesan', 'Data admin berhasil ditambahkan');
        // return redirect()->to('/pengaturan/admin/daftaradmin');
    }
}
