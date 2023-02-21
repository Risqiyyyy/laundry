<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

    public function login()
    {
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() === false) {
            $this->load->view('auth/login');
        } else {
            $this->aksi_login();
        }
    }
 
	function aksi_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $cek_user = $this->db->get_where('tb_user', ['username' => $username])->num_rows();
        $user_arr = $this->db->get_where('tb_user', ['username' => $password])->row_array();
        if ($cek_user == 1) {
            if(password_verify($password, $user_arr['password'])){
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                    'role' => $user_arr['role']
                    );

                $this->session->set_userdata($data_session);
                redirect(base_url("dashboard"));
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Password atau username salah!</div>');
                $this->load->view('auth/login');
                redirect('auth/login');
            }
        }
		
	}

    function register(){
        if ($this->session->userdata('role')) {
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
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
        $id_outlet = $this->input->post('id_outlet');
        $role = $this->input->post('role');
		    $this->m_login->register($nama,$username,$password,$id_outlet,$role);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Ditambahkan</div>');
			redirect(base_url("auth/register"));
        }

    public function logout()
        {
            $this->session->unset_userdata('role');
            redirect('auth');
        }

}
