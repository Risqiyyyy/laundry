<?php
class M_data extends CI_Model{

    function tampil_data_paket(){
		$this->db->select('*,tb_paket.id as paket_id, tb_outlet.id as outlet_id');
		$this->db->from('tb_paket'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_paket.id_outlet');
		$query = $this->db->get();
		return $query->result();
	}

	function update_data_member($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function update($table, $data, $where)
    {
        $this->db->where($where)
                ->update($table, $data);
            return TRUE;
    }

	function edit_data_member($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function invoice($kode_invoice){		
		$this->db->select('tb_transaksi.*');
		$this->db->from('tb_transaksi');
		$this->db->where('kode_invoice =',$kode_invoice);
		$query = $this->db->get();
		return $query->row_array();
	}

	function edit_data_paket($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data_paket($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
    function tambah_paket($data)
	{
		$this->db->insert('tb_paket', $data);
	}

	function tambah_detail_transaksi($data)
	{
		$this->db->insert('tb_detail_transaksi', $data);
	}

    function hapus_data_paket($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function detail_transaksi($id = NULL){
		$this->db->where('tb_transaksi.id', $id);
		$this->db->select('*, tb_outlet.id as outlet_id, tb_member.id as id_member,tb_user.id as user_id,tb_paket.id as paket_id,tb_member.nama as nama_member,tb_outlet.nama as nama_outlet,tb_user.nama nama_user');
		$this->db->from('tb_transaksi'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_transaksi.id_outlet');
		$this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
		$this->db->join('tb_user', 'tb_user.id = tb_transaksi.id_user');
		$this->db->join('tb_detail_transaksi', 'tb_transaksi.id = tb_detail_transaksi.id_transaksi');
		$this->db->join('tb_paket', 'tb_paket.id = tb_detail_transaksi.id_paket');
		$query = $this->db->get();
		return $query->row_array();
		// $query = $this->db->get_where('tb_transaksi', array('id' => $id))->row_array();
		// return $query;
	}

	public function detail_invoice($kode_invoice = NULL){
		$this->db->where('tb_transaksi.id', $kode_invoice);
		$this->db->select('*, tb_outlet.id as outlet_id, tb_member.id as id_member,tb_user.id as user_id,tb_paket.id as paket_id,tb_member.nama as nama_member,tb_outlet.nama as nama_outlet,tb_user.nama nama_user');
		$this->db->from('tb_transaksi'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_transaksi.id_outlet');
		$this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
		$this->db->join('tb_user', 'tb_user.id = tb_transaksi.id_user');
		$this->db->join('tb_detail_transaksi', 'tb_transaksi.id = tb_detail_transaksi.id_transaksi');
		$this->db->join('tb_paket', 'tb_paket.id = tb_detail_transaksi.id_paket');
		$query = $this->db->get();
		return $query->row_array();
		// $query = $this->db->get_where('tb_transaksi', array('id' => $id))->row_array();
		// return $query;
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

	function tampil_data_baru(){
		$this->db->select('*,tb_transaksi.id as transaksi_id, tb_outlet.id as outlet_id, tb_member.nama as nama_member,tb_user.nama as nama_user,tb_outlet.nama as nama_outlet');
		$this->db->from('tb_transaksi'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_transaksi.id_outlet');
		$this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
		$this->db->join('tb_user', 'tb_user.id = tb_transaksi.id_user');
		$this->db->where('tb_transaksi.status = "baru"');
		$query = $this->db->get();
		return $query->result();
	}
	function tampil_data_proses(){
		$this->db->select('*,tb_transaksi.id as transaksi_id, tb_outlet.id as outlet_id, tb_member.nama as nama_member,tb_user.nama as nama_user,tb_outlet.nama as nama_outlet');
		$this->db->from('tb_transaksi'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_transaksi.id_outlet');
		$this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
		$this->db->join('tb_user', 'tb_user.id = tb_transaksi.id_user');
		$this->db->where('tb_transaksi.status = "proses"');
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_data_selesai(){
		$this->db->select('*,tb_transaksi.id as transaksi_id, tb_outlet.id as outlet_id, tb_member.nama as nama_member,tb_user.nama as nama_user,tb_outlet.nama as nama_outlet');
		$this->db->from('tb_transaksi'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_transaksi.id_outlet');
		$this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
		$this->db->join('tb_user', 'tb_user.id = tb_transaksi.id_user');
		$this->db->where('tb_transaksi.status = "selesai"');
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_data_diambil(){
		$this->db->select('*,tb_transaksi.id as transaksi_id, tb_outlet.id as outlet_id, tb_member.nama as nama_member,tb_user.nama as nama_user,tb_outlet.nama as nama_outlet');
		$this->db->from('tb_transaksi'); 
		$this->db->join('tb_outlet', 'tb_outlet.id = tb_transaksi.id_outlet');
		$this->db->join('tb_member', 'tb_member.id = tb_transaksi.id_member');
		$this->db->join('tb_user', 'tb_user.id = tb_transaksi.id_user');
		$this->db->where('tb_transaksi.status = "diambil"');
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