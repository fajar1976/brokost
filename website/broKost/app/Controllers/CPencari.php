<?php

namespace App\Controllers;

class CPencari extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\MPencari();
    }
    public function index()
    {
        return view('pages/vpencari');
    }
    public function simpan()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'Nama' => [
                'label' => 'Nama',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'Alamat' => [
                'label' => 'Alamat',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'Fasilitas' => [
                'label' => 'Fasilitas',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'Ukuran' => [
                'label' => 'Ukuran',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'Lantai' => [
                'label' => 'Lantai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'Harga' => [
                'label' => 'Harga',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'Jenis' => [
                'label' => 'Jenis',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
            'MinimalBulan' => [
                'label' => 'MinimalBulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    //'min_length' => 'Minimum Karakter untuk field {field} adalah 2 karakter'
                ]
            ],
        ];
        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $Nama = $this->request->getPost('nama');
            $Alamat = $this->request->getPost('alamat');
            $Fasilitas = $this->request->getPost('fasilitas');
            $Ukuran = $this->request->getPost('ukuran');
            $Lantai = $this->request->getPost('lantai');
            $Harga = $this->request->getPost('harga');
            $Jenis = $this->request->getPost('id_Jenis');
            $MinimalBulan = $this->request->getPost('id_pemilik');

            $data = [
                'Nama' => $Nama,
                'Alamat' => $Alamat,
                'Fasilitas' => $Fasilitas,
                'Ukuran' => $Ukuran,
                'Lantai' => $Lantai,
                'Harga ' => $Harga,
                "Jenis" => $Jenis,
                'MinimalBulan' => $MinimalBulan


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
}
