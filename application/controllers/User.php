<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$data['user'] = $this->m_user->tampil_data()->result();
		$this->load->view('user/data',$data);
	}


    function tambah(){
        if(isset($_POST['submit']))
		{   
            $nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
            $otlet = $this->input->post('id_outlet');
			$role = $this->input->post('role');
			$data_user = array(
				'nama'=>$nama,
				'username'=>$username,
				'password'=>password_hash($password,PASSWORD_DEFAULT),
				'id_outlet'=> 1,
				'role'=> $role
			);
			$this->m_user->tambah($data_user);
			redirect('user');
		}
		else
		{
			$data['user'] = $this->m_user->tampil_data()->result();
			$this->load->view('user/data',$data);
		}
    }
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data_user($where,'tb_user');
		redirect('user');
	}

	function edit($id){
		$this->load->view('user/edit');
	}

	
}