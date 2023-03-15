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

	public function laporan_kasir()
	{
		$this->load->view('laporan/laporan_kasir');
	}

	function data_outlet($id){
		$where = array('id_outlet' => $id);
		$data['trans'] = $this->m_outlet->tampil_data_transaksi($where,'tb_transaksi')->result();
        // $data['transaksi'] = $this->m_data->tampil_data_transaksi();
        $data['outlet'] = $this->m_outlet->tampil_data()->result();
        $data['member'] = $this->m_user->tampil_data_member()->result();
        $data['user'] = $this->m_user->tampil_data();
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('laporan/data',$data);
	}
}
