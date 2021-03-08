<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crew extends CI_Controller{

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




		$data['crews'] = $this->Crew_model->get_crews1();

		
		$this->load->view('templates/settings/crew/Header', $data);
		$this->load->view('crew/Main', $data);
		$this->load->view('templates/settings/crew/Footer');

	} else {
			echo "Access Denied!";
	}
}






	public function archived(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



		
		$data['crews'] = $this->Crew_model->get_archived_crews();

		
		$this->load->view('templates/settings/crew/Header5', $data);
		$this->load->view('crew/Archived', $data);
		$this->load->view('templates/settings/crew/Footer5');


	}



	public function display($crew_id) {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		$data['crew_data'] = $this->Crew_model->get_crew($crew_id);

		$data['status'] = $this->Crew_model->get_buttons($crew_id);


		$this->load->view('templates/settings/crew/Header3', $data);
		$this->load->view('crew/Display', $data);
		$this->load->view('templates/settings/crew/Footer3');
		



	}


	

	public function Add(){

		if($this->session->userdata('type')== 'admin') {


		$this->form_validation->set_rules('crewn', 'Name', 'trim|required');
		$this->form_validation->set_rules('position', 'Position', 'trim|required');
		
		

		if ($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




			$this->load->view('templates/settings/crew/Header2', $data);
			$this->load->view('crew/Add');
			$this->load->view('templates/settings/crew/Footer2');

			


		} else {

		

			$data = array(

				'crewn' => $this->input->post('crewn'),
				'position' => $this->input->post('position')
							
				
			);

			$this->session->set_userdata($data);


			if($this->Crew_model->create_crews($data)) {

				$this->session->set_flashdata('crew_created', 'Crew data has been created');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('crewn')).' crew created');

				redirect('Crew');

			}
		}

	}  else {
			echo "Access Denied!";
		}
}		






	public function edit($crew_id){

		if($this->session->userdata('type')== 'admin') {


		$this->form_validation->set_rules('crewn', 'Name', 'trim|required');
		$this->form_validation->set_rules('position', 'Position', 'trim|required');
		


		if($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		    $data['crew_data'] = $this->Crew_model->get_crews_info($crew_id);

		    $this->load->view('templates/settings/crew/Header4', $data);
			$this->load->view('crew/Edit', $data);
			$this->load->view('templates/settings/crew/Footer4');
			



		} else {


			$data = array(

				//'project_user_id' => $this->session->userdata('user_id'),
				'crewn' => $this->input->post('crewn'),
				'position' => $this->input->post('position')
				
				
				);

				$this->session->set_userdata($data);

			if($this->Crew_model->edit_crew($crew_id, $data)) {

				$this->session->set_flashdata('crew_updated', 'Your Crew data has been updated');

					$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('crewn')).' crew edited');

				redirect("Crew");


			}

		}
		} else {
			echo "Access Denied!";
		}

	}





	public function Archive($crew_id) {
		
		$status = 'deactivated';
		$this->Crew_model->archive_crews($crew_id, $status);

		$this->session->set_flashdata('crew_archived', 'Crew data has been archived');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('crewn')).' crew archived');
		
		redirect("Crew");

		


	}

	public function Activate($crew_id) {
		
		$status = 'activated';
		$this->Crew_model->activate_crews($crew_id, $status);

		$this->session->set_flashdata('crew_activated', 'Crew data has been activated');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('crewn')).' crew activated');
		
		redirect("Crew");


	}

		




}



 ?>