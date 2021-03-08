<?php 

class Backup extends CI_Controller{

	public function __construct(){

	parent::__construct();

	if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}



	public function index(){

		if($this->session->userdata('type')== 'admin') {

		$user_id = $this->session->userdata('user_id');	

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




		
		$this->load->view('templates/settings/backup/Header', $data);
		$this->load->view('backup/Main', $data);
		$this->load->view('templates/settings/backup/Footer');

		} else {
			echo "Access Denied!";
		}



	}

	public function database_backup(){

	 if($this->session->userdata('type')== 'admin') {

		$this->load->dbutil();
		$db_format=array('format'=>'zip','filename'=>"tacru_db_backup.sql");
		$backup=$this->dbutil->backup($db_format);
		$dbname='backup-on-'.date('Y-m-d').'.zip';
		$save='uploads/'.$dbname;
		write_file($save, $backup);
		force_download($dbname,$backup);
	

	} else {
			echo "Access Denied!";
		}
	








}

}



 ?>