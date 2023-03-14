<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->model('m_outlet');
        $this->load->model('m_user');
	}

	public function index()
	{
		$data['outlet'] = $this->m_outlet->tampil_data()->result();
		$this->load->view('laporan/laporan',$data);
	}
}
