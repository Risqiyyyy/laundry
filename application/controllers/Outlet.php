<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {

    function __construct(){
		parent::__construct();
		if ($this->session->userdata('role') != "admin") {
            redirect('auth');
        }
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

	function edit_outlet($id){
		$where = array('id' => $id);
		$data['outlet'] = $this->m_outlet->edit_data($where,'tb_outlet')->result();
		$this->load->view('outlet/edit',$data);
	}
	function update_outlet(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tlp = $this->input->post('tlp');
	 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'tlp' => $tlp
		);
	 
		$where = array(
			'id' => $id
		);
		$this->m_outlet->update_data($where,$data,'tb_outlet');
		redirect('outlet');
	}


    function hapus($id){
		$where = array('id' => $id);
		$this->m_outlet->hapus_data($where,'tb_outlet');
		redirect('outlet');
	}
}
