<?php

class data_pelanggan extends CI_Controller
{
	public function index()
	{
		$data['plggn'] = $this->model_buku->data_customer()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pelanggan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function edit($id)
	{
		$where = array('id_pelanggan' =>$id);
		$data['plggn'] = $this->model_buku->edit_pelanggan($where, 'tb_pelanggan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_pelanggan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id 				=$this->input->POST('id_pelanggan');
		$nama_pelanggan		=$this->input->POST('nama_pelanggan');
		$alamat_pelanggan	=$this->input->POST('alamat_pelanggan');
		$nohp_pelanggan 	=$this->input->POST('nohp_pelanggan');
		$tgl_pinjam			=$this->input->POST('tgl_pinjam');
		$tgl_kembali		=$this->input->POST('tgl_kembali');
	
		$data = array(

			'nama_pelanggan'	=>$nama_pelanggan,
			'alamat_pelanggan'	=>$alamat_pelanggan,
			'nohp_pelanggan'	=>$nohp_pelanggan,
			'tgl_pinjam'		=>$tgl_pinjam,
			'tgl_kembali'		=>$tgl_kembali
		
		);

		$where = array(
			'id_pelanggan' => $id
		);

		$this->model_buku->update_dataa($where, $data, 'tb_pelanggan');
		redirect('admin/data_pelanggan/index');
	}

	public function hapus($id)
	{
		$where = array('id_pelanggan' =>$id);
		$this->model_buku->delete_dataa($where, 'tb_pelanggan');
		redirect('admin/data_pelanggan/index');
	}

	public function tambah_aksi()
	{
		$nama_pelanggan		= $this->input->POST('nama_pelanggan');
		$alamat_pelanggan	= $this->input->POST('alamat_pelanggan');
		$nohp_pelanggan		= $this->input->POST('nohp_pelanggan');
		$tgl_pinjam			= $this->input->POST('tgl_pinjam');
		$tgl_kembali		= $this->input->POST('tgl_kembali');
	
		
		$data = array(
			'nama_pelanggan'  	=> $nama_pelanggan ,
			'alamat_pelanggan' 	=> $alamat_pelanggan,
			'nohp_pelanggan'	=> $nohp_pelanggan,
			'tgl_pinjam'		=> $tgl_pinjam,
			'tgl_kembali'		=> $tgl_kembali
		
		);
			
			$this->model_buku->pinjam($data, 'tb_pelanggan');
			redirect('dashboard/index');
	}
}