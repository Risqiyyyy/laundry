<?php
class M_user extends CI_Model{

    function tampil_data(){
		$this->db->select('*,tb_outlet.nama as nama_outlet,tb_user.nama as nama_user,tb_user.id as id_user');
		$this->db->from('tb_user'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_user.id_outlet');
		$query = $this->db->get();
		return $query->result();
	}

	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
    
    function tambah($data)
	{
		$this->db->insert('tb_user', $data);
	}

	function tampil_data_member(){
		return $this->db->get('tb_member');
	}
	
	function tambah_member($data)
	{
		$this->db->insert('tb_member', $data);
	}
	
}