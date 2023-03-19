<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
        if ($this->session->userdata('role') != null) {
            redirect('dashboard');
        }
		$this->load->view('auth/login');
	}

    public function login()
    {
        if ($this->session->userdata('role') != null) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() === false) {
            $this->load->view('auth/login');
        } else {
            $this->proses_login();
        }
    }
    function proses_login(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->m_login->login_user($username,$password))
		{
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('auth');
		}
    }

    function register(){
        if ($this->session->userdata('role') != null) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register');
        } else {
            $this->aksi_register();
        }
    }

    function aksi_register(){
        if ($this->session->userdata('role') != null) {
            redirect('dashboard');
        }
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
        $id_outlet = $this->input->post('id_outlet');
        $role = $this->input->post('role');
        $alamat = $this->input->post('alamat');
        $tlp = $this->input->post('tlp');
		    $this->m_login->register($id,$nama,$username,$password,$id_outlet,$role,$alamat,$tlp);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Ditambahkan</div>');
			redirect(base_url("auth/register"));
        }

    public function logout()
        {
            $this->session->unset_userdata('role');
            redirect('auth');
        }

}
