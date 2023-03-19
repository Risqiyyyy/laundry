<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function pesanan()
	{
		$this->load->view('member/pesanan');
	}
    
    public function history()
	{
		$this->load->view('member/history');
	}
}
