<?php 

class Register extends CI_Controller{
    
    public function __construct(){

	parent::__construct();
	
	$this->load->helper('download');



	}



	public function index(){

		$this->load->view('register/register');


	}


	public function create(){

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[3]|matches[password]');


		if($this->form_validation->run() == FALSE) {

		
			$this->load->view('register/register');



		} else {






					// Encrypts Password
					//$enc_password = md5($this->input->post('password'));

					// Adds the User
					//$this->user_model->add_user($enc_password);

					// Logs
					// $this->admin_model->insert_log($this->session->userdata('username'),
					// 								 ucfirst($this->session->userdata('username')).' added '.
					// 								 $this->input->post('first_name').' ' .$this->input->post('last_name'),
					// 								 $this->session->userdata('user_id'));

					// Message
					//$this->session->set_flashdata('user_register','User successfully registered');
					//redirect('home/index');
					
					
					
			// 	if (!empty($_FILES['picture']['first_name'])) {
			// 	$config['upload_path'] = 'uploads/files/';
			// 	$config['allowed_types'] = 'jpg|jpeg|png|gif|webp|pdf|xps|oxps|docx';
			// 	$config['file_name'] = $_FILES['picture']['first_name'];

			// 	//Load upload library and initialize configuration
			// 	$this->load->library('upload', $config);
			// 	$this->upload->initialize($config);

			// 	if ($this->upload->do_upload('picture')) {
			// 		$uploadData = $this->upload->data();
			// 		$picture = $uploadData['file_name'];
			// 	}else{
			// 		$picture ="";
			// 	}
			// }else{
			// 	$picture ="";
			// }


					
		

			// $data = array(

			// 	'first_name' => $this->input->post('first_name'),
			// 	'last_name' => $this->input->post('last_name'),
			// 	'email' => $this->input->post('email'),
			// 	'username' => $this->input->post('username'),
			// 	'role_id' => $this->input->post('role_id'),
			//     'password' => $this->input->post('password')
				
				

			// );

			//$this->session->set_userdata($data);

			if($this->User_model->create_user()) {

				$this->session->set_flashdata('equipments_created', 'User has been created');

					// $this->Admin_model->insert_log($this->session->userdata('model'), 
					// 			ucfirst($this->session->userdata('model')).' equipment created');

				redirect('Home');


			}




			

		}

	}
}
	?>