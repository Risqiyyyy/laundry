<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    function __construct(){
		parent::__construct();
		if ($this->session->userdata('role') != "admin" ) {
            redirect('auth');
        }
		$this->load->model('m_data');
		$this->load->model('m_outlet');
	}

	public function index()
	{
		$data['outlet'] = $this->m_outlet->tampil_data()->result();
        $data['paket'] = $this->m_data->tampil_data_paket();
		$this->load->view('paket/data',$data);
		// var_dump($data);
		// die;
	}

    function tambah(){
        if(isset($_POST['submit']))
		{   
			$id_outlet = $this->input->post('id_outlet');
            $jenis = $this->input->post('jenis');
            $nama_paket = $this->input->post('nama_paket');
            $harga = $this->input->post('harga');
			$data_paket = array(
				'id_outlet'=>$id_outlet,
				'jenis'=> $jenis,
				'nama_paket'=> $nama_paket,
                'harga'=> $harga,
			);
			$this->m_data->tambah_paket($data_paket);
			redirect('paket');
		}
		else
		{
			$data['paket'] = $this->m_data->tampil_data_paket()->result();
			$this->load->view('paket/data',$data);
		}
    }
	function edit_paket($id){
		$where = array('id' => $id);
		$data['paket'] = $this->m_data->edit_data_paket($where,'tb_paket')->result();
		$this->load->view('paket/edit_paket',$data);
	}

	function update_paket(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$nama_paket = $this->input->post('nama_paket');	 
		$harga = $this->input->post('harga');	 
		$data = array(
			'jenis' => $jenis,
			'nama_paket' => $nama_paket,
			'harga' => $harga
		);
	 
		$where = array(
			'id' => $id
		);
		$this->m_data->update_data_paket($where,$data,'tb_paket');
		redirect('paket');
	}

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data_paket($where,'tb_paket');
		redirect('paket');
	}
}