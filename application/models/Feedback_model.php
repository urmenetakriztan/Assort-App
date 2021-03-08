<?php 

class Feedback_model extends CI_Model{




	public function get_feedback($id) {


		$this->db->where('id', $id);

		$query = $this->db->get('feedbacks');


	

		return $query->row();


	}





	public function add_feedbacks(){
			// $this->output->enable_profiler(TRUE);

		$data = array(
				// 'admin_user_id' => $this->session->userdata('user_id'),
			'feedback'    => $this->input->post('feedback'),
			'email'     => $this->input->post('email'),
			'comment'         => $this->input->post('comment')
	
		);

		return $this->db->insert('feedbacks', $data);
	}



	public function get_feedbacks(){
		$this->db->where('status', 'activated');
		$query = $this->db->get('feedbacks');

		return $query->result();


	}



	public function archive_feedbacks($feedback_id, $status) {

		$this->db->where('id', $feedback_id);

			$data = array('status' => $status );

			return $this->db->update('feedbacks', $data);

	}


	public function get_archived_feedbacks() {
		$this->db->where('status', 'deactivated');
		$query = $this->db->get('feedbacks');

		return $query->result();




	}


	public function activate_feedbacks($feedback_id, $status) {

		$this->db->where('id', $feedback_id);

			$data = array('status' => $status );

			return $this->db->update('feedbacks', $data);

	}





















	public function validate($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$result = $this->db->get('users',1);

		return $result;
	}	




	public function get_users(){
		//$this->db->where('status', 'activated');
		$query = $this->db->get('users');

		return $query->result();


	}

	public function get_user($id) {


		$this->db->where('id', $id);

		$query = $this->db->get('users');

		return $query->row();


	}


	public function get_accounts_info($account_id) {

		$this->db->where('id', $account_id);

		$get_data  = $this->db->get('users');

		return $get_data->row();


	}


	public function get_buttons($feedback_id){

		$this->db->where('id',$feedback_id);
		$query = $this->db->get('feedbacks');

		return $query->result();


	}





}
?>