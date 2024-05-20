<?php

class Model_buku extends CI_Model{
	public function tampil_data()
	{
		 return $this->db->get('tb_perpus');
	}

	public function tambah_buku($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_buku($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function detail_buku($id_buku)
	{
		$result = $this->db->where('id_buku', $id_buku)->get('tb_perpus');
		if ($result->num_rows()>0) {
			return $result->result();
		}else{
			return false;
		}
	}

	public function data_customer()
	{
		return $this->db->get('tb_pelanggan');
	}

	public function edit_pelanggan($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_dataa($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_dataa($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function pinjam($data,$table)
	{
		$this->db->insert($table, $data);
	}

}