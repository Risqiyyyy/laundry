<?php
class M_login extends CI_Model{	
	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function login_user($username,$password)
	{
        $query = $this->db->get_where('tb_user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
				$data_session = array(
					'username' => $username,
					'nama' => $data_user->nama,
					'is_login' => True,
					'role' => $data_user->role,
					'id_outlet' => $data_user->id_outlet,
					'id' => $data_user->id
				);				
				$this->session->set_userdata($data_session);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
	function register($nama,$username,$password,$id_outlet,$akses)
	{
		$data_user = array(
			'nama'=>$nama,
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
            'id_outlet'=> 1,
			'role'=> "admin"
		);
		$this->db->insert('tb_user',$data_user);
	}
}