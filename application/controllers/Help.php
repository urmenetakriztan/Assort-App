<?php 

class Help extends CI_Controller{

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




		$this->load->view('templates/settings/help/Header', $data);
		$this->load->view('help/Main', $data);
		$this->load->view('templates/settings/help/Footer');
		


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


		$this->load->view('templates/settings/help2/Header', $data);
		$this->load->view('help/Main2', $data);
		$this->load->view('templates/settings/help2/Footer');
		


			} else {
			echo "Access Denied!";
		}


	}






	public function TacruApp(){


		if($this->session->userdata('type')== 'admin') {


		$user_id = $this->session->userdata('user_id');	



		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header2', $data);
		$this->load->view('help/TacruApp');
		$this->load->view('templates/settings/help/Footer2');

		} else {
			echo "Access Denied!";
		}


		

	}



	public function TacruApp2(){


		if($this->session->userdata('type')== 'staff') {


		    $user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		
		

		


		$this->load->view('templates/settings/help2/Header2', $data);
		$this->load->view('help/TacruApp2');
		$this->load->view('templates/settings/help2/Footer2');

		} else {
			echo "Access Denied!";
		}


		

	}








	public function SystemRequirements(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');	


		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header3', $data);
		$this->load->view('help/SystemRequirements');
		$this->load->view('templates/settings/help/Footer3');

		} else {
			echo "Access Denied!";
		}

	}




	public function SystemRequirements2(){

		if($this->session->userdata('type')== 'staff') {


			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		
		

		


		$this->load->view('templates/settings/help2/Header3', $data);
		$this->load->view('help/SystemRequirements2');
		$this->load->view('templates/settings/help2/Footer3');

		} else {
			echo "Access Denied!";
		}

	}




	public function KeyFeatures(){


		$this->load->view('help/KeyFeatures');


	}










	public function FeaturesAndFunctions(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');	


		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header4', $data);
		$this->load->view('help/FeaturesAndFunctions');
		$this->load->view('templates/settings/help/Footer4');

		} else {
			echo "Access Denied!";
		}

	}



	public function FeaturesAndFunctions2(){

		if($this->session->userdata('type')== 'staff') {

			

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);



		
		

		


		$this->load->view('templates/settings/help2/Header4', $data);
		$this->load->view('help/FeaturesAndFunctions2');
		$this->load->view('templates/settings/help2/Footer4');

		} else {
			echo "Access Denied!";
		}

	}







	

	public function Feature1(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');


		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header5', $data);
		$this->load->view('help/features/feature1');
		$this->load->view('templates/settings/help/Footer5');

		} else {
			echo "Access Denied!";
		}


		


	}



	public function Features1(){

		if($this->session->userdata('type')== 'staff') {




		
		$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		


		$this->load->view('templates/settings/help2/Header5', $data);
		$this->load->view('help/features2/feature1');
		$this->load->view('templates/settings/help2/Footer5');

		} else {
			echo "Access Denied!";
		}

	}










	public function Feature2(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');


		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header6', $data);
		$this->load->view('help/features/feature2');
		$this->load->view('templates/settings/help/Footer6');

		} else {
			echo "Access Denied!";
		}
	}



	public function Features2(){

		if($this->session->userdata('type')== 'staff') {




		
		$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		


		$this->load->view('templates/settings/help2/Header6', $data);
		$this->load->view('help/features2/feature2');
		$this->load->view('templates/settings/help2/Footer6');

		} else {
			echo "Access Denied!";
		}
	}











	public function Feature3(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');	

		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header7', $data);
		$this->load->view('help/features/feature3');
		$this->load->view('templates/settings/help/Footer7');

		} else {
			echo "Access Denied!";
		}

	}



	public function Features3(){

		if($this->session->userdata('type')== 'staff') {



		
		$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		


		$this->load->view('templates/settings/help2/Header7', $data);
		$this->load->view('help/features2/feature3');
		$this->load->view('templates/settings/help2/Footer7');

		} else {
			echo "Access Denied!";
		}

	}








	public function Feature4(){

		if($this->session->userdata('type')== 'admin') {


		$user_id = $this->session->userdata('user_id');

		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header8', $data);
		$this->load->view('help/features/feature4');
		$this->load->view('templates/settings/help/Footer8');

		} else {
			echo "Access Denied!";
		}
		

	}



	public function Features4(){

		if($this->session->userdata('type')== 'staff') {




		
		$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		


		$this->load->view('templates/settings/help2/Header8', $data);
		$this->load->view('help/features2/feature4');
		$this->load->view('templates/settings/help2/Footer8');

		} else {
			echo "Access Denied!";
		}
		

	}








	public function Feature5(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');


		
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		


		$this->load->view('templates/settings/help/Header9', $data);
		$this->load->view('help/features/feature5');
		$this->load->view('templates/settings/help/Footer9');

		} else {
			echo "Access Denied!";
		}
		

	}



	public function Features5(){

		if($this->session->userdata('type')== 'staff') {




		
		$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		


		$this->load->view('templates/settings/help2/Header9', $data);
		$this->load->view('help/features2/feature5');
		$this->load->view('templates/settings/help2/Footer9');

		} else {
			echo "Access Denied!";
		}
		

	}
















 }
 ?>