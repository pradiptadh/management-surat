<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_customer');
    }

    public function index()
    {
      $data['title'] = 'BAST';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('company/profile', $data);
    //     $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
    //    $data['driver'] = $this->m_driver->lihatsuratkonfirmasi();
   // $data['berita'] = $this->db->get('berita')->result_array();
       $data['berita'] = $this->m_customer->lihatberita();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('customer/berita', $data);
        $this->load->view('templates/footer');
    }
    public function berita()
    {
        $data['title'] = 'BAST';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('company/profile', $data);
    //     $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
    //    $data['driver'] = $this->m_driver->lihatsuratkonfirmasi();
   // $data['berita'] = $this->db->get('berita')->result_array();
       $data['berita'] = $this->m_customer->lihatberita();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('customer/berita', $data);
        $this->load->view('templates/footer');
    }
    public function polibox()
    {
        $data['title'] = 'Surat Pengembalian Polibox';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('company/profile', $data);
    //     $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
    //    $data['driver'] = $this->m_driver->lihatsuratkonfirmasi();
  //  $data['surat_pengembalian'] = $this->db->get('surat_pengembalian')->result_array();
    $data['surat_pengembalian'] = $this->m_customer->lihatpolibox();
   // $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('customer/polibox', $data);
        $this->load->view('templates/footer');
    }
    public function lihatpolibox($id)
   { 
    $this->uri->segment(3);
    $data['title'] = 'Surat Pengembalian Polibox';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

 
    //$data['surat_pengembalian'] = $this->db->get('surat_pengembalian')->result_array();
    // $data['surat_pengembalian'] =  $this->db->get_where('surat_pengembalian', ['id_surat' =>
    // $this->uri->segment(3)])->result_array();
    $data['surat_pengembalian'] = $this->m_customer->lihatpolibox2($id);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('customer/lihatpolibox', $data);
    $this->load->view('templates/footer');

 
    }
    public function printpolibox($id)
    {
      $this->uri->segment(3);
     
      $data['title'] = 'Surat Peminjaman Polibox';
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();

    //   $data['surat_pengembalian'] =  $this->db->get_where('surat_pengembalian', ['id_surat' =>
    // $this->uri->segment(3)])->result_array();  
    $data['surat_pengembalian'] = $this->m_customer->lihatpolibox2($id);
      $this->load->view('customer/printpolibox', $data);
      
    }
    public function changePassword()
    {

        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('customer/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            $password =  $this->db->get_where('user', ['password' =>
            $this->session->userdata('email')])->row_array();

            if ($current_password != ($data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong Current Password! </div>');
                redirect('customer/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password! </div>');
                    redirect('customer/changepassword');
                } else {
                 //   $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $new_password);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed! </div>');
                    redirect('customer/changepassword');
                }
            }
        }
    }
