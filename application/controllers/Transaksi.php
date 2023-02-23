<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	
    function __construct(){
		parent::__construct();
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
		$this->load->view('transaksi/tambah',$data);
        // var_dump($data);
        // die;
	}
    
    function tambah(){
        if(isset($_POST['submit']))
		{   
			$id_outlet = $this->input->post('id_outlet');
            $kode_invoice = $this->input->post('kode_invoice');
            $id_member = $this->input->post('id_member');
            $tgl = $this->input->post('tgl');
            $batas_waktu = $this->input->post('batas_waktu');
            $tgl_bayar = $this->input->post('tgl_bayar');
            $diskon = $this->input->post('diskon');
            $pajak = $this->input->post('pajak');
            $status = $this->input->post('status');
            $dibayar = $this->input->post('dibayar');
            $id_user = $this->input->post('id_user');
			$data_trasnsaksi = array(
				'id_outlet'=> $id_outlet,
				'kode_invoice' => $kode_invoice,
                'id_member' => $id_member,
                'tgl' => $tgl,
                'batas_waktu' => $batas_waktu,
                'tgl_bayar' => $tgl_bayar,
                'diskon' => $diskon,
                'pajak' => $pajak,
                'status' => $status,
                'dibayar' => $dibayar,
                'id_user' => $id_user
			);
			$this->m_data->tambah_transaksi($data_trasnsaksi);
			redirect('transaksi');
		}
		else
		{
			$data['paket'] = $this->m_data->tambah_transaksi()->result();
			$this->load->view('transaksi',$data);
		}
    }

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_transaksi($where,'tb_transaksi');
		redirect('transaksi');
	}

    function detail_transaksi($id){
        $where = array('id' => $id);
	    $data['transaksi'] = $this->m_data->edit_data_transaksi($where,'tb_transaksi')->result();  
        $this->load->view('transaksi/detail');
    }
}
