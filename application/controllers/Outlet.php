<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_outlet');
	}

	public function index()
	{
        $data['outlet'] = $this->m_outlet->tampil_data()->result();
		$this->load->view('outlet/data',$data);
	}

    function tambah(){
        if(isset($_POST['submit']))
		{   
            $nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
            $tlp = $this->input->post('tlp');
			$data_outlet = array(
				'nama'=>$nama,
				'alamat'=>$alamat,
				'tlp'=> $tlp
			);
			$this->m_outlet->tambah($data_outlet);
			redirect('outlet');
		}
		else
		{
			$data['user'] = $this->m_outlet->tampil_data()->result();
			$this->load->view('outlet/data',$data);
		}
    }

    function hapus($id){
		$where = array('id' => $id);
		$this->m_outlet->hapus_data($where,'tb_outlet');
		redirect('outlet');
	}
}
