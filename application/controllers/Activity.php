<?php 



class Activity extends CI_Controller {


	public function __construct() {
	parent::__construct();


	if(!$this->session->userdata('logged_in')) {

		$this->session->set_flashdata('no_access', 'Sorry you are NOT allowed or not logged in');

		redirect('home/index');


		}



	}



	public function index() {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();


		
	
		
		$data['activities'] = $this->Admin_model->get_logs();

		
		$this->load->view('templates/settings/activity/Header', $data);
		$this->load->view('activity/Main', $data);
		$this->load->view('templates/settings/activity/Footer');
		

	}



	public function home() {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);
	

	

		$data['activities'] = $this->Admin_model->get_logs1($user_id);

		
		$this->load->view('templates/settings/activity2/Header', $data);
		$this->load->view('activity/Main2', $data);
		$this->load->view('templates/settings/activity2/Footer');
		

	}









	public function display($admin_id) {

		// $data['completed_tasks'] = $this->project_model->get_project_tasks($project_id, true);

		// $data['not_completed_tasks'] = $this->project_model->get_project_tasks($project_id, false);

		$data['admin_data'] = $this->admin_model->get_admin($admin_id);


		$data['main_view'] = "admin/display";

		$this->load->view('layouts/main', $data);



	}
}


?>
