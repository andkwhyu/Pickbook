<?php

class data_buku extends CI_Controller
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
		$data['buku'] = $this->model_buku->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_buku', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$judul_buku		= $this->input->POST('judulbuku');
		$keterangan		= $this->input->POST('keterangan');
		$kategori		= $this->input->POST('kategori');
		$penerbit		= $this->input->POST('penerbit');
		$jml_hal		= $this->input->POST('jml_hal');
		$thn_terbit		= $this->input->POST('thn_terbit');
		$pengarang		= $this->input->POST('pengarang');
		$gambar	= $_FILES ['gambar']['name'];
		if ($gambar=''){}else{
			$config['upload_path'] ='./uploads';
			$config['allowed_type'] ='jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gagal upload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(
			'judul_buku'  	=> $judul_buku ,
			'keterangan' 	=> $keterangan,
			'kategori'	 	=> $kategori,
			'penerbit'		=> $penerbit,
			'jml_hal'		=> $jml_hal,
			'thn_terbit'	=> $thn_terbit,
			'pengarang'		=> $pengarang,
			'gambar'		=> $gambar
		);
			
			$this->model_buku->tambah_buku($data, 'tb_perpus');
			redirect('admin/data_buku/index');
	}

	public function edit($id)
	{
		$where = array('id_buku' =>$id);
		$data['buku'] = $this->model_buku->edit_buku($where, 'tb_perpus')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_buku', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id 			=$this->input->POST('id_buku');
		$judul_buku 	=$this->input->POST('judul_buku');
		$keterangan 	=$this->input->POST('keterangan');
		$kategori	 	=$this->input->POST('kategori');
		$penerbit		=$this->input->POST('penerbit');
		$jml_hal		=$this->input->POST('jml_hal');
		$thn_terbit		=$this->input->POST('thn_terbit');
		$pengarang		=$this->input->POST('pengarang');

		$data = array(

			'judul_buku'	=>$judul_buku,
			'keterangan'	=>$keterangan,
			'kategori'		=>$kategori,
			'penerbit'		=>$penerbit,
			'jml_hal'		=>$jml_hal,
			'thn_terbit'	=>$thn_terbit,
			'pengarang'		=>$pengarang
		);

		$where = array(
			'id_buku' => $id
		);

		$this->model_buku->update_data($where, $data, 'tb_perpus');
		redirect('admin/data_buku/index');
	}

	public function hapus($id)
	{
		$where = array('id_buku' =>$id);
		$this->model_buku->delete_data($where, 'tb_perpus');
		redirect('admin/data_buku/index');
	}
}