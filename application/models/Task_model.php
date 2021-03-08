<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {
	
	public function showAllTask($user_id) {

		$this->db->where('user_id', $user_id);
		$query = $this->db->get('task');

		return $query->result_array();

		//return $this->db->get('task')->result_array();
	}

	public function unCompletedTask($user_id) {
		$this->db->order_by('time', 'ASC');

		$this->db->where('user_id', $user_id);
		$this->db->where('is_completed', 0);
		$query = $this->db->get('task');

		return $query->result_array();

		//return $this->db->get_where('task', ['is_completed' => 0 ])->result_array();
	}

	public function completedTask($user_id) {
		 
		$this->db->where('user_id', $user_id);
		$this->db->where('is_completed', 1);
		$query = $this->db->get('task');

		return $query->result_array();


		//return $this->db->get_where('task', ['is_completed' => 1 ])->result_array();
	}

	// public function addNewTask() {
	// 	$task = htmlspecialchars($this->input->post('task'));
	// 	$time = htmlspecialchars($this->input->post('time'));

	// 	$data = [
	// 		'task' => $task,
	// 		'time' => $time,
	// 		'is_completed' => 0
	// 	];

	// 	$this->db->insert('task', $data);

	// }

	public function addNewTask($data) {

		$insert_query = $this->db->insert('task', $data);

		return $insert_query;

	}


	public function complete($id) {
		$this->db->set(['is_completed' => 1 ]);
		$this->db->where('id', $id);
		$this->db->update('task');
	}

	public function delete($id) {
		$this->db->delete('task', ['id' => $id ]);
	}
}