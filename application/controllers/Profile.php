<?php 

class Profile extends CI_Controller{

	public function __construct(){

	parent::__construct();

	if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}



	public function index(){


		if($this->session->userdata('type')== 'staff') {

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo();

		$data['users'] = $this->User_model->get_users();
		
		$this->load->view('templates/settings/profile/Header', $data);
		$this->load->view('profile/Display', $data);
		$this->load->view('templates/settings/profile/Footer');	

		

		} else {
			echo "Access Denied!";
		}

		

		


	}

	public function archived(){

		$data['patients'] = $this->Patient_model->get_archived_patients();

		$this->load->view('patients/archive', $data);


	}



	public function display($user_id) {

		if($this->session->userdata('type')== 'staff') {

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);

		$data['account_data'] = $this->User_model->get_user($user_id);



		
		
		$this->load->view('templates/settings/profile/Header', $data);
		$this->load->view('profile/Display', $data);
		$this->load->view('templates/settings/profile/Footer');	

		

		} else {
			echo "Access Denied!";
		}


	}


	



	public function edit($user_id){


		 $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');


		if($this->form_validation->run() == FALSE) {



			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);

			$data['account_data'] = $this->User_model->get_accounts_info($user_id);
		
			$this->load->view('templates/settings/profile/Header2', $data);
			$this->load->view('profile/Edit', $data);
			$this->load->view('templates/settings/profile/Footer2');	

		




		} else {

			$options = ['cost'=> 12];

		    $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);


			$data = array(

				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $encripted_pass
				
				
				
				);

				//$this->session->set_userdata($data);

			if($this->User_model->edit_user2($user_id, $data)) {

				//$this->session->set_flashdata('project_updated', 'Your Project has been updated');

					$this->Admin_model->insert_log($this->session->userdata('name'), 
								ucfirst($this->session->userdata('name')).' account edited');

				redirect("Home/home");


			}







		}


	}





	public function archive($patient_id) {
		
		$status = 'deactivated';
		$this->Patient_model->archive_patients($patient_id, $status);

		$this->session->set_flashdata('project_deleted', 'Your Project has been condemn');
		
		redirect("patients/index");


	}

	public function activate($patient_id) {
		
		$status = 'activated';
		$this->Patient_model->activate_patients($patient_id, $status);

		$this->session->set_flashdata('project_deleted', 'Your Project has been condemn');
		
		redirect("patients/index");


	}

		




}



 ?>