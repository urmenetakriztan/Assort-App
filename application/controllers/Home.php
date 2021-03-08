<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller{

	

	public function __construct(){


	parent::__construct();

	$this->load->model('Task_model', 'task');

	if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}



	public function index(){


	if($this->session->userdata('type') == 'admin') {

		$user_id = $this->session->userdata('user_id');


		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['equipmentnotif'] = $this->Equipment_model->equipmentnotif();
		$data['eventnotif'] = $this->Calendar_model->eventnotif();

		

		$data['info1'] = $this->Patient_model->AllRoleTypes1('tacloban');

		$data['info2'] = $this->Patient_model->AllRoleTypes2();

		$data['info5'] = $this->Patient_model->AllRoleTypes5('vehicular');

		$data['info6'] = $this->Patient_model->AllRoleTypes6('hacking');

		$data['info7'] = $this->Patient_model->AllRoleTypes7('shooting');

		$data['info8'] = $this->Patient_model->AllRoleTypes8('stabbing');

		$data['info9'] = $this->Patient_model->AllRoleTypes9('mauling');

		$data['info10'] = $this->Patient_model->AllRoleTypes10('post');

		$data['info11'] = $this->Patient_model->AllRoleTypes11('dog');

		$data['info12'] = $this->Patient_model->AllRoleTypes12('burn');

		$data['info13'] = $this->Patient_model->AllRoleTypes13('fire');

		$data['info14'] = $this->Patient_model->AllRoleTypes14('medical');

		$data['info15'] = $this->Patient_model->AllRoleTypes15('transport');

		$data['info16'] = $this->Patient_model->AllRoleTypes16();


		$data['equipments'] = $this->Equipment_model->get_equipments();

		$data['notif'] = $this->Equipment_model->get_notif();
		$data['notif2'] = $this->Calendar_model->getevent_notif();
		

			$data['title'] = 'To Do List';
			$data['uncompleted'] = $this->task->unCompletedTask($user_id); // Show uncompleted task
			$data['completed'] = $this->task->completedTask($user_id); // Show completed task











		$this->load->view('templates/home/Header', $data);
		$this->load->view('layouts/Main', $data);
		$this->load->view('templates/home/Footer', $data);
		

		} else {
			echo "Access Denied!";
		}

		

	}







	public function home(){


		if($this->session->userdata('type') == 'staff') {

		$user_id = $this->session->userdata('user_id');

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);
		

		$data['info1'] = $this->Patient_model->AllRoleTypes1('tacloban');

		$data['info2'] = $this->Patient_model->AllRoleTypes2();

		$data['info5'] = $this->Patient_model->AllRoleTypes5('vehicular');

		$data['info6'] = $this->Patient_model->AllRoleTypes6('hacking');

		$data['info7'] = $this->Patient_model->AllRoleTypes7('shooting');

		$data['info8'] = $this->Patient_model->AllRoleTypes8('stabbing');

		$data['info9'] = $this->Patient_model->AllRoleTypes9('mauling');

		$data['info10'] = $this->Patient_model->AllRoleTypes10('post');

		$data['info11'] = $this->Patient_model->AllRoleTypes11('dog');

		$data['info12'] = $this->Patient_model->AllRoleTypes12('burn');

		$data['info13'] = $this->Patient_model->AllRoleTypes13('fire');

		$data['info14'] = $this->Patient_model->AllRoleTypes14('medical');

		$data['info15'] = $this->Patient_model->AllRoleTypes15('transport');

		$data['equipments'] = $this->Equipment_model->get_equipments();


			$data['title'] = 'To Do List';
			$data['uncompleted'] = $this->task->unCompletedTask($user_id); // Show uncompleted task
			$data['completed'] = $this->task->completedTask($user_id); // Show completed task


		$this->load->view('templates/home2/Header', $data);
		$this->load->view('layouts/Main2', $data);
		$this->load->view('templates/home2/Footer', $data);
		

		} else {
			echo "Access Denied!";
		}

}


		

		public function create() {



		$this->form_validation->set_rules('task', 'New Task', 'trim|required');
		$this->form_validation->set_rules('time', 'Select Time', 'trim|required');

		if( $this->form_validation->run() == FALSE ) {

			$user_id = $this->session->userdata('user_id');


			$data['title'] = 'To Do List';
			$data['uncompleted'] = $this->task->unCompletedTask($user_id); // Show uncompleted task
			$data['completed'] = $this->task->completedTask($user_id); // Show completed task



			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);
		

			$data['info1'] = $this->Patient_model->AllRoleTypes1('tacloban');

			$data['info2'] = $this->Patient_model->AllRoleTypes2();

			$data['info5'] = $this->Patient_model->AllRoleTypes5('vehicular');

			$data['info6'] = $this->Patient_model->AllRoleTypes6('hacking');

			$data['info7'] = $this->Patient_model->AllRoleTypes7('shooting');

			$data['info8'] = $this->Patient_model->AllRoleTypes8('stabbing');

			$data['info9'] = $this->Patient_model->AllRoleTypes9('mauling');

			$data['info10'] = $this->Patient_model->AllRoleTypes10('post');

			$data['info11'] = $this->Patient_model->AllRoleTypes11('dog');

			$data['info12'] = $this->Patient_model->AllRoleTypes12('burn');

			$data['info13'] = $this->Patient_model->AllRoleTypes13('fire');

			$data['info14'] = $this->Patient_model->AllRoleTypes14('medical');

			$data['info15'] = $this->Patient_model->AllRoleTypes15('transport');

			$data['info16'] = $this->Patient_model->AllRoleTypes16();






			$data['equipments'] = $this->Equipment_model->get_equipments();


			$this->load->view('templates/home/Header', $data);
			$this->load->view('layouts/Main', $data);
			$this->load->view('templates/home/Footer', $data);


		} else {

			$data = array(

				'task' => $this->input->post('task'),
				'time' => $this->input->post('time'),
				'user_id' => $this->session->userdata('user_id'),
				'is_completed' => 0
				
			);

			$this->task->addNewTask($data);

			$this->session->set_flashdata('success', 'New task added');

			redirect('Home');
		}
	}



	public function create2() {



		$this->form_validation->set_rules('task', 'New Task', 'trim|required');
		$this->form_validation->set_rules('time', 'Select Time', 'trim|required');

		if( $this->form_validation->run() == FALSE ) {

			$user_id = $this->session->userdata('user_id');
			

			$data['title'] = 'To Do List';
			$data['uncompleted'] = $this->task->unCompletedTask($user_id); // Show uncompleted task
			$data['completed'] = $this->task->completedTask($user_id); // Show completed task



			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);
		

			$data['info1'] = $this->Patient_model->AllRoleTypes1('tacloban');

			$data['info2'] = $this->Patient_model->AllRoleTypes2();

			$data['info5'] = $this->Patient_model->AllRoleTypes5('vehicular');

			$data['info6'] = $this->Patient_model->AllRoleTypes6('hacking');

			$data['info7'] = $this->Patient_model->AllRoleTypes7('shooting');

			$data['info8'] = $this->Patient_model->AllRoleTypes8('stabbing');

			$data['info9'] = $this->Patient_model->AllRoleTypes9('mauling');

			$data['info10'] = $this->Patient_model->AllRoleTypes10('post');

			$data['info11'] = $this->Patient_model->AllRoleTypes11('dog');

			$data['info12'] = $this->Patient_model->AllRoleTypes12('burn');

			$data['info13'] = $this->Patient_model->AllRoleTypes13('fire');

			$data['info14'] = $this->Patient_model->AllRoleTypes14('medical');

			$data['info15'] = $this->Patient_model->AllRoleTypes15('transport');

			$data['info16'] = $this->Patient_model->AllRoleTypes16();






			$data['equipments'] = $this->Equipment_model->get_equipments();


			$this->load->view('templates/home/Header', $data);
			$this->load->view('layouts/Main', $data);
			$this->load->view('templates/home/Footer', $data);


		} else {

			$data = array(

				'task' => $this->input->post('task'),
				'time' => $this->input->post('time'),
				'user_id' => $this->session->userdata('user_id'),
				'is_completed' => 0
				
			);

			$this->task->addNewTask($data);

			$this->session->set_flashdata('success', 'New task added');

			redirect('Home/home');
		}
	}




		


	public function completed($id) {

		$this->task->complete($id);

		$this->session->set_flashdata('success', 'Task successfully completed');
		redirect('Home');	
	}

	public function completed2($id) {

		$this->task->complete($id);

		$this->session->set_flashdata('success', 'Task successfully completed');
		redirect('Home/home');	
	}

	public function delete($id) {
		$this->task->delete($id);

		$this->session->set_flashdata('success', 'Task successfully deleted');
		redirect('Home');
	}

	public function delete2($id) {
		$this->task->delete($id);

		$this->session->set_flashdata('success', 'Task successfully deleted');
		redirect('Home/home');
	}


		













	}




 ?>