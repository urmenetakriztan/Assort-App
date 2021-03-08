<?php 

class Feedback extends CI_Controller{

	public function __construct(){

	parent::__construct();
}
	

	public function index(){

		$this->load->view('feedback/Main');


	}	



	

	public function feeds(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		$data['feedbacks'] = $this->Feedback_model->get_feedbacks();


		$this->load->view('templates/settings/feedback/Header', $data);
		$this->load->view('feedback/Feeds', $data);
		$this->load->view('templates/settings/feedback/Footer');

		

	}

	public function archive($feedback_id) {
		
		$status = 'deactivated';
		$this->Feedback_model->archive_feedbacks($feedback_id, $status);

		$this->session->set_flashdata('feedback_archived', 'Feedback data has been archived');
		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('email')).' feedback archived');
		
		redirect("Feedbacks/feeds");


	}


	public function archived(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		$data['feedbacks'] = $this->Feedback_model->get_archived_feedbacks();


		$this->load->view('templates/settings/feedback/Header3', $data);
		$this->load->view('feedback/Archive', $data);
		$this->load->view('templates/settings/feedback/Footer3');

		


	}

	public function display($feedback_id) {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();





		$data['feedback_data'] = $this->Feedback_model->get_feedback($feedback_id);

		$data['status'] = $this->Feedback_model->get_buttons($feedback_id);

		$this->load->view('templates/settings/feedback/Header2', $data);
		$this->load->view('feedback/Display', $data);
		$this->load->view('templates/settings/feedback/Footer2');
		



	}



	public function activate($feedback_id) {
		
		$status = 'activated';
		$this->Feedback_model->activate_feedbacks($feedback_id, $status);

		$this->session->set_flashdata('feedback_activated', 'Feedback has been activated');
		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('email')).' feedback activated');
		
		redirect("Feedbacks/feeds");


	}










	public function create(){

		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('comment', 'Comment', 'trim|required');


		if($this->form_validation->run() == FALSE) {

		
			$this->load->view('feedback/Main');


		} else {





			$data = array(

				'feedback' => $this->input->post('feedback'),
				'email' => $this->input->post('email'),
				'comment' => $this->input->post('comment')
	

			);

			$this->session->set_userdata($data);

			if($this->Feedback_model->add_feedbacks($data)) {

				//$this->session->set_flashdata('feedbacks_created', 'Your Feedbac has been created');

					 //$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								//ucfirst($this->session->userdata('Crew')).' equipment created');

				redirect('Home');


			}




			

		}

	}
}
	?>