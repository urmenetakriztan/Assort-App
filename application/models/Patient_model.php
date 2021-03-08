<?php 

class Patient_model extends CI_Model {





	public function image($patient_id) {


		$this->db->where('id', $patient_id);

		//$this->db->where('rowno', $this->session->userdata('rowno');

		$query = $this->db->get('patients');


	

		return $query->row();


	}



	public function get_patient($id) {


		$this->db->where('id', $id);

		$query = $this->db->get('patients');


	

		return $query->row();


	}



	public function get_image() {

		//$this->db->where('id', $id);

		$this->db->select('*');


		$query = $this->db->get('patients');

		return $query->row();


	}










	public function get_patients1(){
		$this->db->where('status', 'activated');
		$query = $this->db->get('patients');

		return $query->result();


	}

	public function get_patients($user_id){
		$this->db->where('status', 'activated');
		$this->db->where('patient_user_id', $user_id);
		$query = $this->db->get('patients');

		return $query->result();


	}


	public function get_patients_deactivated($user_id){
		$this->db->where('status', 'deactivated');
		$this->db->where('patient_user_id', $user_id);
		$query = $this->db->get('patients');

		return $query->result();


	}





	public function get_patients2($patient_id){

		$this->db->where('id',$patient_id);
		$this->db->where('status', 'activated');
		$query = $this->db->get('patients');

		return $query->result();


	}


	public function get_buttons($patient_id){

		$this->db->where('id',$patient_id);
		$query = $this->db->get('patients');

		return $query->result();


	}






	public function get_patients3($patient_id){
		$this->db->where('id', $patient_id);
		$query = $this->db->get('patients');

		return $query->result();


	}

	public function create_patients($data){

		$insert_query = $this->db->insert('patients', $data);

		return $insert_query;

	}




	public function archive_patients($patient_id, $status) {

		$this->db->where('id', $patient_id);

			$data = array('status' => $status );

			return $this->db->update('patients', $data);

	}

	public function activate_patients($patient_id, $status) {

		$this->db->where('id', $patient_id);

			$data = array('status' => $status );

			return $this->db->update('patients', $data);

	}


	public function get_patients_info($patient_id) {

		$this->db->where('id', $patient_id);

		$get_data  = $this->db->get('patients');

		return $get_data->row();


	}


	public function get_button_status($patient_id) {

		$this->db->where('id', $patient_id);

		$get_data  = $this->db->get('patients');

		return $get_data->row();


	}






	public function edit_patient($patient_id, $data) {

		$this->db->where('id', $patient_id);
		$this->db->update('patients', $data);

		return ($this->db->affected_rows() != 1 ) ? false:true;
		//return true;

	}

	public function get_info_patients() {
		$this->db->where('city', 'tacloban');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients5() {
		$this->db->where('incidentType', 'vehicular');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients6() {
		$this->db->where('incidentType', 'hacking');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients7() {
		$this->db->where('incidentType', 'shooting');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients8() {
		$this->db->where('incidentType', 'stabbing');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients9() {
		$this->db->where('incidentType', 'mauling');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients10() {
		$this->db->where('incidentType', 'post');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients11() {
		$this->db->where('incidentType', 'dog');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients12() {
		$this->db->where('incidentType', 'burn');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients13() {
		$this->db->where('incidentType', 'fire');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients14() {
		$this->db->where('incidentType', 'medical');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_info_patients15() {
		$this->db->where('incidentType', 'transport');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_archived_patients() {
		$this->db->where('status', 'deactivated');
		$query = $this->db->get('patients');

		return $query->result();




	}

	public function get_archived_patients2($user_id) {

		$this->db->where('status', 'deactivated');
		$this->db->where('patient_user_id', $user_id);

		$query = $this->db->get('patients');

		return $query->result();




	}





	public function patientsinfo($user_id) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('patient_user_id', $user_id);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}




   	public function patientsinfo2() 

	{  

 		$this->db->select('id,name');

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}


















   	 function getAllGroups()
    {
       	
       	$this->db->where('status', 'activated');
       	$this->db->where('position', 'crew');
       	$this->db->or_where('status', 'hidden');
       	


       	$query = $this->db->get('crew');

        //$query = $this->db->query('SELECT crewn  FROM crew');


        return $query->result();

      
    }

     function getAllGroups2()
    {
       	
    	$this->db->where('position', 'driver');
    	$this->db->where('status', 'activated');
        $query = $this->db->get('crew');


        return $query->result();

      
    }

    function getAllGroups3()
    {
       	
    	$this->db->where('position', 'driver');
    	$this->db->where('status', 'activated');
        $query = $this->db->get('crew');


        return $query->result();

      
    }



    public function get_crew(){

		//$this->db->where('status', 'activated');
		$query = $this->db->get('crew');

		return $query->result();


	}
























































   







	public function AllRoleTypes1($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('city',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes2() 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		//$this->db->where('date_created', '2019');

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}



   	public function AllRoleTypes16() 

	{  

 		$this->db->select('id,username');

		//$this->db->from($this->User);

		//$this->db->where('city',$role);

   		$query = $this->db->get('users');

 		$u=$query->num_rows();

		return $u;

		  

   	}















   		public function AllRoleTypes5($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes6($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes7($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes8($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes9($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes10($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes11($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes12($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes13($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes14($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}

   	public function AllRoleTypes15($role) 

	{  

 		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('incidentType',$role);

   		$query = $this->db->get('patients');

 		$u=$query->num_rows();

		return $u;

		  

   	}















}


 ?>