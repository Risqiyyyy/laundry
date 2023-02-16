<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('user/add');
	}

    function tambah(){
        if(isset($_POST['submit']))
		{   
            $nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
            $otlet = $this->input->post('id_otlet');
			$role = $this->input->post('role');
			$data = array(
                'nama' => $nama,
				'username' => $username,
				'password' => $password,
                'id_otlet' => $otlet,
				'role' => $role
				);
			$this->m_user->tambah($data);
			redirect('user/add');
		}
		else
		{
			$data['tb_user'] = $this->m_user->tampil_data()->result();
			$this->load->view('user/add');
		}
    }
}
