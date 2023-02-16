<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_user');
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
        $user_arr = $this->db->get_where('tb_user', ['username' => $username])->row_array();
        
       
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
                redirect('/');
            }
        }
		
	}

    public function register()
	{
		$this->load->view('auth/register');
	}
}
