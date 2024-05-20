<?php 
	
	class model_novel extends CI_Model 
	{
		public function data_novel()
		{
			return $this->db->get_where("tb_perpus", array('kategori' => 'novel'));
		}		

		public function data_sastra()
		{
			return $this->db->get_where("tb_perpus", array('kategori' => 'sastra'));
		}		

		public function data_pengembangan_diri()
		{
			return $this->db->get_where("tb_perpus", array('kategori' => 'pengembangan_diri'));
		}	

		public function data_petualangan()
		{
			return $this->db->get_where("tb_perpus", array('kategori' => 'petualangan'));
		}		

		public function data_fantasi()
		{
			return $this->db->get_where("tb_perpus", array('kategori' => 'fantasi'));
		}	
	

	}