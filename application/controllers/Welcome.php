<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		 parent::__construct();
		 $this->load->model('model_pegawai', 'pegawai');
	}

	public function index()
	{
		$data = array(
			'title' =>  "Dashboard Admin",
		);
	   $this->load->view('template/header');
	   $this->load->view('content/dashboard', $data);
	   $this->load->view('template/footer');
	}

	public function add_pegawai()
	{
		$data = array(
			'jabatan' => $this->pegawai->getAllJabatan()->result(),
			'title' => 'Tambah Data Pegawai',
			'button' => 'tambah',
			'link' => 'index.php/admin/add_pegawai'
		);

		$this->load->view('template/header');
		$this->load->view('content/pegawai', $data);
		$this->load->view('template/footer');
	}

	public function edit_pegawai($id = null)
	{
		if (isset($id))
		{
			$data = array(
				'jabatan' => $this->pegawai->getAllJabatan()->result(),
				'pegawai' => $this->pegawai->getDataPegawai($id)->row(),
				'title' => 'Edit Data Pegawai',
				'button' => 'edit',
				'link' => 'index.php/admin/update_pegawai'
			);

			$this->load->view('template/header');
			$this->load->view('content/pegawai', $data);
			$this->load->view('template/footer');
		}
		else
		{
			redirect('admin/data_jabatan');
		}
	}

	public function add_kontrak()
	{
		$data = array(
			'pegawai' => $this->pegawai->getAllPegawai()->result(),
			'jabatan' => $this->pegawai->getAllJabatan()->result(),
			'title' => 'Tambah Data Kontrak',
			'button' => 'tambah',
			'link' => 'index.php/admin/add_kontrak'
		);

		$this->load->view('template/header');
		$this->load->view('content/kontrak', $data);
		$this->load->view('template/footer');
	}

	public function edit_kontrak($id = null)
	{
		if (isset($id))
		{
			$data = array(
				'pegawai' => $this->pegawai->getAllPegawai()->result(),
				'jabatan' => $this->pegawai->getAllJabatan()->result(),
				'kontrak' => $this->pegawai->getDataKontrak($id)->row(),
				'title' => 'Edit Data Kontrak',
				'button' => 'edit',
				'link' => 'index.php/admin/update_kontrak'
			);

			$this->load->view('template/header');
			$this->load->view('content/kontrak', $data);
			$this->load->view('template/footer');
		}
		else
		{
			redirect('admin/data_jabatan');
		}
	}

	public function add_jabatan()
	{
		$data = array(
			'title' => 'Tambah Data Jabatan',
			'button' => 'tambah',
			'link' => 'index.php/admin/add_jabatan'
		);

		$this->load->view('template/header');
		$this->load->view('content/jabatan', $data);
		$this->load->view('template/footer');
	}
	
	public function edit_jabatan($id = null)
	{
		if (isset($id))
		{
			$data = array(
				'jabatan' => $this->pegawai->getDataJabatan($id)->row(),
				'title' => 'Edit Data Jabatan',
				'button' => 'edit',
				'link' => 'index.php/admin/update_jabatan'
			);

			$this->load->view('template/header');
			$this->load->view('content/jabatan', $data);
			$this->load->view('template/footer');
		}
		else
		{
			redirect('admin/data_jabatan');
		}
	}


}
