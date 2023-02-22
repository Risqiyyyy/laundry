<?php
class M_data extends CI_Model{

    function tampil_data_paket(){
		return $this->db->get('tb_paket');
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
		$this->db->select('tb_transaksi.*,tb_outlet.nama,tb_outlet.id AS outlet,tb_member.id AS member,tb_user.id AS user,tb_outlet.nama AS nama_outlet');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_outlet','tb_outlet.id = tb_transaksi.id', 'left');
		$this->db->join('tb_member','tb_member.id = tb_transaksi.id', 'left');
		$this->db->join('tb_user','tb_user.id = tb_transaksi.id', 'left');
		return $this->db->get();

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