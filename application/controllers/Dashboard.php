<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('role') == null) {
            redirect('auth');
        }
		$this->load->model('m_data');
        $this->load->model('m_outlet');
        $this->load->model('m_user');
	}

	public function index()
	{
		$data['transaksi'] = $this->m_data->tampil_data_transaksi();
        $data['outlet'] = $this->m_outlet->tampil_data()->result();
        $data['member'] = $this->m_user->tampil_data_member()->result();
        $data['user'] = $this->m_user->tampil_data();
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('dashboard',$data);
	}
    
}
