<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	
	public function data_pelamar($id_perusahaan)
	{

		return $this->db->get_where('data_pelamar', $id_perusahaan);
	}
	public function biodata()
	{
		$this->db->query('SELECT * FROM biodata');
	}
	public function add_datamaterial($data)
	{
		$this->db->insert('material', $data);
	}
	public function ubahDataMaterial($data, $kd_mt)
	{

		$this->db->where('kd_mt', $kd_mt);
		$this->db->update('material', $data);
	}
	public function deleteDataMaterial($kd_mt)
	{
		$this->db->where('kd_mt', $kd_mt);
		$this->db->delete('material');
	}
	public function add_datapart($data)
	{
		$this->db->insert('part', $data);
	}
	public function ubahDataPart($data, $kd_part)
	{

		$this->db->where('kd_part', $kd_part);
		$this->db->update('part', $data);
	}
	public function deleteDataPart($kd_part)
	{
		$this->db->where('kd_part', $kd_part);
		$this->db->delete('part');
	}
	public function add_dataperusahaan($data)
	{
		$this->db->insert('perusahaan', $data);
	}
	public function ubahDataPerusahaan($data, $id_perusahaan)
	{

		$this->db->where('id_perusahaan', $id_perusahaan);
		$this->db->update('perusahaan', $data);
	}
	public function deleteDataPerusahaan($id_perusahaan)
	{
		$this->db->where('id_perusahaan', $id_perusahaan);
		$this->db->delete('perusahaan');
	}
	public function add_DataSurat($data)
	{
		$this->db->insert('surat_jalan', $data);
	}
	public function ubahDataSurat($data, $id_surat)
	{

		$this->db->where('id_surat', $id_surat);
		$this->db->update('surat_jalan', $data);
	}
	public function ubahDataUserList($data, $id)
	{

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
	public function ubahDataPolibox($data, $id_polibox)
	{

		$this->db->where('id_polibox', $id_polibox);
		$this->db->update('polibox', $data);
	}
	public function lihatsurat()
	{
		$this->db->select('surat_jalan.id_surat, surat_jalan.nosurat, surat_jalan.kd_part , surat_jalan.status,
		surat_jalan.part, surat_jalan.jml, surat_jalan.po,surat_jalan.wo, surat_jalan.alamat,surat_jalan.pengirim,surat_jalan.alamat_pengirim,
		surat_jalan.tgl, surat_jalan.keterangan,surat_jalan.id_perusahaan, perusahaan.nama_perusahaan');
		$this->db->from('surat_jalan');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan=surat_jalan.id_perusahaan');
		
			return $this->db->get()->result_array();

	}
	public function lihatsurat2($id)
	{
		$this->db->select('surat_jalan.id_surat, surat_jalan.nosurat, surat_jalan.kd_part ,surat_jalan.status,
		surat_jalan.part, surat_jalan.jml, surat_jalan.po,surat_jalan.wo, surat_jalan.alamat,surat_jalan.pengirim,surat_jalan.alamat_pengirim,
		surat_jalan.tgl, surat_jalan.keterangan,surat_jalan.id_perusahaan, perusahaan.nama_perusahaan,perusahaan.telp');
		$this->db->from('surat_jalan');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan=surat_jalan.id_perusahaan');
		$this->db->where('surat_jalan.id_surat', $id);
			return $this->db->get()->result_array();

	}
	public function lihatsuratminjem()
	{
		$this->db->select('polibox.id_polibox, polibox.part, polibox.jml ,
		polibox.tgl, polibox.ket,polibox.pengirim,polibox.alamat,polibox.alamat_pengirim, polibox.id_perusahaan, perusahaan.nama_perusahaan');
		$this->db->from('polibox');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan=polibox.id_perusahaan');
		
			return $this->db->get()->result_array();

	}
	public function lihatsuratminjem2($id)
	{
		$this->db->select('polibox.id_polibox, polibox.part, polibox.jml ,
		polibox.tgl, polibox.ket,polibox.pengirim,polibox.alamat,polibox.alamat_pengirim, polibox.id_perusahaan, perusahaan.nama_perusahaan');
		$this->db->from('polibox');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan=polibox.id_perusahaan');
		$this->db->where('polibox.id_polibox', $id);
		
			return $this->db->get()->result_array();

	}
	public function lihatberita()
	{
		$this->db->select('berita.id_berita, berita.perusahaan ,
		berita.penerima, berita.jml,berita.tgl_berita,berita.keterangan ,berita.nosurat, surat_jalan.nosurat, surat_jalan.kd_part ,
		surat_jalan.part,surat_jalan.po,surat_jalan.wo, surat_jalan.alamat,surat_jalan.pengirim,surat_jalan.alamat_pengirim,
		surat_jalan.tgl');
		$this->db->from('berita');
		$this->db->join('surat_jalan', 'surat_jalan.nosurat = berita.nosurat');
		
			return $this->db->get()->result_array();

	}
	public function lihatberita2($id)
	{
		$this->db->select('berita.id_berita, berita.perusahaan ,
		berita.penerima, berita.jml,berita.tgl_berita,berita.keterangan ,berita.nosurat, surat_jalan.nosurat, surat_jalan.kd_part ,
		surat_jalan.part,surat_jalan.po,surat_jalan.wo, surat_jalan.alamat,surat_jalan.pengirim,surat_jalan.alamat_pengirim,
		surat_jalan.tgl');
		$this->db->from('berita');
		$this->db->join('surat_jalan', 'surat_jalan.nosurat = berita.nosurat');
		$this->db->where('berita.id_berita', $id);
		
			return $this->db->get()->result_array();

	}
	public function lihatpolibox()
	{
		$this->db->select('surat_pengembalian.id_surat, surat_pengembalian.perusahaan ,
		surat_pengembalian.penerima, surat_pengembalian.jml_kembali,surat_pengembalian.tgl_kembali,surat_pengembalian.keterangan,surat_pengembalian.id_polibox,
		 polibox.id_polibox, polibox.part,polibox.jml,polibox.alamat,polibox.alamat_pengirim,polibox.tgl');
		$this->db->from('surat_pengembalian');
		$this->db->join('polibox', 'polibox.id_polibox = surat_pengembalian.id_polibox');
		
			return $this->db->get()->result_array();

	}
	public function lihatpolibox2($id)
	{
		$this->db->select('surat_pengembalian.id_surat, surat_pengembalian.perusahaan ,
		surat_pengembalian.penerima, surat_pengembalian.jml_kembali,surat_pengembalian.tgl_kembali,surat_pengembalian.keterangan,surat_pengembalian.id_polibox,
		 polibox.id_polibox, polibox.part,polibox.jml,polibox.alamat,polibox.alamat_pengirim,polibox.tgl');
		$this->db->from('surat_pengembalian');
		$this->db->join('polibox', 'polibox.id_polibox = surat_pengembalian.id_polibox');
		$this->db->where('surat_pengembalian.id_surat', $id);
		
			return $this->db->get()->result_array();

	}
	public function add_DataSuratMinjem($data)
	{
		$this->db->insert('polibox', $data);
	}


	public function approve($id)
	{
		$this->db->query("UPDATE user_job_vacancy set status=1 WHERE id='$id'");
	}
	public function revoke($id)
	{
		$this->db->query("DELETE from user_job_vacancy WHERE id='$id'");
	}

	public function count()
	{
		$sql = "SELECT count(role_id) as role_id  FROM user WHERE role_id = 2";
		$result = $this->db->query($sql);
		return $result->row()->role_id;
	}
	public function countDriver()
	{
		$sql = "SELECT count(role_id) as role_id  FROM user WHERE role_id = 3";
		$result = $this->db->query($sql);
		return $result->row()->role_id;
	}
	public function hitungsurat()
	{
		$sql = "SELECT count(id_surat) as surat_jalan  FROM surat_jalan ";
		$result = $this->db->query($sql);
		return $result->row()->surat_jalan;
	}
	public function hitungRapot()
	{
		$sql = "SELECT count(id_berita) as berita  FROM berita ";
		$result = $this->db->query($sql);
		return $result->row()->berita;
	}

}
