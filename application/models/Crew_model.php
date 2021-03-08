<?php 

class Crew_model extends CI_Model {




	public function get_crew($id) {


		$this->db->where('id', $id);

		$query = $this->db->get('crew');


	

		return $query->row();


	}

	public function get_crews1(){
		$this->db->where('status', 'activated');
		$query = $this->db->get('crew');

		return $query->result();


	}

	public function get_patients($user_id){
		$this->db->where('status', 'activated');
		$this->db->where('patient_user_id', $user_id);
		$query = $this->db->get('patients');

		return $query->result();


	}

	public function get_patients2(){
		$this->db->where('status', 'activated');
		$query = $this->db->get('patients');

		return $query->result();


	}

	public function get_patients3($patient_id){
		$this->db->where('id', $patient_id);
		$query = $this->db->get('patients');

		return $query->result();


	}

	public function create_crews($data){

		$insert_query = $this->db->insert('crew', $data);

		return $insert_query;

	}


	public function archive_crews($crew_id, $status) {

		$this->db->where('id', $crew_id);

			$data = array('status' => $status );

			return $this->db->update('crew', $data);

	}

	public function activate_crews($crew_id, $status) {

		$this->db->where('id', $crew_id);

			$data = array('status' => $status );

			return $this->db->update('crew', $data);

	}


	public function get_crews_info($crew_id) {

		$this->db->where('id', $crew_id);

		$get_data  = $this->db->get('crew');

		return $get_data->row();


	}


	public function edit_crew($crew_id, $data) {

		$this->db->where('id', $crew_id);
		$this->db->update('crew', $data);

		return true;

	}

	

	public function get_archived_crews() {
		$this->db->where('status', 'deactivated');
		$query = $this->db->get('crew');

		return $query->result();




	}





	public function patientsinfo() 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		//$this->db->where('city',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}


   	public function get_buttons($crew_id){

		$this->db->where('id',$crew_id);
		$query = $this->db->get('crew');

		return $query->result();


	}

   







	










}


 ?>