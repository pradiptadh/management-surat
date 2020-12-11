<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kelas/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kelas/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kelas/index.html';
            $config['first_url'] = base_url() . 'kelas/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kelas_model->total_rows($q);
        $kelas = $this->Kelas_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kelas_data' => $kelas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('kelas/kelas_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kelas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kelas' => $row->id_kelas,
		'kelas' => $row->kelas,
		'jml_murid' => $row->jml_murid,
		'created_at' => $row->created_at,
	    );
            $this->load->view('kelas/kelas_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kelas/create_action'),
	    'id_kelas' => set_value('id_kelas'),
	    'kelas' => set_value('kelas'),
	    'jml_murid' => set_value('jml_murid'),
	    'created_at' => set_value('created_at'),
	);
        $this->load->view('kelas/kelas_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kelas' => $this->input->post('kelas',TRUE),
		'jml_murid' => $this->input->post('jml_murid',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Kelas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kelas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kelas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kelas/update_action'),
		'id_kelas' => set_value('id_kelas', $row->id_kelas),
		'kelas' => set_value('kelas', $row->kelas),
		'jml_murid' => set_value('jml_murid', $row->jml_murid),
		'created_at' => set_value('created_at', $row->created_at),
	    );
            $this->load->view('kelas/kelas_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kelas', TRUE));
        } else {
            $data = array(
		'kelas' => $this->input->post('kelas',TRUE),
		'jml_murid' => $this->input->post('jml_murid',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Kelas_model->update($this->input->post('id_kelas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kelas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kelas_model->get_by_id($id);

        if ($row) {
            $this->Kelas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kelas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('jml_murid', 'jml murid', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');

	$this->form_validation->set_rules('id_kelas', 'id_kelas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kelas.xls";
        $judul = "kelas";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");
	xlsWriteLabel($tablehead, $kolomhead++, "Jml Murid");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");

	foreach ($this->Kelas_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jml_murid);
	    xlsWriteNumber($tablebody, $kolombody++, $data->created_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kelas.doc");

        $data = array(
            'kelas_data' => $this->Kelas_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kelas/kelas_doc',$data);
    }

}

/* End of file Kelas.php */
/* Location: ./application/controllers/Kelas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-07-21 11:04:09 */
/* http://harviacode.com */