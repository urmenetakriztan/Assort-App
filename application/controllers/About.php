<?php 

class About extends CI_Controller{

	public function __construct(){

	parent::__construct();

	if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}



	public function index(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');	

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();






		
		$this->load->view('templates/settings/about/Header', $data);
		$this->load->view('about/Main');
		$this->load->view('templates/settings/about/Footer');	

		

		} else {
			echo "Access Denied!";
		}


	}


	public function home(){

		if($this->session->userdata('type')== 'staff') {

		$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);

		
		$this->load->view('templates/settings/about2/Header', $data);
		$this->load->view('about/Main2');
		$this->load->view('templates/settings/about2/Footer');	

		

		} else {
			echo "Access Denied!";
		}


	}

	




 }
 ?>