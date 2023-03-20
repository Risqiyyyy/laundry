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
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('transaksi/tambah',$data);
        // var_dump($data);
        // die;
	}
    
    function tambah(){
        if(isset($_POST['submit']))
		{   
            $id = $this->input->post('');
			$id_outlet = $this->input->post('id_outlet');
            $id_paket = $this->input->post('id_paket');
            $qty = $this->input->post('qty');
            $kode_invoice = $this->input->post('kode_invoice');
            $id_member = $this->input->post('id_member');
            $tgl = $this->input->post('tgl');
            $batas_waktu = $this->input->post('batas_waktu');
            $tgl_bayar = $this->input->post('tgl_bayar');
            $biaya_tambahan = $this->input->post('biaya_tambahan');
            $diskon = $this->input->post('diskon');
            $pajak = $this->input->post('pajak');
            $status = $this->input->post('status');
            $dibayar = $this->input->post('dibayar');
            $id_user = $this->input->post('id_user');
			$data_trasnsaksi = array(
				'id_outlet'=> $id_outlet,
                'id_paket'=> $id_paket,
				'kode_invoice' => $kode_invoice,
                'id_member' => $id_member,
                'tgl' => $tgl,
                'batas_waktu' => $batas_waktu,
                'tgl_bayar' => $tgl_bayar,
                'biaya_tambahan' => $biaya_tambahan,
                'qty'=> $qty,
                'diskon' => $diskon,
                'pajak' => $pajak,
                'status' => "baru",
                'dibayar' => "dibayar",
                'id_user' => $id_user
			);
            // var_dump($data_trasnsaksi);
            // die;
			$this->m_data->tambah_transaksi($data_trasnsaksi);
			redirect('transaksi');
		}
		else
		{
			$data['paket'] = $this->m_data->tambah_transaksi()->result();
			$this->load->view('transaksi',$data);
		}
    }

    function tambah_transaksi_user(){
        if(isset($_POST['submit']))
		{   
            $id = $this->input->post('');
			$id_outlet = $this->input->post('id_outlet');
            $id_paket = $this->input->post('id_paket');
            $qty = $this->input->post('qty');
            $kode_invoice = $this->input->post('kode_invoice');
            $id_member = $this->input->post('id_member');
            $tgl = $this->input->post('tgl');
            $batas_waktu = $this->input->post('batas_waktu');
            $tgl_bayar = $this->input->post('tgl_bayar');
            $biaya_tambahan = $this->input->post('biaya_tambahan');
            $diskon = $this->input->post('diskon');
            $pajak = $this->input->post('pajak');
            $status = $this->input->post('status');
            $dibayar = $this->input->post('dibayar');
            $id_user = $this->input->post('id_user');
			$data_trasnsaksi = array(
				'id_outlet'=> $id_outlet,
                'id_paket'=> $id_paket,
				'kode_invoice' => $kode_invoice,
                'id_member' => $id_member,
                'tgl' => $tgl,
                'batas_waktu' => $batas_waktu,
                'tgl_bayar' => $tgl_bayar,
                'biaya_tambahan' => $biaya_tambahan,
                'qty'=> $qty,
                'diskon' => $diskon,
                'pajak' => $pajak,
                'status' => "pending",
                'dibayar' => "belum_dibayar",
                'id_user' => $id_user
			);
            // var_dump($data_trasnsaksi);
            // die;
			$this->m_data->tambah_transaksi($data_trasnsaksi);
			redirect('dashboard');
		}
    }

    function data_baru(){
		$where = array (
			'id_user' => $this->session->userdata('id'),
            'status' => "baru"
		);
		$data['transaksi'] = $this->m_outlet->data_laporan_kasir($where,'tb_transaksi')->result();
        $data['outlet'] = $this->m_outlet->tampil_data()->result();
        $data['member'] = $this->m_user->tampil_data_member()->result();
        $data['user'] = $this->m_user->tampil_data();
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('transaksi/baru',$data);
    }

    function data_proses(){
        $where = array (
			'id_outlet' => $this->session->userdata('id_outlet'),
            'status' => "proses"
		);
		$data['transaksi'] = $this->m_outlet->data_laporan_kasir($where,'tb_transaksi')->result();
        $data['outlet'] = $this->m_outlet->tampil_data()->result();
        $data['member'] = $this->m_user->tampil_data_member()->result();
        $data['user'] = $this->m_user->tampil_data();
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('transaksi/proses',$data);
    }

    function data_selesai(){
        $where = array (
			'id_outlet' => $this->session->userdata('id_outlet'),
            'status' => "selesai"
		);
		$data['transaksi'] = $this->m_outlet->data_laporan_kasir($where,'tb_transaksi')->result();
        $data['outlet'] = $this->m_outlet->tampil_data()->result();
        $data['member'] = $this->m_user->tampil_data_member()->result();
        $data['user'] = $this->m_user->tampil_data();
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('transaksi/selesai',$data);
    }

    function data_diambil(){
        $where = array (
			'id_outlet' => $this->session->userdata('id_outlet'),
            'status' => "diambil"
		);
		$data['transaksi'] = $this->m_outlet->data_laporan_kasir($where,'tb_transaksi')->result();
        $data['outlet'] = $this->m_outlet->tampil_data()->result();
        $data['member'] = $this->m_user->tampil_data_member()->result();
        $data['user'] = $this->m_user->tampil_data();
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('transaksi/diambil',$data);
    }

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_transaksi($where,'tb_transaksi');
		redirect('transaksi');
	}

    function detail_transaksi($id){
	    $data['trans'] = $this->m_data->detail_transaksi($id);
        $this->load->view('transaksi/detail',$data);
        // var_dump($data);
        // die;
    }
    public function proses_update($id)
    {
        $data = array(
            'status' => "proses"
            );
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_transaksi');
        redirect('transaksi/data_proses');
    }
    public function selesai_update($id)
    {
        $data = array(
            'status' => "selesai"
            );
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_transaksi');
        redirect('transaksi/data_selesai');
    }
    public function diambil_update($id)
    {
        $data = array(
            'status' => "diambil"
            );
            
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_transaksi');
        redirect('transaksi/data_diambil');
    }
    // function print(){
    //     $data['transaksi'] = $this->m_data->tampil_data_transaksi();
    //     $data['outlet'] = $this->m_outlet->tampil_data()->result();
    //     $data['member'] = $this->m_user->tampil_data_member()->result();
    //     $data['user'] = $this->m_user->tampil_data();
    //     $data['paket'] = $this->m_data->tampil_data_paket();
	// 	$this->load->view('laporan',$data);
    // }

    function print($id){
        $data['trans'] = $this->m_data->detail_transaksi($id);
        $this->load->view('print',$data);
    }

    function bayar($id){
        $data = array(
            'dibayar' => "dibayar"
            );
            
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_transaksi');
        redirect('transaksi/data_diambil');
    }

    function pesanan_masuk(){
        $where = array (
            'id_outlet' => $this->session->userdata('id_outlet'),
            'status' => "pending"
		);
		$data['transaksi'] = $this->m_outlet->data_laporan_kasir($where,'tb_transaksi')->result();
        $this->load->view('transaksi/pesanan_masuk',$data);
    }
}