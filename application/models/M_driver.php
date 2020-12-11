<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_driver extends CI_Model
{
    public function add_DataSuratKonfrimasi($data)
	{
		
		$this->db->insert('surat_jalan', $data);
    }
    public function lihatsuratkonfirmasi()
	{
		$this->db->select('driver.id_driver, driver.nama, driver.plat ,
		driver.tgl, driver.ket, driver.id_surat, surat_jalan.nosurat');
		$this->db->from('driver');
		$this->db->join('surat_jalan', 'surat_jalan.id_surat=driver.id_surat');
		
			return $this->db->get()->result_array();

	}
	public function ubahDataSurat($data, $id_surat)
	{

		$this->db->where('id_surat', $id_surat);
		$this->db->update('surat_jalan', $data);
	}
}