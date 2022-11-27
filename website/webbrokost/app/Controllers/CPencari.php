<?php

namespace App\Controllers;

class CPencari extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\MPencari();
    }
    public function hapus($id_pencari)
    {
        $this->model->delete($id_pencari);
        return redirect()->to('cpencari');
    }
    public function edit($id_pencari)
    {
        return json_encode($this->model->find($id_pencari));
    }

    public function simpan()
    {
        $validasi  = \Config\Services::validation();
        $aturan = [
            'nama_pencari' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'jenis_kelamin' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'pekerjaan' => [
                'label' => 'Pekerjaan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'no_hp' => [
                'label' => 'Telepon',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|min_length[5]|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter',
                    'valid_email' => 'Email yang kamu masukkan tidak valid'
                ]
            ],
            'username' => [
                'label' => 'username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'katasandi' => [
                'label' => 'katasandi',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $id_pencari = $this->request->getPost('id_pencari');
            $nama_pencari = $this->request->getPost('nama_pencari');
            $alamat = $this->request->getPost('alamat');
            $jenis_kelamin = $this->request->getPost('jenis_kelamin');
            $pekerjaan = $this->request->getPost('pekerjaan');
            $no_hp = $this->request->getPost('no_hp');
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $katasandi = $this->request->getPost('katasandi');


            $data = [
                'id_pencari' => $id_pencari,
                'nama_pencari' => $nama_pencari,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'pekerjaan' => $pekerjaan,
                'no_hp' => $no_hp,
                'email' => $email,
                'username' => $username,
                'katasandi' => $katasandi
            ];

            $this->model->save($data);

            $hasil['sukses'] = "Berhasil memasukkan data";
            $hasil['error'] = true;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }


        return json_encode($hasil);
    }
    public function index()
    {
        $jumlahBaris = 5;
        $katakunci = $this->request->getGet('katakunci');
        if ($katakunci) {
            $pencarian = $this->model->cari($katakunci);
        } else {
            $pencarian = $this->model;
        }
        $data['katakunci'] = $katakunci;
        $data['dataPencari'] = $pencarian->orderBy('id_pencari', 'desc')->paginate($jumlahBaris);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('vpencari', $data);
    }
}
