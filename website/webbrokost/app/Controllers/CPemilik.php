<?php

namespace App\Controllers;

class CPemilik extends BaseController
{
	function __construct()
	{
		$this->model = new \App\Models\MPemilik();
	}
	public function hapus($id_pemilik)
	{
		$this->model->delete($id_pemilik);
		return redirect()->to('cpemilik');
	}
	public function edit($id_pemilik)
	{
		return json_encode($this->model->find($id_pemilik));
	}

	public function simpan()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'nama_pemilik' => [
				'label' => 'Nama',
				'rules' => 'required',
				'errors' => [
					//'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
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
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
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
			$id_pemilik = $this->request->getPost('id_pemilik');
			$nama_pemilik = $this->request->getPost('nama_pemilik');
			$alamat = $this->request->getPost('alamat');
			$no_hp = $this->request->getPost('no_hp');
			$email = $this->request->getPost('email');
			$username = $this->request->getPost('username');
			$katasandi = $this->request->getPost('katasandi');


			$data = [
				'id_pemilik' => $id_pemilik,
				'nama_pemilik' => $nama_pemilik,
				'alamat' => $alamat,
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
		$data['dataPemilik'] = $pencarian->orderBy('id_pemilik', 'desc')->paginate($jumlahBaris);
		$data['pager'] = $this->model->pager;
		$data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
		return view('vpemilik', $data);
	}
}
