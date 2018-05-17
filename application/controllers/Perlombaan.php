<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Perlombaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Perlombaan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'perlombaan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'perlombaan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'perlombaan/index.html';
            $config['first_url'] = base_url() . 'perlombaan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Perlombaan_model->total_rows($q);
        $perlombaan = $this->Perlombaan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'perlombaan_data' => $perlombaan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('perlombaan/perlombaan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Perlombaan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'nim' => $row->nim,
		'name' => $row->name,
		'jenisperlombaan' => $row->jenisperlombaan,
		'created_at' => $row->created_at,
		'created_by' => $row->created_by,
		'updated_at' => $row->updated_at,
		'updated_by' => $row->updated_by,
	    );
            $this->load->view('perlombaan/perlombaan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('perlombaan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('perlombaan/create_action'),
	    'nim' => set_value('nim'),
	    'name' => set_value('name'),
	    'jenisperlombaan' => set_value('jenisperlombaan'),
	    'created_at' => set_value('created_at'),
	    'created_by' => set_value('created_by'),
	    'updated_at' => set_value('updated_at'),
	    'updated_by' => set_value('updated_by'),
	);
        $this->load->view('perlombaan/perlombaan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'jenisperlombaan' => $this->input->post('jenisperlombaan',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'updated_by' => $this->input->post('updated_by',TRUE),
	    );

            $this->Perlombaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('perlombaan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Perlombaan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('perlombaan/update_action'),
		'nim' => set_value('nim', $row->nim),
		'name' => set_value('name', $row->name),
		'jenisperlombaan' => set_value('jenisperlombaan', $row->jenisperlombaan),
		'created_at' => set_value('created_at', $row->created_at),
		'created_by' => set_value('created_by', $row->created_by),
		'updated_at' => set_value('updated_at', $row->updated_at),
		'updated_by' => set_value('updated_by', $row->updated_by),
	    );
            $this->load->view('perlombaan/perlombaan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('perlombaan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('nim', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'jenisperlombaan' => $this->input->post('jenisperlombaan',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'updated_by' => $this->input->post('updated_by',TRUE),
	    );

            $this->Perlombaan_model->update($this->input->post('nim', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('perlombaan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Perlombaan_model->get_by_id($id);

        if ($row) {
            $this->Perlombaan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('perlombaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('perlombaan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('jenisperlombaan', 'jenisperlombaan', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('created_by', 'created by', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('updated_by', 'updated by', 'trim|required');

	$this->form_validation->set_rules('nim', 'nim', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Perlombaan.php */
/* Location: ./application/controllers/Perlombaan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-16 17:05:48 */
/* http://harviacode.com */