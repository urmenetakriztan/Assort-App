<?php 


class Admin_model extends CI_Model {


	public function get_admin($id) {


		 $this->db->where('id', $id);

		$query = $this->db->get('users');


	

		return $query->row();


	}


	public function get_employee($id) {


		 $this->db->where('id', $id);

		$query = $this->db->get('users');


	

		return $query->row();


	}




	public function get_admins() {
		$this->db->where('role_id', 'admin');
		$query = $this->db->get('users');

		return $query->result();




	}



	public function get_admins3(){
			$this->db->order_by('id', 'DESC');
			$this->db->where('role_id', 'admin');
			// $this->db->where('Status', 'Active');


			$query = $this->db->get('users');
			return $query->result_array();
		}




	public function get_admins2() {
		$this->db->where('role_id', 'staff');
		$query = $this->db->get('users');

		return $query->result();




	}


	public function get_all_admins($user_id) {


		$this->db->where('admin_user_id', $user_id);

		$query = $this->db->get('users');

		return $query->result();

	}






	public function create_project($data) {

		$insert_query = $this->db->insert('projects', $data);

		return $insert_query;


	}


	public function edit_admin($project_id, $data) {

		$this->db->where('id', $project_id);
		$this->db->update('users', $data);

		return true;

	}


	public function delete_project($project_id) {

		$this->db->where('id', $project_id);
		$this->db->delete('projects');




	}



	public function get_admins_info($project_id) {

		$this->db->where('id', $project_id);

		$get_data  = $this->db->get('users');

		return $get_data->row();


	}


	public function get_project_tasks($project_id, $active = true) {


		$this->db->select('

				tasks.task_name,
				tasks.task_body,
				tasks.id as task_id,
				projects.project_name,
				projects.project_body

			');


		$this->db->from('tasks');
		$this->db->join('projects', 'projects.id = tasks.project_id');
		$this->db->where('tasks.project_id', $project_id);

		if($active == true) {

			$this->db->where('tasks.status', 0);

		} else {

			$this->db->where('tasks.status', 1);

		}

		$query = $this->db->get();

		if($query->num_rows() < 1) {

			return FALSE;

		} 


		return $query->result();











	}



	public function delete_project_tasks($project_id) {

		$this->db->where('project_id', $project_id);

		$query = $this->db->delete('tasks');

		return $query;


	}


		public function insert_log($activity_id, $activity){
			$data = array(
				'activity_id' => $activity_id,
				'activity' => $activity
				

			);

			return $this->db->insert('activity_logs', $data);
		}





		public function insert_log2($user, $activity_id, $activity){
			$data = array(
				'user' => $user,
				'activity' => $activity,
				 'activity_id' => $activity_id
			);

			return $this->db->insert('activity_logs', $data);
		}


		public function get_logs(){
			// $this->db->order_by('id', 'DESC');

			// $query = $this->db->get('activity_logs');
			// return $query->result_array();


			$query = $this->db->get('activity_logs');
			return $query->result();
		}


		public function get_logs1($user_id){
			// $this->db->order_by('id', 'DESC');

			// $query = $this->db->get('activity_logs');
			// return $query->result_array();
			$this->db->where('activity_id', $user_id);

			$query = $this->db->get('activity_logs');
			return $query->result();
		}










}






 ?>