<?php
class M_outlet extends CI_Model{

    function tampil_data(){
		return $this->db->get('tb_outlet');
	}
    function tambah($data)
	{
		$this->db->insert('tb_outlet', $data);
	}

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}