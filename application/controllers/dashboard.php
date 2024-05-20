<?php
	
	class Dashboard extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('role_id') !='2') {
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
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer');
		}
		public function detail($id_buku)
		{
			$data['buku'] = $this->model_buku->detail_buku($id_buku);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_buku', $data);
			$this->load->view('templates/footer');
		}

		public function pinjam($id_pelanggan)
		{
			$data['plggn'] = $this->model_buku->pinjam($id_pelanggan);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pinjam', $data);
			$this->load->view('templates/footer');
		}

	}