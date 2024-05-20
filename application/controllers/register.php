<?php 

 class register extends CI_Controller
 {
 	public function index()
 	{
 		$this->form_validation->set_rules('nama','Nama','required',['required'	=> 'Fullname field is required']);
		$this->form_validation->set_rules('username','Username','required',['required'	=> 'Username field is required']);
		$this->form_validation->set_rules('password_1','Password','required|matches[password_2]',['required'	=> 'Password field is required', 'matches' => 'Password doesnt match']);
		$this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
 		if($this->form_validation->run() == FALSE)
 		{
	 		$this->load->view('templates/header');
	 		$this->load->view('register');
	 		$this->load->view('templates/footer');
 		}else{
	 		$data = array(
	 			'id'		=>'',
	 			'nama'		=> $this->input->POST('nama'),
	 			'username'	=> $this->input->POST('username'),
	 			'password'	=> $this->input->POST('password_1'),
	 			'role_id'	=> 2,
	 		);
	 		$this->db->insert('tb_user', $data);
	 		redirect('auth/login');
 		}
	 }
}	
