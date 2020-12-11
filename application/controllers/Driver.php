<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Driver extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_driver');
    }

    public function index()
    {
        $data['title'] = 'Konfirmasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('company/profile', $data);
        $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
       $data['driver'] = $this->m_driver->lihatsuratkonfirmasi();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('driver/index', $data);
        $this->load->view('templates/footer');
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
            $this->load->view('driver/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong Current Password! </div>');
                redirect('driver/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password! </div>');
                    redirect('driver/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed! </div>');
                    redirect('driver/changepassword');
                }
            }
        }
    }
public function tambahDataKonfirmasi()
{
  $data['title'] = 'Konfirmasi';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
  $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('driver/tambahdatasuratdriver', $data);
  $this->load->view('templates/footer');
}
public function simpanDatakonfirmasi()
{
  $data = array(
    'nama_driver' => $this->input->post('nama_driver'),
    'id_surat' => $this->input->post('id_surat'),
    'plat' => $this->input->post('plat'),
    'tgl_jalan' => $this->input->post('tgl_jalan'),
    'status' => $this->input->post('status'),

  );

  $this->m_driver->add_DataSuratKonfrimasi($data);

  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Surat Konfirmasi Berhasil dibuat! </div>');
  redirect('driver/index');
}
public function ubahdriver()
{
 
 // $id = $this->uri->segment(3);   
  $data['title'] = 'Konfirmasi';
  $data['user'] = $this->db->get_where('user', ['email' =>
  $this->session->userdata('email')])->row_array();
 // $data['surat_jalan'] = $this->m_admin->lihatsurat2($id);
  $data['surat_jalan'] =  $this->db->get_where('surat_jalan', ['id_surat' =>
  $this->uri->segment(3)])->result_array();
  //$data['driver'] = $this->db->get('driver')->result_array();
 // $data['surat_jalan'] = $this->db->get('surat_jalan')->result_array();
  $this->load->view('templates/header', $data);
  $this->load->view('templates/sidebar', $data);
  $this->load->view('templates/topbar', $data);
  $this->load->view('driver/ubahdriver', $data);
  $this->load->view('templates/footer');
}
public function ubahsurat()
{
    $id_surat = $this->input->post('id_surat');
    $data = array(
        'nama_driver' => $this->input->post('nama_driver'),
        'id_surat' => $this->input->post('id_surat'),
        'plat' => $this->input->post('plat'),
        'tgl_jalan' => $this->input->post('tgl_jalan'),
        'status' => $this->input->post('status'),
    

    );
    $this->m_driver->ubahDataSurat($data, $id_surat);
  
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('driver/index');
}

}