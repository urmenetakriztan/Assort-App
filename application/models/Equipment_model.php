<?php 

class Equipment_model extends CI_Model {




	public function get_equipment($id) {


		$this->db->where('id', $id);

		$query = $this->db->get('equipments');




		return $query->row();


	}

	public function get_equipments(){
		$this->db->where('status', 'activated');
		$query = $this->db->get('equipments');

		return $query->result();


	}

	public function create_equipments($data){

		$insert_query = $this->db->insert('equipments', $data);

		return $insert_query;

	}


	public function archive_equipment($equipment_id, $status) {

		$this->db->where('id', $equipment_id);

		$data = array('archive' => $status );

		return $this->db->update('equipments', $data);

	}


	public function get_equipments_info($equipment_id) {

		$this->db->where('id', $equipment_id);

		$get_data  = $this->db->get('equipments');

		return $get_data->row();


	}


	public function edit_equipment($equipment_id, $data) {

		$this->db->where('id', $equipment_id);
		$this->db->update('equipments', $data);

		return true;

	}

	public function get_condemned_equipments() {
		$this->db->where('condemn', 'deactivated');
		$query = $this->db->get('projects');

		return $query->result();




	}

	public function archive_equipments($equipment_id, $status) {

		$this->db->where('id', $equipment_id);

		$data = array('status' => $status );

		return $this->db->update('equipments', $data);

	}

	public function activate_equipments($equipment_id, $status) {

		$this->db->where('id', $equipment_id);

		$data = array('status' => $status );

		return $this->db->update('equipments', $data);

	}

	public function get_archived_equipments() {
		$this->db->where('status', 'deactivated');
		$query = $this->db->get('equipments');

		return $query->result();




	}


	public function equipmentsinfo() 

	{  

		$this->db->select('id');

		//$this->db->from($this->User);

		//$this->db->where('city',$role);

		$query = $this->db->get('equipments');

		$u=$query->num_rows();

		return $u;



	}



	public function get_buttons($equipment_id){

		$this->db->where('id',$equipment_id);
		$query = $this->db->get('equipments');

		return $query->result();


	}



	public function equipmentnotif() 

	{  

		//$this->db->select('id,name');

		//$query = $this->db->get('equipments');

		//$u=$query->num_rows();

		//return $u;

		$date = new DateTime("now");

		//$curr_date = $date->format('Y-m-d ');
		//$curr_date = $date->format("%d/%m/%Y");
		$curr_date = $date->format('m/d/Y');



		$this->db->select('*');
		$this->db->from('equipments'); 
 		$this->db->where('nextMaintenance', $curr_date);//use date function
 		$this->db->where('stat', 'Undone');
 		$query = $this->db->get();
 		//return $query->result();

 		$u=$query->num_rows();
 		return $u;



 	}



 	public function get_notif(){
 		//$this->db->where('status', 'activated');
 		//$query = $this->db->get('equipments');

 		//return $query->result();


 		$date = new DateTime("now");

 		$curr_date = $date->format('m/d/Y ');

 		//$this->db->select('*');
 		//$this->db->from('equipments'); 
 		$this->db->where('nextMaintenance',$curr_date);//use date function
 		$query = $this->db->get('equipments');
 		return $query->result();



}












}


?>