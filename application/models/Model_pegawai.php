<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_pegawai extends CI_model
{

   // Simpan $data register
   public function getAllPegawai()
   {
		$this->db->select('*');
		$this->db->from('tb_pegawai');
		$this->db->join('tb_jabatan', 'tb_pegawai.id_jabatan = tb_jabatan.id_jabatan');
		return $this->db->get();
   }

   public function getDataPegawai($data)
   {
		$this->db->select('*');
		$this->db->from('tb_pegawai');
		$this->db->join('tb_jabatan', 'tb_pegawai.id_jabatan = tb_jabatan.id_jabatan');
		$this->db->where('id_pegawai', $data);
		return $this->db->get();
   }


   public function addPegawai($data)
   {
		$param = array(
			'nama_pegawai' => $data['nama'],
			'jenis_kelamin' => $data['jenis_kelamin'],
			'telepon' => $data['telepon'],
            'alamat' => $data['alamat'],
            'id_jabatan' => $data['id_jabatan'],
        );
        return $this->db->insert('tb_pegawai', $param);
   }

   public function updatePegawai($data)
   {
	$param = array(
			'nama_pegawai' => $data['nama'],
			'jenis_kelamin' => $data['jenis_kelamin'],
			'telepon' => $data['telepon'],
            'alamat' => $data['alamat']
	);
	$this->db->where('id_pegawai', $data['id']);
	return $this->db->update('tb_pegawai', $param);
   }

   public function getAllKontrak()
   {
		$this->db->select('*');
		$this->db->from('tb_kontrak');
		$this->db->join('tb_pegawai', 'tb_kontrak.id_pegawai = tb_pegawai.id_pegawai');
		$this->db->join('tb_jabatan', 'tb_kontrak.id_jabatan = tb_jabatan.id_jabatan');
		return $this->db->get();
   }

   public function getDataKontrak($data)
   {
		$this->db->select('*');
		$this->db->from('tb_kontrak');
		$this->db->join('tb_pegawai', 'tb_kontrak.id_pegawai = tb_pegawai.id_pegawai');
		$this->db->join('tb_jabatan', 'tb_kontrak.id_jabatan = tb_jabatan.id_jabatan');
		$this->db->where('id_kontrak', $data);
		return $this->db->get();
   }

   public function addKontrak($data)
   {
		$param = array(
			'id_pegawai' => $data['id_pegawai'],
			'id_jabatan' => $data['id_jabatan'],
			'nilai_kontrak' => $data['nilai_kontrak'],
            'tanggal_awal' => $data['tanggal_awal'],
            'tanggal_akhir' => $data['tanggal_akhir'],
        );
        return $this->db->insert('tb_kontrak', $param);
   }

   public function updateKontrak($data)
   {
	$param = array(
		'id_pegawai' => $data['id_pegawai'],
		'id_jabatan' => $data['id_jabatan'],
		'nilai_kontrak' => $data['nilai_kontrak'],
		'tanggal_awal' => $data['tanggal_awal'],
		'tanggal_akhir' => $data['tanggal_akhir'],
	);
	$this->db->where('id_kontrak', $data['id']);
	return $this->db->update('tb_kontrak', $param);
   }

   public function getAllJabatan()
   {
		$this->db->select('*');
		$this->db->from('tb_jabatan');
		return $this->db->get();
   }

   public function getDataJabatan($data)
   {
		$this->db->select('*');
		$this->db->from('tb_jabatan');
		$this->db->where('id_jabatan', $data);
		return $this->db->get();
   }

   public function getKodePegawai($data)
   {
		$this->db->select('*');
		$this->db->from('tb_jabatan');
		$this->db->where('kode_jabatan', $data);
		return $this->db->get();
   }

   public function addJabatan($data)
   {
		$param = array(
			'kode_jabatan' => $data['kode_jabatan'],
            'jabatan' => $data['nama']
        );
        return $this->db->insert('tb_jabatan', $param);
   }

   public function updateJabatan($data)
   {
	$param = array(
		'kode_jabatan' => $data['kode_jabatan'],
        'jabatan' => $data['nama']
	);
	$this->db->where('id_jabatan', $data['id']);
	return $this->db->update('tb_jabatan', $param);
   }

   public function delPegawai($id)
    {
        $this->db->where('id_pegawai', $id);
        return $this->db->delete('tb_pegawai');
    }

   public function delKontrak($id)
    {
        $this->db->where('id_kontrak', $id);
        return $this->db->delete('tb_kontrak');
    }

   public function delJabatan($id)
    {
        $this->db->where('id_jabatan', $id);
        return $this->db->delete('tb_jabatan');
    }

}
