<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		 parent::__construct();
		 $this->load->model('model_pegawai', 'pegawai');
	}

	public function data_pegawai()
	{
		$data = array(
			'pegawai' => $this->pegawai->getAllPegawai()->result(),
			'title' =>  "Dashboard Admin",
		);
	   $this->load->view('template/header');
	   $this->load->view('content/data_pegawai', $data);
	//    $this->load->view('template/footer');
	}

	public function add_pegawai ()
    {
        $data = $this->input->post();

		$add = $this->pegawai->addPegawai($data);
		if ($add)
		{
			$this->session->set_flashdata('success', 'Tambah Data Supplier Berhasil');
			redirect('admin/data_pegawai');
		}  
    }

	public function update_pegawai ()
    {
        $data = $this->input->post();
        

			$update = $this->pegawai->updatePegawai($data);
			
			if ($update)
			{
				$this->session->set_flashdata('success', 'Update Data Berhasil');
            	redirect('admin/data_pegawai');
			}
		
    }

	public function data_kontrak()
	{
		$data = array(
			'pegawai' => $this->pegawai->getAllKontrak()->result(),
			'title' =>  "Dashboard Admin",
		);
	   $this->load->view('template/header');
	   $this->load->view('content/data_kontrak', $data);
	//    $this->load->view('template/footer');
	}

	public function add_kontrak ()
    {
        
        $data = $this->input->post();
                    
		$add = $this->pegawai->addKontrak($data);
		if ($add)
		{
			$this->session->set_flashdata('success', 'Tambah Data Kontrak Berhasil');
			redirect('admin/data_kontrak');
		}   
    }

	public function update_kontrak ()
    {
		// $jab = $this->input->post('kode_jabatan');
        $data = $this->input->post();
        
		$update = $this->pegawai->updateKontrak($data);
			
		if ($update)
		{
			$this->session->set_flashdata('success', 'Update Data Berhasil');
			redirect('admin/data_kontrak');
		}
    }

	public function data_jabatan()
	{
		$data = array(
			'pegawai' => $this->pegawai->getAllJabatan()->result(),
			'title' =>  "Dashboard Admin",
		);
	   $this->load->view('template/header');
	   $this->load->view('content/data_jabatan', $data);
	//    $this->load->view('template/footer');
	}

	public function add_jabatan ()
    {
        
        $jab = $this->input->post('kode_jabatan');
        $data = $this->input->post();
        
            

		if ($this->pegawai->getKodePegawai($jab)->num_rows() > 0)
            {
                $this->session->set_flashdata('avaible','Kode jabatan Sudah Ada !');
                redirect('welcome/add_jabatan');
        }
		else {
			$add = $this->pegawai->addJabatan($data);
			if ($add)
			{
				$this->session->set_flashdata('success', 'Tambah Data Supplier Berhasil');
				redirect('admin/data_jabatan');
			}
		}    
    }

	public function update_jabatan ()
    {
		// $jab = $this->input->post('kode_jabatan');
        $data = $this->input->post();
        
		$update = $this->pegawai->updateJabatan($data);
			
		if ($update)
		{
			$this->session->set_flashdata('success', 'Update Data Berhasil');
			redirect('admin/data_jabatan');
		}
    }

	public function del_pegawai ($id)
    {
        $del = $this->pegawai->delPegawai($id);
        if ($del)
        {
            $this->session->set_flashdata('success', 'Delete Data Berhasil');
            redirect('admin/data_pegawai');
        }
    }

	public function del_kontrak ($id)
    {
        $del = $this->pegawai->delKontrak($id);
        if ($del)
        {
            $this->session->set_flashdata('success', 'Delete Data Berhasil');
            redirect('admin/data_kontrak	');
        }
    }

	public function del_jabatan ($id)
    {
        $del = $this->pegawai->delJabatan($id);
        if ($del)
        {
            $this->session->set_flashdata('success', 'Delete Data Berhasil');
            redirect('admin/data_jabatan');
        }
    }


}
