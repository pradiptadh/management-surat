<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('m_admin');
    $this->load->library('pagination');
    $this->load->library('form_validation');
  }


  public function index()
  {

    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];
    //  $this->load->view('admin/dashboard', $data);
    $data['count'] = $this->m_admin->count();
    $data['countPerusahaan'] = $this->m_admin->countDriver();
    $data['hitungkelas'] = $this->m_admin->hitungsurat();
    $data['hitungRapot'] = $this->m_admin->hitungRapot();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }


  public function role()
  {

    $data['title'] = 'Role';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];

    $data['role'] = $this->db->get('user_role')->result_array();

    $this->form_validation->set_rules('role', 'Role', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/role', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_role', ['role' => $this->input->post('role')]);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success" role="alert">New Role Added!</div>'
      );
      redirect('admin/role');
    }
  }

  public function roleAccess($role_id)
  {

    $data['title'] = 'Role';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id !=', 1);
    $data['menu'] = $this->db->get('user_menu')->result_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/role-access', $data);
    $this->load->view('templates/footer');
  }

  public function changeAccess()
  {

    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id

    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed! </div>');
  }
  public function deleteRole($id)
  {
    $this->load->model('Menu_model');
    $this->Menu_model->deleteRole($id);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Deleted!</div>'
    );
    redirect('admin/role');
  }
  public function editRole()
  {
    $this->load->model('Menu_model');
    $this->Menu_model->ubahRoleData();
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('admin/role');
  }

  public function countuser()
  {
    $this->load->model('m_admin');
    $data['count'] = $this->m_admin->count();
  }

public function material()
{
  $data['title'] = 'Material';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();

   $data['material'] = $this->db->get('material')->result_array();

   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('admin/material', $data);
   $this->load->view('templates/footer');
}
public function tambahdatamaterial()
  {
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Y-m-d");
    $data = array(
      'kd_mt' => $this->input->post('kd_mt'),      
      'material' => $this->input->post('material'),      
      'ket' => $this->input->post('ket'),
      'created_at' => $tgl

    );
    $this->m_admin->add_datamaterial($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Material Berhasil dibuat! </div>');
    redirect('admin/material');
  }
  public function editDataMaterial()
{
  $kd_mt = $this->input->post('kd_mt');;
  
  $data = array(   
      'material' => $this->input->post('material'),      
      'ket' => $this->input->post('ket'),
 );


  $this->m_admin->ubahDataMaterial($data, $kd_mt);
  $this->session->set_flashdata(
    'message',
    '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
  );
  redirect('admin/material');
}
public function deleteDataMaterial($kd_mt)
  {
    $this->load->model('m_admin');
    $this->m_admin->deleteDataMaterial($kd_mt);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Deleted!</div>'
    );
    redirect('admin/material');
  }
public function part()
{
  $data['title'] = 'Part';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
   $data['part'] = $this->db->get('part')->result_array();
   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('admin/part', $data);
   $this->load->view('templates/footer');
}
public function tambahdatapart()
  {
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Y-m-d");
    $data = array(
      'kd_part' => $this->input->post('kd_part'),      
      'part' => $this->input->post('part'),      
      'ket' => $this->input->post('ket'),
      'created_at' => $tgl

    );
    $this->m_admin->add_datapart($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Part Berhasil dibuat! </div>');
    redirect('admin/part');
  }
  public function editDataPart()
{
  $kd_part = $this->input->post('kd_part');;
  
  $data = array(   
      'part' => $this->input->post('part'),      
      'ket' => $this->input->post('ket'),
 );
 $this->m_admin->ubahDataPart($data, $kd_part);
 $this->session->set_flashdata(
   'message',
   '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
 );
 redirect('admin/part');
}
public function deleteDataPart($kd_part)
  {
    $this->load->model('m_admin');
    $this->m_admin->deleteDataPart($kd_part);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Deleted!</div>'
    );
    redirect('admin/part');
  }
