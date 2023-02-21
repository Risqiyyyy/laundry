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
}