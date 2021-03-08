<?php 

class Equipments extends CI_Controller{

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




			$data['equipments'] = $this->Equipment_model->get_equipments();

			$this->load->view('templates/equipments/Header', $data);
			$this->load->view('equipments/Main', $data);
			$this->load->view('templates/equipments/Footer');


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

			$data['equipments'] = $this->Equipment_model->get_equipments();

			$this->load->view('templates/equipments2/Header', $data);
			$this->load->view('equipments/Main2', $data);
			$this->load->view('templates/equipments2/Footer');


		} else {
			echo "Access Denied!";
		}


	}

	public function archived(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		$data['equipments'] = $this->Equipment_model->get_archived_equipments();

		$this->load->view('templates/equipments/Header5', $data);
		$this->load->view('equipments/Archive', $data);
		$this->load->view('templates/equipments/Footer5');




	}


	public function archived2(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		

		$data['equipments'] = $this->Equipment_model->get_archived_equipments();

		$this->load->view('templates/equipments2/Header5', $data);
		$this->load->view('equipments/Archive2', $data);
		$this->load->view('templates/equipments2/Footer5');


	}






	public function display($equipment_id) {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



		$data['equipment_data'] = $this->Equipment_model->get_equipment($equipment_id);

		$data['status'] = $this->Equipment_model->get_buttons($equipment_id);

		$this->load->view('templates/equipments/Header3', $data);
		$this->load->view('equipments/Display', $data);
		$this->load->view('templates/equipments/Footer3');
		

	}


	
	public function display2($equipment_id) {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);




		$data['equipment_data'] = $this->Equipment_model->get_equipment($equipment_id);

		$this->load->view('templates/equipments2/Header3', $data);
		$this->load->view('equipments/Display2', $data);
		$this->load->view('templates/equipments2/Footer3');
		

	}







	public function add(){

		
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('equipment_type', 'Equipment Type', 'trim|required');
		 //$this->form_validation->set_rules('maintenanceCode', 'Maintenance Code', 'trim|required');
		$this->form_validation->set_rules('maintenancePerformed', 'Maintenance Performed', 'trim|required');
		$this->form_validation->set_rules('maintenanceFrequency', 'Maintenance Frequency', 'trim|required');
		$this->form_validation->set_rules('previousMaintenance', 'Previous Maintenance', 'trim|required');
		$this->form_validation->set_rules('nextMaintenance', 'Next Maintenance', 'trim|required');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$this->load->view('templates/equipments/Header2', $data);
			$this->load->view('equipments/Add');
			$this->load->view('templates/equipments/Footer2');


			

		} else {

			$data = array(

				'date' => $this->input->post('date'),
				'model' => $this->input->post('model'),
				'quantity' => $this->input->post('quantity'),
				'equipment_type' => $this->input->post('equipment_type'),
			    //'maintenanceCode' => $this->input->post('maintenanceCode'),
				'maintenancePerformed' => $this->input->post('maintenancePerformed'),
				'maintenanceFrequency' => $this->input->post('maintenanceFrequency'),
				'previousMaintenance' => $this->input->post('previousMaintenance'),
				'storage' => $this->input->post('storage'),
				'nextMaintenance' => $this->input->post('nextMaintenance')

			);

			$this->session->set_userdata($data);

			if($this->Equipment_model->create_equipments($data)) {

				$this->session->set_flashdata('equipment_created', 'Your equipment data has been created');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
					ucfirst($this->session->userdata('model')).' equipment created');

				redirect('Equipments');

			}
		}

	}





	public function add2(){

		
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('equipment_type', 'Equipment Type', 'trim|required');
		 //$this->form_validation->set_rules('maintenanceCode', 'Maintenance Code', 'trim|required');
		$this->form_validation->set_rules('maintenancePerformed', 'Maintenance Performed', 'trim|required');
		$this->form_validation->set_rules('maintenanceFrequency', 'Maintenance Frequency', 'trim|required');
		$this->form_validation->set_rules('previousMaintenance', 'Previous Maintenance', 'trim|required');
		$this->form_validation->set_rules('nextMaintenance', 'Next Maintenance', 'trim|required');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			
			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo();

			$data['patientsinfo'] = $this->Patient_model->patientsinfo();



			$this->load->view('templates/equipments2/Header2', $data);
			$this->load->view('equipments/Add2');
			$this->load->view('templates/equipments2/Footer2');


			

		} else {

			$data = array(

				'date' => $this->input->post('date'),
				'model' => $this->input->post('model'),
				'quantity' => $this->input->post('quantity'),
				'equipment_type' => $this->input->post('equipment_type'),
			    //'maintenanceCode' => $this->input->post('maintenanceCode'),
				'maintenancePerformed' => $this->input->post('maintenancePerformed'),
				'maintenanceFrequency' => $this->input->post('maintenanceFrequency'),
				'previousMaintenance' => $this->input->post('previousMaintenance'),
				'storage' => $this->input->post('storage'),
				'nextMaintenance' => $this->input->post('nextMaintenance')

			);

			$this->session->set_userdata($data);

			if($this->Equipment_model->create_equipments($data)) {

				$this->session->set_flashdata('equipment_created', 'Your equipment data has been created');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
					ucfirst($this->session->userdata('model')).' equipment created');

				redirect('Equipments/home');

			}
		}

	}







	public function edit($equipment_id){


		$this->form_validation->set_rules('model', 'Model Name', 'trim|required');
		$this->form_validation->set_rules('equipment_type', 'Equipment Type', 'trim|required');


		if($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




			$data['equipment_data'] = $this->Equipment_model->get_equipments_info($equipment_id);


			$this->load->view('templates/equipments/Header4', $data);
			$this->load->view('equipments/Edit', $data);
			$this->load->view('templates/equipments/Footer4');
			



		} else {


			$data = array(

				//'project_user_id' => $this->session->userdata('user_id'),
				'model' => $this->input->post('model'),
				'quantity' => $this->input->post('quantity'),
				'equipment_type' => $this->input->post('equipment_type'),
				//'maintenanceCode' => $this->input->post('maintenanceCode'),
				'maintenancePerformed' => $this->input->post('maintenancePerformed'),
				'maintenanceFrequency' => $this->input->post('maintenanceFrequency'),
				'previousMaintenance' => $this->input->post('previousMaintenance'),
				'nextMaintenance' => $this->input->post('nextMaintenance'),
				'storage' => $this->input->post('storage'),
				'stat' => $this->input->post('stat'),
				'date' => $this->input->post('date')
				
			);

			$this->session->set_userdata($data);

			if($this->Equipment_model->edit_equipment($equipment_id, $data)) {

				$this->session->set_flashdata('equipment_updated', 'Your equipment data has been updated');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
					ucfirst($this->session->userdata('model')).' equipment edited');

				redirect("Equipments");


			}







		}


	}




	public function edit2($equipment_id){


		$this->form_validation->set_rules('model', 'Model Name', 'trim|required');
		$this->form_validation->set_rules('equipment_type', 'Equipment Type', 'trim|required');


		if($this->form_validation->run() == FALSE) {

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo();

			$data['patientsinfo'] = $this->Patient_model->patientsinfo();

			$data['equipment_data'] = $this->Equipment_model->get_equipments_info($equipment_id);


			$this->load->view('templates/equipments2/Header4', $data);
			$this->load->view('equipments/edit2', $data);
			$this->load->view('templates/equipments2/Footer4');
			



		} else {


			$data = array(

				//'project_user_id' => $this->session->userdata('user_id'),
				'model' => $this->input->post('model'),
				'quantity' => $this->input->post('quantity'),
				'equipment_type' => $this->input->post('equipment_type'),
				//'maintenanceCode' => $this->input->post('maintenanceCode'),
				'maintenancePerformed' => $this->input->post('maintenancePerformed'),
				'maintenanceFrequency' => $this->input->post('maintenanceFrequency'),
				'previousMaintenance' => $this->input->post('previousMaintenance'),
				'nextMaintenance' => $this->input->post('nextMaintenance'),
				'storage' => $this->input->post('storage'),
				'date' => $this->input->post('date')
				
			);

			$this->session->set_userdata($data);

			if($this->Equipment_model->edit_equipment($equipment_id, $data)) {

				$this->session->set_flashdata('equipment_updated', 'Your equipment data has been updated');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
					ucfirst($this->session->userdata('model')).' equipment edited');

				redirect("Equipments/home");


			}







		}


	}





	public function archive($equipment_id) {
		
		$status = 'deactivated';
		$this->Equipment_model->archive_equipments($equipment_id, $status);

		$this->session->set_flashdata('equipment_archived', 'Your equipment data has been archived');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('model')).' equipment data archived');
		
		redirect("Equipments");


	}


	public function archive2($equipment_id) {
		
		$status = 'deactivated';
		$this->Equipment_model->archive_equipments($equipment_id, $status);

		$this->session->set_flashdata('equipment_archived', 'Your equipment data has been archived');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('model')).' equipment data archived');
		
		redirect("Equipments/home");


	}






	public function activate($equipment_id) {
		
		$status = 'activated';
		$this->Equipment_model->activate_equipments($equipment_id, $status);

		$this->session->set_flashdata('equipment_activated', 'Your equipment data has been activated');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('model')).' equipment data activated');
		
		redirect("Equipments");


	}



	public function activate2($equipment_id) {
		
		$status = 'activated';
		$this->Equipment_model->activate_equipments($equipment_id, $status);

		$this->session->set_flashdata('equipment_activated', 'Your equipment data has been activated');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('model')).' equipment data activated');
		
		redirect("Equipments/home");


	}











}



?>