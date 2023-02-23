<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_outlet');
	}

	public function index()
	{
		$data['outlet'] = $this->m_outlet->tampil_data()->result();
		$data['user'] = $this->m_user->tampil_data();
		$this->load->view('user/data',$data);
	}


    function tambah(){
        if(isset($_POST['submit']))
		{   
            $nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $otlet = $this->input->post('id_outlet');
			$role = $this->input->post('role');
			$data_user = array(
				'nama'=>$nama,
				'username'=>$username,
				'password'=>password_hash($password,PASSWORD_DEFAULT),
				'id_outlet'=> $otlet,
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

	function member(){
		{
			$data['member'] = $this->m_user->tampil_data_member()->result();
			$this->load->view('user/member',$data);
		}
	}
	function tambah_member(){
		if(isset($_POST['submit']))
		{   
            $nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tlp = $this->input->post('tlp');
			$data_user = array(
				'nama'=>$nama,
				'alamat'=>$alamat,
				'jenis_kelamin'=> $jenis_kelamin,
				'tlp'=> $tlp
			);
			$this->m_user->tambah_member($data_user);
			redirect('user/member');
		}
		else
		{
			$data['member'] = $this->m_user->tampil_data()->result();
			$this->load->view('user/member',$data);
		}
	}
}