<?php
class M_user extends CI_Model{

    function tampil_data(){
		return $this->db->get('tb_user');
	}

	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
    
    function tambah($data)
	{
		$this->db->insert('tb_user', $data);
	}
	
}