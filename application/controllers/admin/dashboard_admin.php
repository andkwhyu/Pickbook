<?php

class dashboard_admin extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('role_id') !='1') {
			$this->session->set_flashdata('pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				<strong>
  					Please login
  				</strong>
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');
	}
	public function update()
	{
		$id 			= $this->input->POST('id');
		$judul_buku 	= $this->input->POST('judul_buku');
		$keterangan		= $this->input->POST('keterangan');
		$kategori 		= $this->input->POST('kategori');
		$gambar			= $this->input->POST('gambar');
		$penerbit		= $this->input->POST('penerbit');
		$jml_hal		= $this->input->POST('jml_hal');
		$thn_terbit		= $this->input->POST('thn_terbit');
		$pengarang		= $this->input->POST('pengarang');
	

		$data = array(
			'judul_buku'	=> $judul_buku,
			'keterangan'	=> $keterangan,
			'kategori'		=> $kategori,
			'gambar'		=> $gambar,
			'penerbit'		=> $penerbit,
			'jml_hal'		=> $jml_hal,
			'thn_terbit'	=> $thn_terbit,
			'pengarang'		=> $pengarang
		);

		$where = array(
			'id_buku' => $id
		);

		$this->model_buku->update_data($where, $data, 'tb_perpus');
		redirect('admin/data_buku/index');
	}
}