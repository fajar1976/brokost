<?php

namespace App\Controllers;

class CKost extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\MKost();
    }
    public function simpan()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'nama' => [
                'label' => 'nama',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'alamat' => [
                'label' => 'alamat',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'fasilitas' => [
                'label' => 'fasilitas',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'ukuran' => [
                'label' => 'ukuran',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'lantai' => [
                'label' => 'lantai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'harga' => [
                'label' => 'harga',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'id_jenis' => [
                'label' => 'id_jenis',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'id_pemilik' => [
                'label' => 'id_pemilik',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
        ];
        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $Nama = $this->request->getPost('nama_kost');
            $Alamat = $this->request->getPost('alamat');
            $Fasilitas = $this->request->getPost('fasilitas');
            $Ukuran = $this->request->getPost('ukuran');
            $Lantai = $this->request->getPost('lantai');
            $Harga = $this->request->getPost('harga');
            $Pemilik = $this->request->getPost('id_pemilik');
            $Jenis = $this->request->getPost('id_jenis');

            $data = [
                'nama_kost' => $Nama,
                'alamat' => $Alamat,
                'fasiltas' => $Fasilitas,
                'ukuran' => $Ukuran,
                'lantai' => $Lantai,
                'harga ' => $Harga,
                'id_Jenis' => $Jenis,
                'id_Pemilik' => $Pemilik


            ];

            $this->model->save($data);
            $hasil['sukses'] = "Berhasil memasukan data";
            $hasil['error'] = true;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }


        return json_encode($hasil);
    }
    public function index()
    {
        $data['dataKost'] = $this->model->orderBy('id_kost', 'desc')->findAll();
        return view('pages/vkost', $data);
    }
}
