<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
 
class Patients extends CI_Controller{

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




		$data['patients'] = $this->Patient_model->get_patients1();


		$this->load->view('templates/patients/Header', $data);
		$this->load->view('patients/Main', $data);
		$this->load->view('templates/patients/Footer');

		} else {
			echo "Access Denied!";
		}


	}





	public function home(){


		if($this->session->userdata('type')== 'staff') {


		$user_id = $this->session->userdata('user_id');


		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);



		$data['patients'] = $this->Patient_model->get_patients($user_id );


		$this->load->view('templates/patients2/Header', $data);
		$this->load->view('patients/Main2', $data);
		$this->load->view('templates/patients2/Footer');

		} else {
			echo "Access Denied!";
		}


	}


















	public function archived(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();



		$data['patients'] = $this->Patient_model->get_archived_patients();

		$this->load->view('templates/patients/Header5', $data);
		$this->load->view('patients/Archive', $data);
		$this->load->view('templates/patients/Footer5');
		


	}

	public function archived2(){

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);




		$data['patients'] = $this->Patient_model->get_patients_deactivated($user_id );

		$this->load->view('templates/patients2/Header5', $data);
		$this->load->view('patients/Archive2', $data);
		$this->load->view('templates/patients2/Footer5');
		


	}



	public function display($patient_id) {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo2();


		$data['img'] = $this->Patient_model->image($patient_id);


		

		$data['patient_data'] = $this->Patient_model->get_patient($patient_id);

		//$data['patient_data2'] = $this->Patient_model->get_image();


		$data['status'] = $this->Patient_model->get_buttons($patient_id);
		

		$this->load->view('templates/patients/Header3', $data);
		$this->load->view('patients/Display', $data);
		$this->load->view('templates/patients/Footer3');
		



	}



	public function display2($patient_id) {

		$user_id = $this->session->userdata('user_id');

		$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

		$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

		$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);
		

		$data['img'] = $this->Patient_model->image($patient_id);

		$data['patient_data'] = $this->Patient_model->get_patient($patient_id);

		$data['status'] = $this->Patient_model->get_buttons($patient_id);



		$this->load->view('templates/patients2/Header3', $data);
		$this->load->view('patients/Display2', $data);
		$this->load->view('templates/patients2/Footer3');
		



	}




	public function Add(){

		

	if($this->session->userdata('type')== 'admin') {	

		


		$this->form_validation->set_rules('incidentLocation', 'Incident Location', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		//$this->form_validation->set_rules('callReceivedFrom', 'Call Received From', 'trim|required');
		//$this->form_validation->set_rules('date', 'Date', 'trim|required');
		//$this->form_validation->set_rules('timeCallReceived', 'Time Call Received', 'trim|required');
		//$this->form_validation->set_rules('timeAtScene', 'Time At Scene', 'trim|required');
		//$this->form_validation->set_rules('timeEndorsed', 'Time Endorsed', 'trim|required');
		

		if ($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




			$data['groups'] = $this->Patient_model->getAllGroups();	
			$data['groups2'] = $this->Patient_model->getAllGroups2();
	

			$this->load->view('templates/patients/Header2', $data);
			$this->load->view('patients/Add', $data);
			$this->load->view('templates/patients/Footer2', $data);
			


		} else {

		

			$breathing=implode(',',$this->input->post('breathing'));
			$pending=implode(',',$this->input->post('pending'));
			$circulation=implode(',',$this->input->post('circulation'));
			$immobilization=implode(',',$this->input->post('immobilization'));
		    $medicalHistory=implode(',',$this->input->post('medicalHistory'));
		    $ped=implode(',',$this->input->post('ped'));
		    $mvc=implode(',',$this->input->post('mvc'));
		    $injuries=implode(',',$this->input->post('injuries'));

			$data = array(

				'city' => $this->input->post('city'),
				'incidentType' => $this->input->post('incidentType'),
				'incidentLocation' => $this->input->post('incidentLocation'),
				'callReceivedFrom' => $this->input->post('callReceivedFrom'),
				'date' => $this->input->post('date'),			
				'timeCallReceived' => $this->input->post('timeCallReceived'),
				'timeAtScene' => $this->input->post('timeAtScene'),
				'timeEndorsed' => $this->input->post('timeEndorsed'),
				'ambulance' => $this->input->post('ambulance'),
				'name' => $this->input->post('name'),
				'age' => $this->input->post('age'),
				'birthDate' => $this->input->post('birthDate'),
				'sex' => $this->input->post('sex'),
				'address' => $this->input->post('address'),
				'contactNumber' => $this->input->post('contactNumber'),
				'phMember' => $this->input->post('phMember'),
				'receivedFrom' => $this->input->post('receivedFrom'),
				'transportedTo' => $this->input->post('transportedTo'),
				'chiefComplaint' => $this->input->post('chiefComplaint'),
				'time1' => $this->input->post('time1'),
				'time2' => $this->input->post('time2'),
				'time3' => $this->input->post('time3'),
				'pr1' => $this->input->post('pr1'),
				'pr2' => $this->input->post('pr2'),
				'pr3' => $this->input->post('pr3'),
				'rr1' => $this->input->post('rr1'),
				'rr2' => $this->input->post('rr2'),
				'rr3' => $this->input->post('rr3'),
				'bp1' => $this->input->post('bp1'),
				'bp2' => $this->input->post('bp2'),
				'bp3' => $this->input->post('bp3'),
				'spo21' => $this->input->post('spo21'),
				'spo22' => $this->input->post('spo22'),
				'spo23' => $this->input->post('spo23'),
				'skinColor' => $this->input->post('skinColor'),
				'temp' => $this->input->post('temp'),
				'signAndSymptoms' => $this->input->post('signAndSymptoms'),
				'allergies' => $this->input->post('allergies'),
				'medication' => $this->input->post('medication'),
				'lastOralIntake' => $this->input->post('lastOralIntake'),
				'eventsPrior' => $this->input->post('eventsPrior'),
				'lmp' => $this->input->post('lmp'),
				'aog' => $this->input->post('aog'),
				'edd' => $this->input->post('edd'),
				'gOb' => $this->input->post('gOb'),
				'pOb' => $this->input->post('pOb'),
				'initial' => $this->input->post('initial'),
				'final' => $this->input->post('final'),
				'sexPedia' => $this->input->post('sexPedia'),
				'babyOut' => $this->input->post('babyOut'),
				'placentaOut' => $this->input->post('placentaOut'),
				'cpr' => $this->input->post('cpr'),
				'ambulanceDriver' => $this->input->post('ambulanceDriver'),
				'crew1' => $this->input->post('crew1'),
				'crew2' => $this->input->post('crew2'),
				'crew3' => $this->input->post('crew3'),
				'crew4' => $this->input->post('crew4'),
				'crew5' => $this->input->post('crew5'),
				'crew6' => $this->input->post('crew6'),
				'endorsedBy' => $this->input->post('endorsedBy'),
				'receivedBy' => $this->input->post('receivedBy'),
				'arrest' => $this->input->post('arrest'),
				'pulse' => $this->input->post('pulse'),
				'disposition' => $this->input->post('disposition'),
				'others' => $this->input->post('others'),
				'lpm' => $this->input->post('lpm'),
				'vehicleInvolved' => $this->input->post('vehicleInvolved'),
				'plate' => $this->input->post('plate'),
				'mvcothers' => $this->input->post('mvcothers'),
				'pedothers' => $this->input->post('pedothers'),
				'narrative' => $this->input->post('narrative'),
				'leftPupil' => $this->input->post('left'),
				'rightPupil' => $this->input->post('right'),
				'run' => $this->input->post('run'),
				'tri' => $this->input->post('tri'),
				'level' => $this->input->post('level'),
				'patientType' => $this->input->post('patientType'),
				'injuries' => $injuries,
				'ped' => $ped,
				'mvc' => $mvc,
				'pending' => $pending,
				'immobilization' =>$immobilization,
				'breathing' =>$breathing,
				'circulation' =>$circulation,
				'medicalHistory' =>$medicalHistory,
				'patient_user_id' => $this->session->userdata('user_id'),
				'image' => $this->session->userdata('img')
				
			);

			$this->session->set_userdata($data);

			


			if($this->Patient_model->create_patients($data)) {


			

				$this->session->set_flashdata('patient_created', 'Patient Data has been created');

				$this->Admin_model->insert_log($this->session->userdata('name'),$this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' patient data created');

				redirect('Patients');

			}
		}

		} else {
			echo "Access Denied!";
		}

	}






	public function Add2(){

		

	if($this->session->userdata('type')== 'staff') {	

		


		$this->form_validation->set_rules('incidentLocation', 'Incident Location', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		//$this->form_validation->set_rules('callReceivedFrom', 'Call Received From', 'trim|required');
		//$this->form_validation->set_rules('date', 'Date', 'trim|required');
		//$this->form_validation->set_rules('timeCallReceived', 'Time Call Received', 'trim|required');
		//$this->form_validation->set_rules('timeAtScene', 'Time At Scene', 'trim|required');
		//$this->form_validation->set_rules('timeEndorsed', 'Time Endorsed', 'trim|required');
		

		if ($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');

			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);
			



			$data['groups'] = $this->Patient_model->getAllGroups();	
			$data['groups2'] = $this->Patient_model->getAllGroups2();
	

			$this->load->view('templates/patients2/Header2', $data);
			$this->load->view('patients/Add2', $data);
			$this->load->view('templates/patients2/Footer2', $data);
			


		} else {

		

			$breathing=implode(',',$this->input->post('breathing'));
			$pending=implode(',',$this->input->post('pending'));
			$circulation=implode(',',$this->input->post('circulation'));
			$immobilization=implode(',',$this->input->post('immobilization'));
		    $medicalHistory=implode(',',$this->input->post('medicalHistory'));
		    $ped=implode(',',$this->input->post('ped'));
		    $mvc=implode(',',$this->input->post('mvc'));
		    $injuries=implode(',',$this->input->post('injuries'));

			$data = array(

				'city' => $this->input->post('city'),
				'incidentType' => $this->input->post('incidentType'),
				'incidentLocation' => $this->input->post('incidentLocation'),
				'callReceivedFrom' => $this->input->post('callReceivedFrom'),
				'date' => $this->input->post('date'),			
				'timeCallReceived' => $this->input->post('timeCallReceived'),
				'timeAtScene' => $this->input->post('timeAtScene'),
				'timeEndorsed' => $this->input->post('timeEndorsed'),
				'ambulance' => $this->input->post('ambulance'),
				'name' => $this->input->post('name'),
				'age' => $this->input->post('age'),
				'birthDate' => $this->input->post('birthDate'),
				'sex' => $this->input->post('sex'),
				'address' => $this->input->post('address'),
				'contactNumber' => $this->input->post('contactNumber'),
				'phMember' => $this->input->post('phMember'),
				'receivedFrom' => $this->input->post('receivedFrom'),
				'transportedTo' => $this->input->post('transportedTo'),
				'chiefComplaint' => $this->input->post('chiefComplaint'),
				'time1' => $this->input->post('time1'),
				'time2' => $this->input->post('time2'),
				'time3' => $this->input->post('time3'),
				'pr1' => $this->input->post('pr1'),
				'pr2' => $this->input->post('pr2'),
				'pr3' => $this->input->post('pr3'),
				'rr1' => $this->input->post('rr1'),
				'rr2' => $this->input->post('rr2'),
				'rr3' => $this->input->post('rr3'),
				'bp1' => $this->input->post('bp1'),
				'bp2' => $this->input->post('bp2'),
				'bp3' => $this->input->post('bp3'),
				'spo21' => $this->input->post('spo21'),
				'spo22' => $this->input->post('spo22'),
				'spo23' => $this->input->post('spo23'),
				'skinColor' => $this->input->post('skinColor'),
				'temp' => $this->input->post('temp'),
				'signAndSymptoms' => $this->input->post('signAndSymptoms'),
				'allergies' => $this->input->post('allergies'),
				'medication' => $this->input->post('medication'),
				'lastOralIntake' => $this->input->post('lastOralIntake'),
				'eventsPrior' => $this->input->post('eventsPrior'),
				'lmp' => $this->input->post('lmp'),
				'aog' => $this->input->post('aog'),
				'edd' => $this->input->post('edd'),
				'gOb' => $this->input->post('gOb'),
				'pOb' => $this->input->post('pOb'),
				'initial' => $this->input->post('initial'),
				'final' => $this->input->post('final'),
				'sexPedia' => $this->input->post('sexPedia'),
				'babyOut' => $this->input->post('babyOut'),
				'placentaOut' => $this->input->post('placentaOut'),
				'cpr' => $this->input->post('cpr'),
				'ambulanceDriver' => $this->input->post('ambulanceDriver'),
				'crew1' => $this->input->post('crew1'),
				'crew2' => $this->input->post('crew2'),
				'crew3' => $this->input->post('crew3'),
				'crew4' => $this->input->post('crew4'),
				'crew5' => $this->input->post('crew5'),
				'crew6' => $this->input->post('crew6'),
				'endorsedBy' => $this->input->post('endorsedBy'),
				'receivedBy' => $this->input->post('receivedBy'),
				'arrest' => $this->input->post('arrest'),
				'pulse' => $this->input->post('pulse'),
				'disposition' => $this->input->post('disposition'),
				'others' => $this->input->post('others'),
				'lpm' => $this->input->post('lpm'),
				'vehicleInvolved' => $this->input->post('vehicleInvolved'),
				'plate' => $this->input->post('plate'),
				'mvcothers' => $this->input->post('mvcothers'),
				'pedothers' => $this->input->post('pedothers'),
				'narrative' => $this->input->post('narrative'),
				'leftPupil' => $this->input->post('left'),
				'rightPupil' => $this->input->post('right'),
				'run' => $this->input->post('run'),
				'tri' => $this->input->post('tri'),
				'level' => $this->input->post('level'),
				'patientType' => $this->input->post('patientType'),
				'injuries' => $injuries,
				'ped' => $ped,
				'mvc' => $mvc,
				'pending' => $pending,
				'immobilization' =>$immobilization,
				'breathing' =>$breathing,
				'circulation' =>$circulation,
				'medicalHistory' =>$medicalHistory,
				'patient_user_id' => $this->session->userdata('user_id'),
				'image' => $this->session->userdata('img')


				
			);

			$this->session->set_userdata($data);


			if($this->Patient_model->create_patients($data)) {

				$this->session->set_flashdata('patient_created', 'Patient Data has been created');

				$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' patient data created');

				redirect('Patients/home');

			}
		}

		} else {
			echo "Access Denied!";
		}

	}




	public function edit($patient_id){


		 $this->form_validation->set_rules('name', 'Name', 'trim|required');
		 $this->form_validation->set_rules('date', 'Date', 'trim|required');


		if($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');


			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo2();




			$data['groups3'] = $this->Patient_model->getAllGroups3();
			$data['groups2'] = $this->Patient_model->getAllGroups2();

			$data['groups'] = $this->Patient_model->getAllGroups();	
			
		    $data['patient_data'] = $this->Patient_model->get_patients_info($patient_id);
		    $data['patient_data2'] = $this->Patient_model->get_patients2($patient_id);


		    $this->load->view('templates/patients/Header4', $data);
			$this->load->view('patients/Edit', $data);
			$this->load->view('templates/patients/Footer4');
			



		} else {


			
			$breathing=implode(',',$this->input->post('breathing'));
			$pending=implode(',',$this->input->post('pending'));
			$circulation=implode(',',$this->input->post('circulation'));
			$immobilization=implode(',',$this->input->post('immobilization'));
		    $medicalHistory=implode(',',$this->input->post('medicalHistory'));
		    $ped=implode(',',$this->input->post('ped'));
		    $mvc=implode(',',$this->input->post('mvc'));
		    $injuries=implode(',',$this->input->post('injuries'));

			$data = array(

				'city' => $this->input->post('city'),
				'incidentType' => $this->input->post('incidentType'),
				'incidentLocation' => $this->input->post('incidentLocation'),
				'callReceivedFrom' => $this->input->post('callReceivedFrom'),
				'date' => $this->input->post('date'),			
				'timeCallReceived' => $this->input->post('timeCallReceived'),
				'timeAtScene' => $this->input->post('timeAtScene'),
				'timeEndorsed' => $this->input->post('timeEndorsed'),
				'ambulance' => $this->input->post('ambulance'),
				'name' => $this->input->post('name'),
				'age' => $this->input->post('age'),
				'birthDate' => $this->input->post('birthDate'),
				'sex' => $this->input->post('sex'),
				'address' => $this->input->post('address'),
				'contactNumber' => $this->input->post('contactNumber'),
				'phMember' => $this->input->post('phMember'),
				'receivedFrom' => $this->input->post('receivedFrom'),
				'transportedTo' => $this->input->post('transportedTo'),
				'chiefComplaint' => $this->input->post('chiefComplaint'),
				'time1' => $this->input->post('time1'),
				'time2' => $this->input->post('time2'),
				'time3' => $this->input->post('time3'),
				'pr1' => $this->input->post('pr1'),
				'pr2' => $this->input->post('pr2'),
				'pr3' => $this->input->post('pr3'),
				'rr1' => $this->input->post('rr1'),
				'rr2' => $this->input->post('rr2'),
				'rr3' => $this->input->post('rr3'),
				'bp1' => $this->input->post('bp1'),
				'bp2' => $this->input->post('bp2'),
				'bp3' => $this->input->post('bp3'),
				'spo21' => $this->input->post('spo21'),
				'spo22' => $this->input->post('spo22'),
				'spo23' => $this->input->post('spo23'),
				'skinColor' => $this->input->post('skinColor'),
				'temp' => $this->input->post('temp'),
				'signAndSymptoms' => $this->input->post('signAndSymptoms'),
				'allergies' => $this->input->post('allergies'),
				'medication' => $this->input->post('medication'),
				'lastOralIntake' => $this->input->post('lastOralIntake'),
				'eventsPrior' => $this->input->post('eventsPrior'),
				'lmp' => $this->input->post('lmp'),
				'aog' => $this->input->post('aog'),
				'edd' => $this->input->post('edd'),
				'gOb' => $this->input->post('gOb'),
				'pOb' => $this->input->post('pOb'),
				'initial' => $this->input->post('initial'),
				'final' => $this->input->post('final'),
				'sexPedia' => $this->input->post('sexPedia'),
				'babyOut' => $this->input->post('babyOut'),
				'placentaOut' => $this->input->post('placentaOut'),
				'cpr' => $this->input->post('cpr'),
				'ambulanceDriver' => $this->input->post('ambulanceDriver'),
				'crew1' => $this->input->post('crew1'),
				'crew2' => $this->input->post('crew2'),
				'crew3' => $this->input->post('crew3'),
				'crew4' => $this->input->post('crew4'),
				'crew5' => $this->input->post('crew5'),
				'crew6' => $this->input->post('crew6'),
				'endorsedBy' => $this->input->post('endorsedBy'),
				'receivedBy' => $this->input->post('receivedBy'),
				'arrest' => $this->input->post('arrest'),
				'pulse' => $this->input->post('pulse'),
				'disposition' => $this->input->post('disposition'),
				'others' => $this->input->post('others'),
				'lpm' => $this->input->post('lpm'),
				'vehicleInvolved' => $this->input->post('vehicleInvolved'),
				'plate' => $this->input->post('plate'),
				'mvcothers' => $this->input->post('mvcothers'),
				'pedothers' => $this->input->post('pedothers'),
				'narrative' => $this->input->post('narrative'),
				'leftPupil' => $this->input->post('left'),
				'rightPupil' => $this->input->post('right'),
				'run' => $this->input->post('run'),
				'tri' => $this->input->post('tri'),
				'level' => $this->input->post('level'),
				'patientType' => $this->input->post('patientType'),
				'injuries' => $injuries,
				'ped' => $ped,
				'mvc' => $mvc,
				'pending' => $pending,
				'immobilization' => $immobilization,
				'breathing' => $breathing,
				'circulation' => $circulation,
				'medicalHistory' => $medicalHistory

				
				);

				$this->session->set_userdata($data);

			if($this->Patient_model->edit_patient($patient_id, $data)) {

				$this->session->set_flashdata('patient_updated', 'Patient data has been updated');

					$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' patient data edited');

				redirect("Patients");


			}







		}


	}
	





	public function edit2($patient_id){


		 $this->form_validation->set_rules('name', 'Name', 'trim|required');
		 $this->form_validation->set_rules('date', 'Date', 'trim|required');


		if($this->form_validation->run() == FALSE) {

			$user_id = $this->session->userdata('user_id');


			$data['equipmentinfo'] = $this->Equipment_model->equipmentsinfo();

			$data['fileinfo'] = $this->Files_model->fileinfo($user_id);

			$data['patientsinfo'] = $this->Patient_model->patientsinfo($user_id);



			$data['groups3'] = $this->Patient_model->getAllGroups3();
			$data['groups2'] = $this->Patient_model->getAllGroups2();

			$data['groups'] = $this->Patient_model->getAllGroups();	
			
		    $data['patient_data'] = $this->Patient_model->get_patients_info($patient_id);

		    $data['patient_data2'] = $this->Patient_model->get_patients2($patient_id);



		    $this->load->view('templates/patients2/Header4', $data);
			$this->load->view('patients/Edit2', $data);
			$this->load->view('templates/patients2/Footer4');
			



		} else {


			
			$breathing=implode(',',$this->input->post('breathing'));
			$pending=implode(',',$this->input->post('pending'));
			$circulation=implode(',',$this->input->post('circulation'));
			$immobilization=implode(',',$this->input->post('immobilization'));
		    $medicalHistory=implode(',',$this->input->post('medicalHistory'));
		    $ped=implode(',',$this->input->post('ped'));
		    $mvc=implode(',',$this->input->post('mvc'));
		    $injuries=implode(',',$this->input->post('injuries'));

			$data = array(

				'city' => $this->input->post('city'),
				'incidentType' => $this->input->post('incidentType'),
				'incidentLocation' => $this->input->post('incidentLocation'),
				'callReceivedFrom' => $this->input->post('callReceivedFrom'),
				'date' => $this->input->post('date'),			
				'timeCallReceived' => $this->input->post('timeCallReceived'),
				'timeAtScene' => $this->input->post('timeAtScene'),
				'timeEndorsed' => $this->input->post('timeEndorsed'),
				'ambulance' => $this->input->post('ambulance'),
				'name' => $this->input->post('name'),
				'age' => $this->input->post('age'),
				'birthDate' => $this->input->post('birthDate'),
				'sex' => $this->input->post('sex'),
				'address' => $this->input->post('address'),
				'contactNumber' => $this->input->post('contactNumber'),
				'phMember' => $this->input->post('phMember'),
				'receivedFrom' => $this->input->post('receivedFrom'),
				'transportedTo' => $this->input->post('transportedTo'),
				'chiefComplaint' => $this->input->post('chiefComplaint'),
				'time1' => $this->input->post('time1'),
				'time2' => $this->input->post('time2'),
				'time3' => $this->input->post('time3'),
				'pr1' => $this->input->post('pr1'),
				'pr2' => $this->input->post('pr2'),
				'pr3' => $this->input->post('pr3'),
				'rr1' => $this->input->post('rr1'),
				'rr2' => $this->input->post('rr2'),
				'rr3' => $this->input->post('rr3'),
				'bp1' => $this->input->post('bp1'),
				'bp2' => $this->input->post('bp2'),
				'bp3' => $this->input->post('bp3'),
				'spo21' => $this->input->post('spo21'),
				'spo22' => $this->input->post('spo22'),
				'spo23' => $this->input->post('spo23'),
				'skinColor' => $this->input->post('skinColor'),
				'temp' => $this->input->post('temp'),
				'signAndSymptoms' => $this->input->post('signAndSymptoms'),
				'allergies' => $this->input->post('allergies'),
				'medication' => $this->input->post('medication'),
				'lastOralIntake' => $this->input->post('lastOralIntake'),
				'eventsPrior' => $this->input->post('eventsPrior'),
				'lmp' => $this->input->post('lmp'),
				'aog' => $this->input->post('aog'),
				'edd' => $this->input->post('edd'),
				'gOb' => $this->input->post('gOb'),
				'pOb' => $this->input->post('pOb'),
				'initial' => $this->input->post('initial'),
				'final' => $this->input->post('final'),
				'sexPedia' => $this->input->post('sexPedia'),
				'babyOut' => $this->input->post('babyOut'),
				'placentaOut' => $this->input->post('placentaOut'),
				'cpr' => $this->input->post('cpr'),
				'ambulanceDriver' => $this->input->post('ambulanceDriver'),
				'crew1' => $this->input->post('crew1'),
				'crew2' => $this->input->post('crew2'),
				'crew3' => $this->input->post('crew3'),
				'crew4' => $this->input->post('crew4'),
				'crew5' => $this->input->post('crew5'),
				'crew6' => $this->input->post('crew6'),
				'endorsedBy' => $this->input->post('endorsedBy'),
				'receivedBy' => $this->input->post('receivedBy'),
				'arrest' => $this->input->post('arrest'),
				'pulse' => $this->input->post('pulse'),
				'disposition' => $this->input->post('disposition'),
				'others' => $this->input->post('others'),
				'lpm' => $this->input->post('lpm'),
				'vehicleInvolved' => $this->input->post('vehicleInvolved'),
				'plate' => $this->input->post('plate'),
				'mvcothers' => $this->input->post('mvcothers'),
				'pedothers' => $this->input->post('pedothers'),
				'narrative' => $this->input->post('narrative'),
				'leftPupil' => $this->input->post('left'),
				'rightPupil' => $this->input->post('right'),
				'run' => $this->input->post('run'),
				'tri' => $this->input->post('tri'),
				'level' => $this->input->post('level'),
				'patientType' => $this->input->post('patientType'),
				'injuries' => $injuries,
				'ped' => $ped,
				'mvc' => $mvc,
				'pending' => $pending,
				'immobilization' => $immobilization,
				'breathing' => $breathing,
				'circulation' => $circulation,
				'medicalHistory' => $medicalHistory

				
				);

				$this->session->set_userdata($data);

			if($this->Patient_model->edit_patient($patient_id, $data)) {

				$this->session->set_flashdata('patient_updated', 'Patient data has been updated');

					$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' patient data edited');

				redirect("Patients/home");


			}







		}


	}









	public function Archive($patient_id) {
		
		$status = 'deactivated';
		$this->Patient_model->archive_patients($patient_id, $status);

		$this->session->set_flashdata('patient_archived', 'Patient data has been archived');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' data archived');
		
		redirect("Patients");


	}


	public function Archive2($patient_id) {
		
		$status = 'deactivated';
		$this->Patient_model->archive_patients($patient_id, $status);

		$this->session->set_flashdata('patient_archived', 'Patient data has been archived');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' data archived');
		
		redirect("Patients/home");


	}





	public function activate($patient_id) {
		
		$status = 'activated';
		$this->Patient_model->activate_patients($patient_id, $status);

		$this->session->set_flashdata('patient_activated', 'Patient data has been activated');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' data activated');
		
		redirect("Patients");


	}



	public function activate2($patient_id) {
		
		$status = 'activated';
		$this->Patient_model->activate_patients($patient_id, $status);

		$this->session->set_flashdata('patient_activated', 'Patient data has been activated');

		$this->Admin_model->insert_log($this->session->userdata('user_id'), 
								ucfirst($this->session->userdata('name')).' data activated');
		
		redirect("Patients/home");


	}



	public function Pdf(){

		if($this->uri->segment(3))
		{
			$customer_id = $this->uri->segment(3);
			$html_content = '<h3 align="center"></h3>';
			$html_content .= $this->Htmltopdf_model->fetch_single_details($customer_id);
			
			//$this->pdf->loadHtml($aData['html']);
    		$this->pdf->set_option('isRemoteEnabled', TRUE);


			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
		}



	} 

		




}



 ?>