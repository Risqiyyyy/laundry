<?php
class M_login extends CI_Model{	
	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
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