<?php 

class Chat extends CI_Controller{

	public function __construct(){

	parent::__construct();

	if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}



	public function index(){

		$this->load->view('chat/Main');


	}

	public function compose(){

		$this->load->view('chat/compose');
	}


}



 ?>