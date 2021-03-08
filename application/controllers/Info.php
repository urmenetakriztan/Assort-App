<?php 

	Class Info extends CI_Controller{

		public function __construct(){

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}




	public function info1(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




			$data['patients'] = $this->Patient_model->get_info_patients();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}




	public function info2(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients5();


			$this->load->view('templates/info/Header2', $data);
			$this->load->view('layouts/Info5', $data);
			$this->load->view('templates/info/Footer2');

		} else {
			echo "Access Denied!";
		}


	}




	public function info3(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients6();


			$this->load->view('templates/info/Header3', $data);
			$this->load->view('layouts/Info6', $data);
			$this->load->view('templates/info/Footer3');

		} else {
			echo "Access Denied!";
		}


	}


	public function info4(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients7();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info7', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}




	public function info5(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients8();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info8', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}




	public function info6(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients9();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info9', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}





	public function info7(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients10();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info10', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}



	public function info8(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients11();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info11', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}





	public function info9(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients12();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info12', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}




	public function info10(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients13();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info13', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}



	public function info11(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients14();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info14', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}


	public function info12(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients15();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info15', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}





	public function info13(){


	    if($this->session->userdata('type')== 'admin') {


			$user_id = $this->session->userdata('user_id');

		
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['patients'] = $this->Patient_model->get_info_patients16();


			$this->load->view('templates/info/Header', $data);
			$this->load->view('layouts/Info16', $data);
			$this->load->view('templates/info/Footer');

		} else {
			echo "Access Denied!";
		}


	}























	}



 ?>