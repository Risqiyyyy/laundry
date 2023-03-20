<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->model('m_outlet');
        $this->load->model('m_user');
	}

	public function pesanan($id)
	{
		$where = array('id_user' => $id);
		$data['trans'] = $this->m_outlet->tampil_data_transaksi($where,'tb_transaksi')->result();
		$this->load->view('member/pesanan',$data);
	}
    
    public function history($id)
	{
		$where = array(
			'id_user' => $id,
			'status' => "selesai");
		$data['trans'] = $this->m_outlet->tampil_data_transaksi($where,'tb_transaksi')->result();
		$this->load->view('member/history',$data);
		
	}

	function detail_transaksi($id){
	    $data['trans'] = $this->m_data->detail_transaksi($id);
        $this->load->view('member/detail',$data);
        // var_dump($data);
        // die;
    }
}
