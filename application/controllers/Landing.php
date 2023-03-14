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
	if(isset($_POST['submit']))
	{   
		$nama = $this->input->post('kode_invoice');
		$data['transaksi'] = $this->m_data->detail_invoice($kode_invoice);
		redirect('cek_invoice',$data);
	}
	else
	{
		$this->session->set_flashdata('massage', 'kode invoice tidak ada');
		$this->load->view('landing');
	}
	}
}
