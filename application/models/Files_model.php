<?php 

class Files_Model extends CI_Model{

	function __construct(){
		$this->tableName = 'files';
		$this->primaryKey = 'id';




	}


	public function image($file_id) {


		$this->db->where('id', $file_id);

		//$this->db->where('rowno', $this->session->userdata('rowno');

		$query = $this->db->get('files');


	

		return $query->row();


	}



	

	public function insert($data = array()){
		if(!array_key_exists("created", $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists("modified", $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}	
		$insert = $this->db->insert($this->tableName, $data);
		if($insert){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}


	public function get_files($user_id){
		$this->db->where('stat', 'activated');
		$this->db->where('file_user_id', $user_id);
		$query = $this->db->get('files');

		return $query->result();


	}

	public function get_file($id) {


		$this->db->where('id', $id);

		$query = $this->db->get('files');




		return $query->row();


	}


	public function fileinfo($user_id) 

	{  

		$this->db->select('id,name');

		//$this->db->from($this->User);

		$this->db->where('file_user_id', $user_id);

		$query = $this->db->get('files');

		$u=$query->num_rows();

		return $u;



	}


	public function get_archived_files($id) {

		$this->db->where('file_user_id', $id);
		$this->db->where('stat', 'deactivated');
		$query = $this->db->get('files');

		return $query->result();




	}


	public function getRows($id = ''){
		$this->db->select('id', 'name', 'picture');
		$this->db->from('files');
		if ($id) {
			$this->db->where('id', $id);
			$query = $this->db->get();
			$result = $query->row_array();
		}else{
			$this->db->order_by('created', 'desc');
			$query = $this->db->get();
			$result = $query->result_array();
		}

		return !empty($result)?$result:false;


	}

	public function download($id){
		$query = $this->db->get_where('files',array('id'=>$id));
		return $query->row_array();

	}

	public function archive_files($file_id, $status) {

		$this->db->where('id', $file_id);

		$data = array('stat' => $status );

		return $this->db->update('files', $data);

	}

	public function activate_files($file_id, $status) {

		$this->db->where('id', $file_id);

		$data = array('stat' => $status );

		return $this->db->update('files', $data);

	}

	public function get_files_info($file_id) {

		$this->db->where('id', $file_id);

		$get_data  = $this->db->get('files');

		return $get_data->row();


	}

	public function edit_file($file_id, $data) {

		$this->db->where('id', $file_id);
		$this->db->update('files', $data);

		return true;

	}




	public function get_buttons($file_id){

		$this->db->where('id',$file_id);
		$query = $this->db->get('files');

		return $query->result();


	}

	












}
?>