public function tambahDataSuratPenerimaan()
{
  $data['title'] = 'Surat Penerimaan Barang';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
  $data['part'] = $this->db->get('part')->result_array();
  $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
  $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('customer/tambahdatasuratpenerimaan', $data);
  $this->load->view('templates/footer');
}
public function simpanDataPenerimaan()
{
  $data = array(
    'penerima' => $this->input->post('penerima'),
    'pengirim' => $this->input->post('pengirim'),
    'alamat' => $this->input->post('alamat'),
    'alamat_pengirim' => $this->input->post('alamat_pengirim'),
    'nosurat' => $this->input->post('nosurat'),
    'kd_part' => $this->input->post('kd_part'),
    'part' => $this->input->post('part'),
    'jml' => $this->input->post('jml'),
    'nospb' => $this->input->post('nospb'),
    'po' => $this->input->post('po'),
    'wo' => $this->input->post('wo'),
    'tgl' => $this->input->post('tgl'),

  );

  $this->m_customer->add_DataSuratTerima($data);

  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Surat Penerimaan Berhasil dibuat! </div>');
  redirect('customer/index');
}
public function lihatsuratpenerimaan()
{
      
   
     
    $data['title'] = 'Surat Penerimaan Barang';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

  //  $data['murid'] = $this->m_customer->lihatrapot($id);
   // $data['surat_jalan'] = $this->m_customer->lihatsurat2($id);
    $data['surat_penerimaan'] =  $this->db->get_where('surat_penerimaan', ['id_customer' =>
  $this->uri->segment(3)])->result_array();
  // $datap['surat_penerimaan'] = $this->db->get('surat_penerimaan')->result_array();
    //$data['murid'] = $this->m_customer->lihatrapot(['id_kelas' => $id_kelas])->result_array();
    // $data['id'] = $id;
    // $data['datarapot']= $this->m_customer->lihatrapor($id);
   

    //$data['biodata'] = $this->m_customer->lihatrapor(['id' => $id])->result_array();
    // $data['datapelamar'] = $this->m_customer->data_pelamar(['id_perusahaan' => $id_perusahaan])->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('customer/lihatpenerimaanbarang', $data);
    $this->load->view('templates/footer');

    // $this->db->get_where();
 
}
public function printpenerimaan()
{

  $data['title'] = 'Surat Penerimaan Barang';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();


  $data['surat_penerimaan'] =  $this->db->get_where('surat_penerimaan', ['id_customer' =>
  $this->uri->segment(3)])->result_array();
  
  $this->load->view('customer/printpenerimaan', $data);
  
}
public function printberita($id)
{
    $id = $this->uri->segment(3);   
   // $id=$this->$this->uri->segment(3);
    $data['title'] = 'BAST';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    // $data['berita'] =  $this->db->get_where('berita', ['id_berita' =>
    // $this->uri->segment(3)])->result_array();
    $data['berita'] = $this->m_customer->lihatberita2($id);
  //data['berita'] = $this->m_customer->lihatberita2($id);
    $this->load->view('customer/printberita', $data);
  
}
public function tambahDataSuratPengembalian()
{
  $data['title'] = 'Surat Pengembalian Polibox';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
  $data['part'] = $this->db->get('part')->result_array();
  $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
  $data['polibox'] = $this->db->get('polibox')->result_array();

  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('customer/tambahdatasuratpengembalian', $data);
  $this->load->view('templates/footer');
}
public function simpanDataPengembalian()
{
  $data = array(
    
    'id_polibox' => $this->input->post('id_polibox'),
    'perusahaan' => $this->input->post('perusahaan'),
    // 'penerima' => $this->input->post('penerima'),
    'jml_kembali' => $this->input->post('jml_kembali'),
    'tgl_kembali' => $this->input->post('tgl_kembali'),
    'keterangan' => $this->input->post('keterangan'),

  );

  $this->m_customer->add_DataSuratPengembalian($data);

  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Surat Pengembalian Berhasil dibuat! </div>');
  redirect('customer/polibox');
}
public function tambahDataBerita()
{
  $data['title'] = 'BAST';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
  $data['part'] = $this->db->get('part')->result_array();
  $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
  $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
  $data['surat_penerimaan'] = $this->db->get('surat_penerimaan')->result_array();
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('customer/tambahberita', $data);
  $this->load->view('templates/footer');
}
public function simpanDataBerita()
{
  $data = array(
    'id_berita' => $this->input->post('id_berita'),
    'nosurat' => $this->input->post('nosurat'),
    'perusahaan' => $this->input->post('perusahaan'),
    // 'penerima' => $this->input->post('penerima'),
    'jml' => $this->input->post('jml'),
    'tgl_berita' => $this->input->post('tgl_berita'),
    'keterangan' => $this->input->post('keterangan'),
  );

  $this->m_customer->add_DataBerita($data);

  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Berita Acara Berhasil dibuat! </div>');
  redirect('customer/berita');
}
public function lihatsuratberita($id)
{       
  $id = $this->uri->segment(3);   
  $url = $this->uri->segment(4);
  $decode = urldecode(urldecode($url));
   // $id=$this->$this->uri->segment(3);
    $data['title'] = 'BAST';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    // $data['berita'] =  $this->db->get_where('berita', ['id_berita' =>
    // $this->uri->segment(3)])->result_array();
    $data['berita'] = $this->m_customer->lihatberita2($id);
   // $data['test'] = $this->m_customer->lihatperusahaan($id);
   $data['perusahaan'] =  $this->db->get_where('perusahaan', ['nama_perusahaan' =>
     $decode])->result_array();
     $data['part'] =  $this->db->get_where('part', ['part' =>
     $this->uri->segment(5)])->result_array();
   
  // $data['berita'] = $this->m_customer->lihatberita2($id);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('customer/lihatberita', $data);
    $this->load->view('templates/footer');
}
public function ubahpenerima()
{
 
 
  $data['title'] = 'Surat Penerimaan Barang';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();

  $data['surat_penerimaan'] =  $this->db->get_where('surat_penerimaan', ['id_customer' =>
  $this->uri->segment(3)])->result_array();
 
  $data['part'] = $this->db->get('part')->result_array();
  $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
 
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('customer/ubahpenerima', $data);
  $this->load->view('templates/footer');
}
public function ubahdatapenerima()
{
    $id_customer = $this->input->post('id_customer');
    $data = array(
      'penerima' => $this->input->post('penerima'),
      'pengirim' => $this->input->post('pengirim'),
      'alamat' => $this->input->post('alamat'),
      'alamat_pengirim' => $this->input->post('alamat_pengirim'),
      'nosurat' => $this->input->post('nosurat'),
      'kd_part' => $this->input->post('kd_part'),
      'part' => $this->input->post('part'),
      'jml' => $this->input->post('jml'),
      'nospb' => $this->input->post('nospb'),
      'po' => $this->input->post('po'),
      'wo' => $this->input->post('wo'),
      'tgl' => $this->input->post('tgl'),
  

    );
    $this->m_customer->ubahDataPenerima($data, $id_customer);
  
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('customer/index');
}
public function ubahpengembalian()
{
 
 
  $data['title'] = 'Surat Pengembalian Polibox';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();

  $data['surat_pengembalian'] =  $this->db->get_where('surat_pengembalian', ['id_surat' =>
  $this->uri->segment(3)])->result_array();
 
  $data['part'] = $this->db->get('part')->result_array();
  $data['polibox'] = $this->db->get('polibox')->result_array();
  //$data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
 
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('customer/ubahpengembalian', $data);
  $this->load->view('templates/footer');
}
public function ubahdatapengembalian()
{
    $id_surat = $this->input->post('id_surat');
    $data = array(
      'id_polibox' => $this->input->post('id_polibox'),
      'perusahaan' => $this->input->post('perusahaan'),
      // 'penerima' => $this->input->post('penerima'),
      'jml_kembali' => $this->input->post('jml_kembali'),
      'tgl_kembali' => $this->input->post('tgl_kembali'),
      'keterangan' => $this->input->post('keterangan'),

    );
    $this->m_customer->ubahDataPengembalian($data, $id_surat);
  
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('customer/polibox');
}
public function ubahberita()
{
 
 
  $data['title'] = 'BAST';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();

  $data['berita'] =  $this->db->get_where('berita', ['id_berita' =>
  $this->uri->segment(3)])->result_array();
 
  $data['part'] = $this->db->get('part')->result_array();
  $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
  //$data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
 
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('customer/ubahberita', $data);
  $this->load->view('templates/footer');
}
public function ubahDataBerita()
{
    $id_berita = $this->input->post('id_berita');
    $data = array(
      'nosurat' => $this->input->post('nosurat'),
      'perusahaan' => $this->input->post('perusahaan'),
      // 'penerima' => $this->input->post('penerima'),
      'jml' => $this->input->post('jml'),
      'tgl_berita' => $this->input->post('tgl_berita'),
      'keterangan' => $this->input->post('keterangan'),
  

    );
    $this->m_customer->ubahDataBerita($data, $id_berita);
  
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('customer/berita');
}
public function suratjalan()
{
  $data['title'] = 'Surat Jalan';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
 //  $data['surat_jalan'] = $this->m_customer->lihatmurid();
 //  $data['part'] = $this->db->get('part')->result_array();
   $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
   $data['surat_jalan'] = $this->m_customer->lihatsurat();
    
   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('customer/suratjalan', $data);
   $this->load->view('templates/footer');
}
public function lihatsuratjalan($id)
{
      
    $id = $this->uri->segment(3);    
     
    $data['title'] = 'Surat Jalan';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

  //  $data['murid'] = $this->m_customer->lihatrapot($id);
    $data['surat_jalan'] = $this->m_customer->lihatsurat2($id);
    $data['perusahaan'] =  $this->db->get_where('perusahaan', ['id_perusahaan' =>
  $this->uri->segment(4)])->result_array();
    //$data['murid'] = $this->m_customer->lihatrapot(['id_kelas' => $id_kelas])->result_array();
    // $data['id'] = $id;
    // $data['datarapot']= $this->m_customer->lihatrapor($id);
   

    //$data['biodata'] = $this->m_customer->lihatrapor(['id' => $id])->result_array();
    // $data['datapelamar'] = $this->m_customer->data_pelamar(['id_perusahaan' => $id_perusahaan])->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('customer/lihatsuratjalan', $data);
    $this->load->view('templates/footer');

    // $this->db->get_where();
 
}
public function suratpolibox()
{
  $data['title'] = 'Surat Peminjaman Polibox';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
   $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
   $data['polibox'] = $this->m_customer->lihatsuratminjem();
    
   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('customer/suratpolibox', $data);
   $this->load->view('templates/footer');
}
public function lihatsuratpolibox($id)
{
      
    $id = $this->uri->segment(3);    
     
    $data['title'] = 'Surat Peminjaman Polibox';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['polibox'] = $this->m_customer->lihatsuratminjem2($id);
    $data['perusahaan'] =  $this->db->get_where('perusahaan', ['id_perusahaan' =>
  $this->uri->segment(4)])->result_array();
   
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('customer/lihatsuratpolibox', $data);
    $this->load->view('templates/footer');

 
}

}