<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->model('m_outlet');
        $this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('landing');
	}

	public function cek_invoice(){
		$kode_invoice = $this->input->post_get('kode_invoice', TRUE);
		if($kode_invoice){
			$data['trans'] = $this->m_data->invoice($kode_invoice);
			$this->load->view('cek_invoice',$data);
		}elseif($kode_invoice = NULL){
			$this->session->set_flashdata('massage', 'kode invoice tidak Valid');
			$this->load->view('landing');
		}else{
		$this->session->set_flashdata('massage', 'kode invoice tidak ada');
		$this->load->view('landing');
		}
	}
}
