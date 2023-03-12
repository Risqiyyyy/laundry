<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('landing');
	}

	public function cek_invoice(){
		if(!isset($_POST['cek_kode']))
		{   
			redirect('/');
		}
		else
		{
			$this->load->view('cek_invoice');
		}
    }
}
