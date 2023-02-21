<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
        $data['paket'] = $this->m_data->tampil_data_paket()->result();
		$this->load->view('paket/data',$data);
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
				'jenis'=>$jenis,
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

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data_paket($where,'tb_paket');
		redirect('paket');
	}
}