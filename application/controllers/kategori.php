<?php 

	class kategori extends CI_Controller{
		public function novel()
		{
			$data['novel']=$this->model_novel->data_novel()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('novel', $data);
			$this->load->view('templates/footer');
		}
			public function sastra()
		{
			$data['sastra']=$this->model_novel->data_sastra()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('sastra', $data);
			$this->load->view('templates/footer');
		}
			public function pengembangan_diri()
		{
			$data['pengembangan_diri']=$this->model_novel->data_pengembangan_diri()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pengembangan_diri', $data);
			$this->load->view('templates/footer');
		}

			public function petualangan()
		{
			$data['petualangan']=$this->model_novel->data_petualangan()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('petualangan', $data);
			$this->load->view('templates/footer');
		}

			public function fantasi()
		{
			$data['fantasi']=$this->model_novel->data_fantasi()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('fantasi', $data);
			$this->load->view('templates/footer');
		}
	}