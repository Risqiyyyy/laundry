<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_invoice extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->model('m_outlet');
        $this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('cek_invoice');
	}
}
