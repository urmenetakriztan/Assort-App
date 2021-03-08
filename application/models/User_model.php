<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model{


	// public function login_user($username, $password){

	// 	$this->db->where('username', $username);
	// 	$this->db->where('password', $password);

	// 	$result = $this->db->get('users');

	// 	if ($result->num_rows() == 1) {
			
	// 		return $result->row(0)->id;




	// 	}else{

	// 		return false;
	// 	}


	// }



	public function login_user($username, $password) {


		$this->db->where('username', $username);
		$this->db->where('status', 'activated');

		$result = $this->db->get('users');

		$db_password = $result->row(2)->password;


		if(password_verify($password, $db_password)) {

			return $result->row(0)->id;

		} else {

			return false;

		}



	}

	public function type($username) {

		$this->db->where('username', $username);

		$result = $this->db->get('users');

		
		return $result->row(6)->role_id;



	}







	// public function add_users(){
	// 		// $this->output->enable_profiler(TRUE);

	// 	$data = array(
	// 			// 'admin_user_id' => $this->session->userdata('user_id'),
	// 		'first_name'    => $this->input->post('first_name'),
	// 		'last_name'     => $this->input->post('last_name'),
	// 		'email'         => $this->input->post('email'),
	// 		'password'         => $this->input->post('password'),
	// 			//'password'      => $enc_password,
	// 		'username'      => $this->input->post('username'),
	// 		'role_id'      => $this->input->post('role_id')
	// 	);

	// 	$insert_data = $this->db->insert('users', $data);

	// 	return $insert_data;
	// }





	public function create_user() {


		$options = ['cost'=> 12];

		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);


		$data = array(

			'first_name'  	 => $this->input->post('first_name'), 
			'last_name'  	 => $this->input->post('last_name'), 
			'email'   		 => $this->input->post('email'), 
			'username'   	 => $this->input->post('username'), 
			'role_id'        => $this->input->post('role_id'),
			'password'  	 => $encripted_pass
	
			);



		$insert_data = $this->db->insert('users', $data);

		return $insert_data;



	}



















	public function validate($username,$password){

		$pass = sha1(md5($password));

		$this->db->where('username',$username);
		//$this->db->where('password',$password);
		$this->db->where('password',$pass);
		$this->db->where('status', 'activated');

		$result = $this->db->get('users',1);

		return $result;
	}	




	public function get_users(){
		//$this->db->where('status', 'activated');
		$query = $this->db->get('users');

		return $query->result();


	}

	public function get_user($account_id) {


		$this->db->where('id', $account_id);

		$query = $this->db->get('users');

		return $query->row();


	}


	public function get_accounts_info($account_id) {

		$this->db->where('id', $account_id);

		$get_data  = $this->db->get('users');

		return $get_data->row();


	}


	// public function edit_user($user_ids, $data) {

	// 	$this->db->where('id', $user_ids);
	// 	$this->db->update('users', $data);

	// 	return true;

	// }




	public function edit_user($account_id, $data) {

		$this->db->where('id', $account_id);
		$this->db->update('users', $data);

		return true;



	}

	public function edit_user2($user_id, $data) {

		$this->db->where('id', $user_id);
		$this->db->update('users', $data);

		return true;



	}






}
?>