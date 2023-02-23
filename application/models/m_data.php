<?php
class M_data extends CI_Model{

    function tampil_data_paket(){
		$this->db->select('*,tb_paket.id as paket_id, tb_outlet.id as outlet_id');
		$this->db->from('tb_paket'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_paket.id_outlet');
		$query = $this->db->get();
		return $query->result();
	}

    function tambah_paket($data)
	{
		$this->db->insert('tb_paket', $data);
	}

    function hapus_data_paket($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function tampil_data_transaksi2(){
	return $this->db->get('tb_transaksi');
	}


	function tampil_data_transaksi(){
		$this->db->select('*,tb_transaksi.id as transaksi_id, tb_outlet.id as outlet_id, tb_member.nama as nama_member,tb_user.nama as nama_user,tb_outlet.nama as nama_outlet');
		$this->db->from('tb_transaksi'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_transaksi.id_outlet');
		$this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
		$this->db->join('tb_user', 'tb_user.id = tb_transaksi.id_user');
		$query = $this->db->get();
		return $query->result();

	}
	
    function tambah_transaksi($data)
	{
		$this->db->insert('tb_transaksi', $data);
	}

    function hapus_transaksi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_transaksi($where,$table){		
		return $this->db->get_where($table,$where);
	}
}