public function perusahaan()
{
  $data['title'] = 'Perusahaan';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
   $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('admin/perusahaan', $data);
   $this->load->view('templates/footer');
}
public function tambahdataperusahaan()
  {
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['max_size'] = '2048';
    $config['max_width']  = '3000';
    $config['max_height']  = '3000';

    $this->load->library('upload', $config);
    $this->upload->do_upload('logo');
    $foto['logo'] = $this->upload->file_name;
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Y-m-d");
    $data = array(
      'nama_perusahaan' => $this->input->post('nama_perusahaan'),      
      'alamat' => $this->input->post('alamat'),      
      'telp' => $this->input->post('telp'),
      'logo' => $foto['logo'],
      'created_at' => $tgl,

    );
    $this->m_admin->add_dataperusahaan($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Perusahaan Berhasil dibuat! </div>');
    redirect('admin/perusahaan');
  }
  public function editDataPerusahaan()
  {
    $id_perusahaan = $this->input->post('id_perusahaan');;
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['max_size'] = '2048';
    $config['max_width']  = '3000';
    $config['max_height']  = '3000';

    $this->load->library('upload', $config);
    $this->upload->do_upload('logo');
    $foto['logo'] = $this->upload->file_name;
    $data = array(   
        'nama_perusahaan' => $this->input->post('nama_perusahaan'),      
        'alamat' => $this->input->post('alamat'),
        'telp' => $this->input->post('telp'),
        'logo' => $foto['logo'],
        
   );
   $this->m_admin->ubahDataPerusahaan($data, $id_perusahaan);
   $this->session->set_flashdata(
     'message',
     '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
   );
   redirect('admin/perusahaan');
  }
  public function deleteDataPerusahaan($id_perusahaan)
  {
    $this->load->model('m_admin');
    $this->m_admin->deleteDataPerusahaan($id_perusahaan);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Deleted!</div>'
    );
    redirect('admin/perusahaan');
  }
public function userlist()
{
  $data['title'] = 'User List';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
   $data['users'] = $this->db->get('user')->result_array();
   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('admin/userlist', $data);
   $this->load->view('templates/footer');
}
public function tambahUser()
{
  $data['title'] = 'User List';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
    
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('admin/tambahuser', $data);
  $this->load->view('templates/footer');
}
public function regisUser()
{
  $data['title'] = 'User List';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password do not match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'User List';
            $data['user'] = $this->db->get_where('user', ['email' =>
             $this->session->userdata('email')])->row_array();
             $this->load->view('templates/header', $data);
             $this->load->view('templates/sidebar', $data);
             $this->load->view('templates/topbar', $data);
             $this->load->view('admin/tambahuser', $data);
             $this->load->view('templates/footer');
        } else {
         
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name',true)) ,
              
              
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => $this->input->post('password1'),
                'role_id' =>htmlspecialchars($this->input->post('role_id',true)) ,
                'is_active' => 1,
                'date_created' => time()
            ];

        
            

            $this->db->insert('user', $data);
         

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! akun telah dibuat </div>');
            redirect('admin/userlist');
        }
}
public function ubahdatauser()
{
  $data['title'] = 'User List';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
 // $data['murid'] = $this->m_admin->lihatmurid();
 // $data['kelas'] = $this->db->get('kelas')->result_array();
  //  $data['part'] = $this->db->get('part')->result_array();
  //  $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
 // $data['users'] = $this->db->get('user')->result_array();
  $data['users'] =  $this->db->get_where('user', ['id' =>
  $this->uri->segment(3)])->result_array();
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('admin/ubahdatauserlist', $data);
  $this->load->view('templates/footer');
}
public function ubahdatauserakhir()
{
    $id = $this->input->post('id');
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password1'),
      'role_id' => $this->input->post('role_id'),
      

    );
    $this->m_admin->ubahDataUserList($data, $id);
  
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('admin/userlist');
}

