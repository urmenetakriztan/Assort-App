<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Trauma extends CI_Controller{

	public function __construct(){

	parent::__construct();

	//if (!$this->session->userdata('logged_in')) {
			
			//$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			//redirect('Login');
		//}

	}



	public function index(){

		$this->load->view('trauma/Main');


	}

	public function trauma2(){

		$this->load->view('trauma/Main2');


	}




 }
 ?>