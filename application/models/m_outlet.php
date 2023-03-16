<?php
class M_outlet extends CI_Model{

    function tampil_data(){
		return $this->db->get('tb_outlet');
	}
    function tambah($data)
	{
		$this->db->insert('tb_outlet', $data);
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function data_outlet($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function data_laporan_kasir($where,$table){
		return $this->db->get_where($table,$where);
	}

	function tampil_data_transaksi($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}