public function suratjalan()
{
  $data['title'] = 'Surat Jalan';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
 //  $data['surat_jalan'] = $this->m_admin->lihatmurid();
 //  $data['part'] = $this->db->get('part')->result_array();
   $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
   $data['surat_jalan'] = $this->m_admin->lihatsurat();
    
   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('admin/suratjalan', $data);
   $this->load->view('templates/footer');
}
public function lihatsuratjalan($id)
{
      
    $id = $this->uri->segment(3);    
     
    $data['title'] = 'Surat Jalan';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

  //  $data['murid'] = $this->m_admin->lihatrapot($id);
    $data['surat_jalan'] = $this->m_admin->lihatsurat2($id);
    $data['perusahaan'] =  $this->db->get_where('perusahaan', ['id_perusahaan' =>
   $this->uri->segment(5)])->result_array();
    $data['part'] =  $this->db->get_where('part', ['part' =>
  $this->uri->segment(4)])->result_array();
    //$data['murid'] = $this->m_admin->lihatrapot(['id_kelas' => $id_kelas])->result_array();
    // $data['id'] = $id;
    // $data['datarapot']= $this->m_admin->lihatrapor($id);
   

    //$data['biodata'] = $this->m_admin->lihatrapor(['id' => $id])->result_array();
    // $data['datapelamar'] = $this->m_admin->data_pelamar(['id_perusahaan' => $id_perusahaan])->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/lihatsuratjalan', $data);
    $this->load->view('templates/footer');

    // $this->db->get_where();
 
}
public function printsuratjalan($id)
{
  $id = $this->uri->segment(3);  
  $data['title'] = 'Surat Jalan';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();


  $data['surat_jalan'] = $this->m_admin->lihatsurat2($id);
  $data['perusahaan'] =  $this->db->get_where('perusahaan', ['id_perusahaan' =>
  $this->uri->segment(5)])->result_array();
  $data['part'] =  $this->db->get_where('part', ['part' =>
  $this->uri->segment(4)])->result_array();
  
  $this->load->view('admin/printsuratjalan', $data);
  
}
public function ubahsuratjalan($id)
{
 
  $id = $this->uri->segment(3);   
  $data['title'] = 'Surat Jalan';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
  $data['surat_jalan'] = $this->m_admin->lihatsurat2($id);
  // $data['perusahaan'] =  $this->db->get_where('perusahaan', ['id_perusahaan' =>
  // $this->uri->segment(4)])->result_array();
  $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
  $data['part'] = $this->db->get('part')->result_array();
  //$data['biodata'] = $this->m_admin->lihatrapor(['id' => $id])->result_array();
  // $data['datapelamar'] = $this->m_admin->data_pelamar(['id_perusahaan' => $id_perusahaan])->result_array();
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('admin/ubahsuratjalan', $data);
  $this->load->view('templates/footer');
}
public function ubahsurat()
{
    $id_surat = $this->input->post('id_surat');
    $data = array(
      'nosurat' => $this->input->post('nosurat'),
      'id_perusahaan' => $this->input->post('id_perusahaan'),
      'pengirim' => $this->input->post('pengirim'),
      // 'kd_part' => $this->input->post('kd_part'),
      'part' => $this->input->post('part'),
      'jml' => $this->input->post('jml'),
      'po' => $this->input->post('po'),
      'wo' => $this->input->post('wo'),
      // 'alamat' => $this->input->post('alamat'),
      // 'alamat_pengirim' => $this->input->post('alamat_pengirim'),
      'tgl' => $this->input->post('tgl'),
      'status' => $this->input->post('status'),
      'keterangan' => $this->input->post('keterangan'),

    );
    $this->m_admin->ubahDataSurat($data, $id_surat);
  
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('admin/suratjalan');
}

public function polibox()
{
  $data['title'] = 'Surat Peminjaman Polibox';
  $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
   $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
   $data['polibox'] = $this->m_admin->lihatsuratminjem();
    
   $this->load->view('templates/header', $data);
   $this->load->view('templates/sidebar', $data);
   $this->load->view('templates/topbar', $data);
   $this->load->view('admin/polibox', $data);
   $this->load->view('templates/footer');
}
public function ubahpolibox($id)
{
 
  $id = $this->uri->segment(3);   
  $data['title'] = 'Surat Peminjaman Polibox';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
  
  $data['polibox'] = $this->m_admin->lihatsuratminjem2($id);
  
  $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
  $data['part'] = $this->db->get('part')->result_array();

  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('admin/ubahpolibox', $data);
  $this->load->view('templates/footer');
}
public function ubahDatapolibox()
{
    $id_polibox = $this->input->post('id_polibox');
    $data = array(

      'id_polibox' => $this->input->post('id_polibox'),
      'id_perusahaan' => $this->input->post('id_perusahaan'),
      // 'pengirim' => $this->input->post('pengirim'),
      'part' => $this->input->post('part'),
      'jml' => $this->input->post('jml'),
      // 'alamat' => $this->input->post('alamat'),
      // 'alamat_pengirim' => $this->input->post('alamat_pengirim'),
      'tgl' => $this->input->post('tgl'),
      'ket' => $this->input->post('ket'),
  

    );
    $this->m_admin->ubahDataPolibox($data, $id_polibox);
  
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('admin/polibox');
}
public function lihatpolibox($id)
{
      
    $id = $this->uri->segment(3);    
     
    $data['title'] = 'Surat Peminjaman Polibox';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['polibox'] = $this->m_admin->lihatsuratminjem2($id);
    $data['perusahaan'] =  $this->db->get_where('perusahaan', ['id_perusahaan' =>
  $this->uri->segment(4)])->result_array();
   
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/lihatpolibox', $data);
    $this->load->view('templates/footer');

 
}
public function printpolibox($id)
{
  $id = $this->uri->segment(3);  
  $data['title'] = 'Surat Peminjaman Polibox';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();


  $data['polibox'] = $this->m_admin->lihatsuratminjem2($id);
  $data['perusahaan'] =  $this->db->get_where('perusahaan', ['id_perusahaan' =>
  $this->uri->segment(4)])->result_array();
  
  $this->load->view('admin/printpolibox', $data);
  
}

