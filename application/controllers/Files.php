<?php 

class Files extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('Files_model');
		$this->load->helper('download');

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



			$data['files'] = $this->Files_model->get_files($user_id);


			$this->load->view('templates/files/Header', $data);
			$this->load->view('files/Main', $data);
			$this->load->view('templates/files/Footer');



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


			$user_id = $this->session->userdata('user_id');

			$data['files'] = $this->Files_model->get_files($user_id);


			$this->load->view('templates/files2/Header', $data);
			$this->load->view('files/Main2', $data);
			$this->load->view('templates/files2/Footer');




		} else {
			echo "Access Denied!";
		}


	}



















	public function display($file_id) {

		$user_id = $this->session->userdata('user_id');


		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();


		$data['img'] = $this->Files_model->image($file_id);


		
		$data['file_data'] = $this->Files_model->get_file($file_id);

		$data['status'] = $this->Files_model->get_buttons($file_id);

		
		
		

		$this->load->view('templates/files/Header3', $data);
		$this->load->view('files/Display', $data);
		$this->load->view('templates/files/Footer3');
		



	}



	public function display2($file_id) {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


		$data['img'] = $this->Files_model->image($file_id);


		$data['file_data'] = $this->Files_model->get_file($file_id);

		$data['status'] = $this->Files_model->get_buttons($file_id);


		$this->load->view('templates/files2/Header3', $data);
		$this->load->view('files/Display2', $data);
		$this->load->view('templates/files2/Footer3');
		



	}







	// public function display($equipments_id){

	// 	$data['equipments_data'] = $this->equipments_model->get_equipments($equipments_id);

	// 	$thi->load->view('equipments/main', $data);

	// }





	public function add(){
		if($this->input->post('submit')){

			//Check whether user upload picture
			if (!empty($_FILES['picture']['name'])) {
				//$config['upload_path'] = 'uploads/files/';
				//$config['allowed_types'] = 'jpg|jpeg|png|gif|webp|pdf|xps|oxps|docx';
				//$config['file_name'] = $_FILES['picture']['name'];
				
				$config = array(
					'upload_path' => 'uploads/files/',
					'allowed_types' => 'jpg|jpeg|png|gif|webp|pdf|xps|oxps|docx',
					'file_name' => $_FILES['picture']['name'],
					'overwrite' => TRUE,
					'max_size' => "2048000", 
					'max_height' => "768",
					'max_width' => "1024"
				);







				//Load upload library and initialize configuration
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('picture')) {
					$uploadData = $this->upload->data();
					$picture = $uploadData['file_name'];
				}else{
					$picture ="";
				}
			}else{
				$picture ="";
			}

			//Prepare array of user data
			$userData = array(
				'file_user_id' => $this->session->userdata('user_id'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'picture' => $picture
			);

			$this->session->set_userdata($userData);
			//Pass user data to model
			$insertUserData = $this->Files_model->insert($userData);

			//Storing insertion status message.
			if($insertUserData){
				$this->session->set_flashdata('success_msg', "File data have been added successfully.");
				$this->Admin_model->insert_log($this->session->userdata('user_id'),
					ucfirst($this->session->userdata('name')).' file data created');
				
			}else{
				$this->session->set_flashdata('error_msg', "Some problems occured, please try again.");
			}

		}

		//Form for adding user data
		$user_id = $this->session->userdata('user_id');


		$data['files'] = $this->Files_model->getRows();
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();
		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);
		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();

		$this->load->view('templates/files/Header', $data);
		$this->load->view('files/Add', $data);
		$this->load->view('templates/files/Footer');
		


	}




	public function add2(){
		if($this->input->post('submit')){

			//Check whether user upload picture
			if (!empty($_FILES['picture']['name'])) {
				$config['upload_path'] = 'uploads/files/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp|pdf|xps|oxps|docx';
				$config['file_name'] = $_FILES['picture']['name'];

				//Load upload library and initialize configuration
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('picture')) {
					$uploadData = $this->upload->data();
					$picture = $uploadData['file_name'];
				}else{
					$picture ="";
				}
			}else{
				$picture ="";
			}

			//Prepare array of user data
			$userData = array(
				'file_user_id' => $this->session->userdata('user_id'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'picture' => $picture
			);

			$this->session->set_userdata($userData);
			//Pass user data to model
			$insertUserData = $this->Files_model->insert($userData);

			//Storing insertion status message.
			if($insertUserData){
				$this->session->set_flashdata('success_msg', "File data have been added successfully.");
				$this->Admin_model->insert_log($this->session->userdata('user_id'),  
					ucfirst($this->session->userdata('name')).' file data created');
				
			}else{
				$this->session->set_flashdata('error_msg', "Some problems occured, please try again.");
			}

		}

		//Form for adding user data
		$user_id = $this->session->userdata('user_id');
		
		$data['files'] = $this->Files_model->getRows();
		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();
		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);
		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);

		$this->load->view('templates/files2/Header', $data);
		$this->load->view('files/Add2', $data);
		$this->load->view('templates/files2/Footer');
		


	}









	public function archived(){

		$user_id = $this->session->userdata('user_id');


		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		$data['files'] = $this->Files_model->get_archived_files($user_id);

		$this->load->view('templates/files/Header5', $data);
		$this->load->view('files/Archive', $data);
		$this->load->view('templates/files/Footer5');
		


	}

	public function archived2(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);



		$data['files'] = $this->Files_model->get_archived_files($user_id);

		$this->load->view('templates/files2/Header5', $data);
		$this->load->view('files/Archive2', $data);
		$this->load->view('templates/files2/Footer5');
		


	}

	public function download($id){

		// $id = $this->uri->segment(3);
		// if (empty($id)) {
		// 	redirect(base_url());
		// }
		//$data = $this->Files_model->getRows($id);
		$data = $this->Files_model->download($id);
		//$filename = $data['picture'];
		//$fileContents = file_get_contents(base_url('/uploads/files/'.$data['picture']));
		//force_download($filename, $fileContents);
		$fileContents = 'uploads/files/'.$data['picture'];
		force_download($fileContents, NULL);
		
	}

	public function download2($id){

		// $id = $this->uri->segment(3);
		// if (empty($id)) {
		// 	redirect(base_url());
		// }
		//$data = $this->Files_model->getRows($id);
		$data = $this->Files_model->download($id);
		//$filename = $data['picture'];
		//$fileContents = file_get_contents(base_url('/uploads/files/'.$data['picture']));
		//force_download($filename, $fileContents);
		$fileContents = 'uploads/files/'.$data['picture'];
		force_download($fileContents, NULL);
		
	}



	public function archive($file_id) {
		
		$status = 'deactivated';
		$this->Files_model->archive_files($file_id, $status);

		$this->session->set_flashdata('file_archived', 'Your file has been archived');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('name')).' file data archived');
		
		redirect("Files");


	}



	public function archive2($file_id) {
		
		$status = 'deactivated';
		$this->Files_model->archive_files($file_id, $status);

		$this->session->set_flashdata('file_archived', 'Your file has been archived');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('name')).' file data archived');
		
		redirect("Files/home");


	}

	public function activate($file_id) {
		
		$status = 'activated';
		$this->Files_model->activate_files($file_id, $status);

		$this->session->set_flashdata('file_activated', 'Your file has been activated');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('name')).' file data activated');
		
		redirect("Files");


	}

	public function activate2($file_id) {
		
		$status = 'activated';
		$this->Files_model->activate_files($file_id, $status);

		$this->session->set_flashdata('file_activated', 'Your file has been activated');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
			ucfirst($this->session->userdata('name')).' file data activated');
		
		redirect("Files/home");


	}


	public function edit($file_id){


		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');


		if($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



			$data['file_data'] = $this->Files_model->get_files_info($file_id);

			$this->load->view('templates/files/Header4', $data);
			$this->load->view('files/Edit', $data);
			$this->load->view('templates/files/Footer4');
			



		} else {


			$data = array(

				
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email')

				
			);

			$this->session->set_userdata($data);

			if($this->Files_model->edit_file($file_id, $data)) {

				$this->session->set_flashdata('file_updated', 'Your file has been updated');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
					ucfirst($this->session->userdata('name')).' file edited');

				redirect("Files");


			}







		}


	}



	public function edit2($file_id){


		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');


		if($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);


			$data['file_data'] = $this->Files_model->get_files_info($file_id);

			$this->load->view('templates/files2/Header4', $data);
			$this->load->view('files/Edit2', $data);
			$this->load->view('templates/files2/Footer4');
			



		} else {


			$data = array(

				
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email')

				
			);

			$this->session->set_userdata($data);

			if($this->Files_model->edit_file($file_id, $data)) {

				$this->session->set_flashdata('file_updated', 'Your file has been updated');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
					ucfirst($this->session->userdata('name')).' file edited');

				redirect("Files/home");


			}







		}


	}














	


}



?>