<?php
class M_login extends CI_Model{	
	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function login_user($username,$password)
	{

        $query = $this->db->get_where('tb_user',array('username'=>$username));
		$member = $this->db->get('tb_member');
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
					'id' => $data_user->id,
					'id_member'=>$data_member->id
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
	
	function register($id,$nama,$username,$password,$id_outlet,$akses,$alamat,$tlp)
	{
		$data_user = array(
			'id' =>$id,
			'nama'=>$nama,
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
            'id_outlet'=> $id_outlet,
			'role'=> "member"
		);
		$data_member = array(
			'id' => $id,
			'nama' => $nama,
			'alamat' => $alamat,
			'tlp' => $tlp
		);
		$this->db->insert('tb_user',$data_user);
		$this->db->insert('tb_member',$data_member);
	}
}