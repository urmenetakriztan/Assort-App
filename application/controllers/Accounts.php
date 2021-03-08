<?php 

class Accounts extends CI_Controller{

	public function __construct(){

	parent::__construct();

	if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}



	public function index(){

	  if($this->session->userdata('type') == 'admin') {	

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();





		$data['users'] = $this->User_model->get_users();

		$this->load->view('templates/settings/accounts/Header', $data);	
		$this->load->view('accounts/Main', $data);
		$this->load->view('templates/settings/accounts/Footer');

		} else {
			echo "Access Denied!";
		}
		

	}

	



	public function display($account_id) {

	if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		$data['account_data'] = $this->User_model->get_user($account_id);


		$this->load->view('templates/settings/accounts/Header2', $data);
		$this->load->view('accounts/Display', $data);
		$this->load->view('templates/settings/accounts/Footer2');
		
		} else {
			echo "Access Denied!";
		}


	}


	

	


	public function edit($account_id){

		if($this->session->userdata('type') == 'admin') {


		 $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		


		if($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();






		    $data['account_data'] = $this->User_model->get_accounts_info($account_id);

		    $this->load->view('templates/settings/accounts/Header3', $data);
			$this->load->view('accounts/Edit', $data);
			$this->load->view('templates/settings/accounts/Footer3');
			



		} else {

			$options = ['cost'=> 12];

		    $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);


			$data = array(

				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $encripted_pass,
				'status' => $this->input->post('status'),
				'role_id' => $this->input->post('role_id')
				
				
				);

				//$this->session->set_userdata($data);

			if($this->User_model->edit_user($account_id, $data)) {

				//$this->session->set_flashdata('project_updated', 'Your Project has been updated');

					$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' account edited');

				redirect("Accounts");


			}

		} 
		} else {
			echo "Access Denied!";
		}


	}





	

	

		




}



 ?>