public function tambahDataSurat()
{
  $data['title'] = 'Surat Jalan';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
 // $data['murid'] = $this->m_admin->lihatmurid();
 // $data['kelas'] = $this->db->get('kelas')->result_array();
    $data['part'] = $this->db->get('part')->result_array();
    $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
    
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('admin/tambahdatasurat', $data);
  $this->load->view('templates/footer');
}
public function simpanDataSurat()
{
  $data = array(
    'nosurat' => $this->input->post('nosurat'),
    'id_perusahaan' => $this->input->post('id_perusahaan'),
    // 'pengirim' => $this->input->post('pengirim'),
    // 'kd_part' => $this->input->post('kd_part'),
    'part' => $this->input->post('part'),
    'jml' => $this->input->post('jml'),
    'po' => $this->input->post('po'),
    'wo' => $this->input->post('wo'),
    // 'alamat' => $this->input->post('alamat'),
    // 'alamat_pengirim' => $this->input->post('alamat_pengirim'),
    'tgl' => $this->input->post('tgl'),
    'status' => $this->input->post('status'),
    'keterangan' => $this->input->post('keterangan'),

  );

  $this->m_admin->add_DataSurat($data);

  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Surat Jalan Berhasil dibuat! </div>');
  redirect('admin/suratjalan');
}
public function tambahDataSuratMinjem()
{
  $data['title'] = 'Surat Peminjaman Polibox';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
 // $data['murid'] = $this->m_admin->lihatmurid();
 // $data['kelas'] = $this->db->get('kelas')->result_array();
    $data['part'] = $this->db->get('part')->result_array();
    $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
    
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('admin/tambahdatasuratminjem', $data);
  $this->load->view('templates/footer');
}
public function simpanDataSuratMinjem()
{
  $data = array(

    'id_polibox' => $this->input->post('id_polibox'),
    'id_perusahaan' => $this->input->post('id_perusahaan'),
    // 'pengirim' => $this->input->post('pengirim'),
    'part' => $this->input->post('part'),
    'jml' => $this->input->post('jml'),
    // 'alamat' => $this->input->post('alamat'),
    // 'alamat_pengirim' => $this->input->post('alamat_pengirim'),
    'tgl' => $this->input->post('tgl'),
    'ket' => $this->input->post('keterangan'),

  );

  $this->m_admin->add_DataSuratMinjem($data);

  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Surat Peminjaman Polibox Berhasil dibuat! </div>');
  redirect('admin/polibox');
}
public function bast()
{
  $data['title'] = 'BAST';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
  // $this->load->view('company/profile', $data);
//     $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
//    $data['driver'] = $this->m_driver->lihatsuratkonfirmasi();
// $data['berita'] = $this->db->get('berita')->result_array();
 $data['berita'] = $this->m_admin->lihatberita();
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('admin/bast', $data);
  $this->load->view('templates/footer');
}
public function lihatbast($id)
{       
  $id = $this->uri->segment(3);   
   // $id=$this->$this->uri->segment(3);
    $data['title'] = 'BAST';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    // $data['berita'] =  $this->db->get_where('berita', ['id_berita' =>
    // $this->uri->segment(3)])->result_array();
    $data['berita'] = $this->m_admin->lihatberita2($id);
  // $data['berita'] = $this->m_customer->lihatberita2($id);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/lihatbast', $data);
    $this->load->view('templates/footer');
}
public function poliboxkembali()
{
  $data['title'] = 'Surat Pengembalian Polibox';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('company/profile', $data);
    //     $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
    //    $data['driver'] = $this->m_driver->lihatsuratkonfirmasi();
  //  $data['surat_pengembalian'] = $this->db->get('surat_pengembalian')->result_array();
    $data['surat_pengembalian'] = $this->m_admin->lihatpolibox();
   // $data['perusahaan'] = $this->db->get('perusahaan')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/poliboxkembali', $data);
        $this->load->view('templates/footer');
}
public function lihatpoliboxkembali($id)
   { 
    $this->uri->segment(3);
    $data['title'] = 'Surat Pengembalian Polibox';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

 
    //$data['surat_pengembalian'] = $this->db->get('surat_pengembalian')->result_array();
    // $data['surat_pengembalian'] =  $this->db->get_where('surat_pengembalian', ['id_surat' =>
    // $this->uri->segment(3)])->result_array();
    $data['surat_pengembalian'] = $this->m_admin->lihatpolibox2($id);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/lihatpoliboxkembali', $data);
    $this->load->view('templates/footer');

 
    }

}

