<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_customer extends CI_Model
{
    public function add_DataSuratTerima($data)
	{
		$this->db->insert('surat_penerimaan', $data);
    }
    public function add_DataSuratPengembalian($data)
	{
		$this->db->insert('surat_pengembalian', $data);
    }
    public function add_DataBerita($data)
	{
		$this->db->insert('berita', $data);
    }
    public function ubahDataPenerima($data, $id_customer)
	{

		$this->db->where('id_customer', $id_customer);
		$this->db->update('surat_penerimaan', $data);
  }
  public function ubahDataPengembalian($data, $id_surat)
	{

		$this->db->where('id_surat', $id_surat);
		$this->db->update('surat_pengembalian', $data);
  }
  public function ubahDataBerita($data, $id_berita)
	{

		$this->db->where('id_berita', $id_berita);
		$this->db->update('berita', $data);
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
	public function lihatperusahaan($id)
	{
		$this->db->select('berita.id_berita, berita.perusahaan ,
		berita.penerima, berita.jml,berita.tgl_berita,berita.keterangan ,berita.nosurat, perusahaan.nama_perusahaan, perusahaan.alamat');
		$this->db->from('berita');
		$this->db->join('perusahaan', 'perusahaan.nama_perusahaan = berita.perusahaan');
		$this->db->where('berita.id_berita', $id);
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
	public function lihatsurat()
	{
		$this->db->select('surat_jalan.id_surat, surat_jalan.nosurat, surat_jalan.kd_part ,
		surat_jalan.part, surat_jalan.jml, surat_jalan.po,surat_jalan.wo, surat_jalan.alamat,surat_jalan.pengirim,surat_jalan.alamat_pengirim,
		surat_jalan.tgl, surat_jalan.keterangan,surat_jalan.id_perusahaan, perusahaan.nama_perusahaan');
		$this->db->from('surat_jalan');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan=surat_jalan.id_perusahaan');
		
			return $this->db->get()->result_array();

	}
	public function lihatsurat2($id)
	{
		$this->db->select('surat_jalan.id_surat, surat_jalan.nosurat, surat_jalan.kd_part ,
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
}