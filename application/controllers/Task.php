<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {
	public function __construct() {

		parent::__construct();

		$this->load->model('Task_model', 'task');
	}

	public function index() {

		$user_id = $this->session->userdata('user_id');

		$data['title'] = 'To Do List';
		$data['uncompleted'] = $this->task->unCompletedTask($user_id); // Show uncompleted task
		$data['completed'] = $this->task->completedTask($user_id); // Show completed task

		
			$this->load->view('templates/header', $data);
			$this->load->view('task/index', $data);
			$this->load->view('templates/footer', $data);
		
	}


	public function create() {

		$this->form_validation->set_rules('task', 'New Task', 'trim|required');
		$this->form_validation->set_rules('time', 'Select Time', 'trim|required');

		if( $this->form_validation->run() == FALSE ) {

			$user_id = $this->session->userdata('user_id');

			$data['title'] = 'To Do List';
			$data['uncompleted'] = $this->task->unCompletedTask($user_id); // Show uncompleted task
			$data['completed'] = $this->task->completedTask($user_id); // Show completed task

			$this->load->view('templates/header', $data);
			$this->load->view('task/index', $data);
			$this->load->view('templates/footer', $data);


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

			$this->load->view('templates/header', $data);
			$this->load->view('layouts/index', $data);
			$this->load->view('templates/footer', $data);


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
		redirect('task');	
	}

	public function delete($id) {
		$this->task->delete($id);

		$this->session->set_flashdata('success', 'Task successfully deleted');
		redirect('task');
	}
}