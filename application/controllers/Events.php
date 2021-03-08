<?php 

class Events extends CI_Controller{

	public function __construct(){

	parent::__construct();

	 $this->load->model('Calendar_model');



	}



	public function index(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');	

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		

		$this->load->view('templates/events/Header', $data);
		$this->load->view('events/Main');
		$this->load->view('templates/events/Footer');	
		

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

		

		$this->load->view('templates/events2/Header', $data);
		$this->load->view('events/Main2');
		$this->load->view('templates/events2/Footer');	
		

		} else {
			echo "Access Denied!";
		}


	}







	/*Get all Events */

	Public function getEvents()
	{
		$result=$this->Calendar_model->getEvents();
		echo json_encode($result);
	}
	/*Add new event */
	 Public function addEvent()
	 {
	 	$result=$this->Calendar_model->addEvent();
	 	echo $result;
	 }
	/*Update Event */
	 Public function updateEvent()
	{
	 	$result=$this->Calendar_model->updateEvent();
	 	echo $result;
	 }
	 /*Delete Event*/
	 Public function deleteEvent()
	 {
	 	$result=$this->Calendar_model->deleteEvent();
	 	echo $result;
	 }
	Public function dragUpdateEvent()
	{	

		$result=$this->Calendar_model->dragUpdateEvent();
		echo $result;
	}




	















}



 ?>