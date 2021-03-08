<?php 

class Users extends CI_Controller{


	// public function login(){

	// 	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
	// 	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$data = array(

	// 			'errors' => validation_errors()

	// 		);

	// 		$this->session->set_flashdata($data);

	// 		redirect('login');

	// 	}else{

	// 		$username = $this->input->post('username');
	// 		$password = $this->input->post('password');

	// 		$user_id = $this->User_model->login_user($username, $password);

	// 		if ($user_id) {

	// 			$user_data = array(

	// 				'user_id' => $user_id,
	// 				'username'=> $username,
	// 				'logged_in' => true


	// 			);

	// 			$this->session->set_userdata($user_data);

	// 			$this->session->set_flashdata('login_success', 'You are now logged in');

	// 			redirect('Home');





	// 		} else {

	// 			$this->session->set_flashdata('login_failed', 'Sorry You are not logged in');
	// 			redirect('login');

	// 		}





	// 	}



	// } 














	// public function login(){



 //    $username = $this->input->post('username');
 //    $password = $this->input->post('password');
 //    $validate = $this->User_model->login_user($username,$password);




 //    if($validate){

 //    	$data  = $validate->row_array();
 //        $username = $data['username'];
 //       // $password = $data['password'];
 //        $user_id = $data['id'];
 //        $type = $data['role_id'];

 //        $sesdata = array(
 //        	'user_id'   => $user_id,
 //            'username'  => $username,
 //            //'password'  => $password,
 //            'type'      => $type,
 //            'logged_in' => TRUE
 //        );

 //        $this->session->set_userdata($sesdata);


 //         redirect('Home');


 //        // access login for admin
 //        // if($type === 'admin'){
 //        //      redirect('Home');


 //        // // access login for staff
 //        // }else{
 //        //     redirect('Home/home');
 //        // }
 //    }else{
 //        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
 //        redirect('login');
 //    }
 //  }






	public function login() {


		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

		if($this->form_validation->run() == FALSE) {

			$data = array(

				'errors' => validation_errors()


			);

			$this->session->set_flashdata($data);

			redirect('Login');


		} else {


			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$user_id = $this->User_model->login_user($username,$password);
			

			if($user_id) {


				$type = $this->User_model->type($username);


				 //$data  = $user_id->row_array();
				 //$type = $data['role_id'];

				$user_data = array(

					'user_id' => $user_id,
					'username' => $username,
					'type'      => $type,
					'logged_in' => true


				);


				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('login_success', 'You are now logged in');



			//access login for admin
				if($type === 'admin'){
					redirect('Home');


        	// access login for staff
				}else{
					redirect('Home/home');
				}
			

		} else {


			$this->session->set_flashdata('login_failed', 'Sorry You are not logged in');
			redirect('Login');

		}



	}



}


























public function logout(){

	$this->session->sess_destroy();
	redirect('Login');




}





}




?>