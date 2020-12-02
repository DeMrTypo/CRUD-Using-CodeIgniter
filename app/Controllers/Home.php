<?php

namespace App\Controllers;

use App\Models\ModelMahasiswa;

class Home extends BaseController
{
	protected $modelmhs;
	public function __construct()
	{
		$this->modelmhs = new ModelMahasiswa;
	}
	public function index()
	{
		// $db = \Config\Database::connect();
		// $mahasiswa = $db->query("SELECT * FROM tb_mahasiswa");
		// dd($mahasiswa);
		return view('LandingPage');
	}

	public function view()
	{
		$mhs = $this->modelmhs->findAll();
		$data =
			[
				'mhs' => $mhs
			];

		return view('View', $data);
	}

	public function create()
	{
		return view('Create');
	}
	public function delete()
	{
		$mhs = $this->modelmhs->findAll();
		$data =
			[
				'mhs' => $mhs
			];
		return view('Delete', $data);
	}
	public function update()
	{
		$mhs = $this->modelmhs->findAll();
		$data =
			[
				'mhs' => $mhs
			];
		return view('Update', $data);
	}
	public function tambah()
	{
		if (empty($this->request->getVar())) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Anda Belum Memasukkan Data , Silahkan tekan back di browser anda untuk kembali');
		} else {
			$this->modelmhs->insert(
				[
					'NIM' => $this->request->getVar('nim'),
					'Nama' => $this->request->getVar('namalengkap'),
					'Kota_Asal' => $this->request->getVar('kota'),
					'Tanggal_Lahir' => $this->request->getVar('ttl'),
					'Nama_Ortu' => $this->request->getVar('naortu'),
					'Alamat_Ortu' => $this->request->getVar('alortu'),
					'Kode_Pos' => $this->request->getVar('kode'),
					'NoTelp' => $this->request->getVar('notelp'),
					'Status' => $this->request->getVar('status')
				]
			);
		}
		return redirect()->to('/Home/view');
	}
	public function DeleteController()
	{
		$nim = $this->request->getVar('nim');
		if (empty($this->request->getVar('nim'))) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Anda Belum Memasukkan Data , Silahkan tekan back di browser anda untuk kembali');
		} else {
			$this->modelmhs->where('NIM', $nim)->delete();
		}
		return redirect()->to('/Home/view');
	}
	public function update1()
	{
		$NIM = $this->request->getVar('nim');
		$bantu = $this->modelmhs->find($NIM);
		if (empty($this->request->getVar('nim'))) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Anda Belum Memasukkan Data , Silahkan tekan back di browser anda untuk kembali');
		} else if (empty($this->modelmhs->find($NIM))) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Nim yang anda masukkan tidak ada');
		} else {
			$data =
				[
					'd' => $bantu
				];
			return view('update1', $data);
		}
	}
	public function edit()
	{
		$nim = $this->request->getVar('nim');

		if (empty($this->request->getVar())) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Anda Belum Memasukkan Data , Silahkan tekan back di browser anda untuk kembali');
		} else {
			$this->modelmhs->update(
				$nim,
				[
					'Nama' => $this->request->getVar('namalengkap'),
					'Kota_Asal' => $this->request->getVar('kota'),
					'Tanggal_Lahir' => $this->request->getVar('ttl'),
					'Nama_Ortu' => $this->request->getVar('naortu'),
					'Alamat_Ortu' => $this->request->getVar('alortu'),
					'Kode_Pos' => $this->request->getVar('kode'),
					'NoTelp' => $this->request->getVar('notelp'),
					'Status' => $this->request->getVar('status')
				]
			);
		}
		session()->setFlashdata('Pesan', 'Data berhasil Dirubah');
		return redirect()->to('/Home/view');
	}
	//--------------------------------------------------------------------

}
