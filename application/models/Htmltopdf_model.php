<?php
class Htmltopdf_model extends CI_Model
{



	function fetch_single_details($customer_id)
	{
		$this->db->where('id', $customer_id);
		$data = $this->db->get('patients');


		$output = '

		<head>


		<style>

		  
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		img {
			width: 150px;
			margin: 10px;
			padding: 8px;
		}

		</style>

		</head>



		


		<body>

		<div>
		<img src="'.base_url().'images/tacru.jpg" class="img img-responsive img-circle">
		</div>

		<table width="100%" cellspacing="5" cellpadding="5">';



		foreach($data->result() as $patient_data)
		{
			$output .= ' 
			<tr>
			<td><strong>Incident Location:</strong>'.$patient_data->incidentLocation.'</td>
			<td><strong>Call Received From:</strong> '.$patient_data->callReceivedFrom.'</td>
			<td><strong>Date:</strong>'.$patient_data->date.'</td>			
			</tr>

			<tr>
			<td><strong>Patient Type:</strong>'.$patient_data->patientType.'</td>
			<td><strong>Time Call Received:</strong>'.$patient_data->timeCallReceived.'</td>
			<td><strong>Time at Scene:</strong>'.$patient_data->timeAtScene.'</td>	
			</tr>

			<tr>
			<td><strong>Time Endorsed:</strong>'.$patient_data->timeEndorsed.'</td>
			<td><strong>Ambulance:</strong>'.$patient_data->ambulance.'</td>
			</tr>

			<tr>
			<td><strong>Name:</strong>'.$patient_data->name.'</td>
			<td><strong>Age:</strong>'.$patient_data->age.'</td>
			<td><strong>Birth Date:</strong>'.$patient_data->birthDate.'</td>
			</tr>

			<tr>
			<td><strong>Sex:</strong>'.$patient_data->sex.'</td>
			</tr>

			<tr>
			<td><strong>Address:</strong>'.$patient_data->address.'</td>
			<td><strong>Contact Number:</strong>'.$patient_data->contactNumber.'</td>
			<td><strong>PhilHealth Member:</strong>'.$patient_data->phMember.'</td>
			</tr>

			<tr>
			<td><strong>Level of Consciousness:</strong>'.$patient_data->level.'</td>
			<td><strong>Received From:</strong>'.$patient_data->receivedFrom.'</td>
			<td><strong>Transported To:</strong>'.$patient_data->transportedTo.'</td>
			</tr>

			<tr>
			<td><strong>Type of Run:</strong>'.$patient_data->run.'</td>
			<td><strong>Chief Complaint:</strong>'.$patient_data->chiefComplaint.'</td>
			</tr>


			<tr>
			<td><strong>Injuries:</strong>'.$patient_data->injuries.'</td>
			<td><strong>Vehicle Involved:</strong>'.$patient_data->vehicleInvolved.'
			<strong>Plate No:</strong>'.$patient_data->plate.'
			'.$patient_data->mvc.'
			<strong>Others:</strong>'.$patient_data->mvcothers.'

			<strong>Ped. Vs. Vehicle:</strong>'.$patient_data->ped.'
			<strong>Others:</strong>'.$patient_data->pedothers.'
			</td>
			<td>
			<table class="table table-bordered">
			<tr>
			<th style="width: 40px">TIME</th>
			<th style="width: 40px">PR</th>
			<th style="width: 40px">RR</th>
			<th style="width: 40px">BP</th>
			<th style="width: 40px">Spo2</th>
			</tr>



			<tr>
			<td>
			'.$patient_data->time1.'
			</td>
			<td>
			'.$patient_data->pr1.'
			</td>
			<td>
			'.$patient_data->rr1.'
			</td>
			<td>
			'.$patient_data->bp1.'
			</td>
			<td>
			'.$patient_data->spo21.'
			</td>

			</tr>



			<tr>

			<td>
			'.$patient_data->time2.'
			</td>
			<td>
			'.$patient_data->pr2.'
			</td>
			<td>
			'.$patient_data->rr2.'
			</td>
			<td>
			'.$patient_data->bp2.'
			</td>
			<td>
			'.$patient_data->spo22.'
			</td>

			</tr>

			<tr>

			<td>
			'.$patient_data->time3.'
			</td>
			<td>
			'.$patient_data->pr3.'
			</td>
			<td>
			'.$patient_data->rr3.'
			</td>
			<td>
			'.$patient_data->bp3.'
			</td>
			<td>
			'.$patient_data->spo23.'
			</td>

			</tr>
			</tr>

			</table>

			</td>
			</tr>


			<tr>
			<td><strong>TRIAGE INFORMATION:</strong>'.$patient_data->tri.'</td>
			<td><strong>Skin Color:</strong>'.$patient_data->skinColor.'</td>
			<td><strong>Temp:</strong>'.$patient_data->temp.'</td>
			</tr>

			<tr>
			<td><strong>Left Pupil:</strong>'.$patient_data->leftPupil.'</td>
			<td><strong>Right Pupil:</strong>'.$patient_data->rightPupil.'</td>
			</tr>

			<tr>
			<td><h5 class="text-center margin-bottom">SAMPLE HISTORY</h5></td>
			</tr>

			<tr>
			<td><strong>Sign & Symptoms:</strong>'.$patient_data->signAndSymptoms.'</td>
			<td><strong>Medication:</strong>'.$patient_data->medication.'</td>
			<td><strong>Past and Present Medical History:</strong>'.$patient_data->medicalHistory.'</td>
			</tr>

			<tr>
			<td><strong>Last Oral Intake:</strong>'.$patient_data->lastOralIntake.'</td>
			<td><strong>Allergies:</strong>'.$patient_data->allergies.'</td>
			</tr>


			<tr>
			<td>
			<strong>OB HISTORY:</strong>
			<strong>LMP:</strong>'.$patient_data->lmp.'
			<strong>AOG:</strong>'.$patient_data->aog.'
			<strong>EDD:</strong>'.$patient_data->edd.'
			<strong>G:</strong>'.$patient_data->gOb.'
			<strong>P:</strong>'.$patient_data->pOb.'
			</td>
			<td>
			<strong>Pale Rate Scale of 1-10:</strong>
			<strong>Intial:</strong>'.$patient_data->initial.'
			<strong>Final:</strong>'.$patient_data->final.'
			</td>
			<td>
			<strong>PEDIA:</strong>
			<strong>Sex:</strong>'.$patient_data->sexPedia.'
			<strong>Baby out:</strong>'.$patient_data->babyOut.'
			<strong>Placenta out:</strong>'.$patient_data->placentaOut.'
			</td>
			</tr>

			<tr>
			<td>
			<strong>Circulation:</strong>'.$patient_data->circulation.'
			</td>
			</tr>


			<tr>
			<td>
			<strong>Airway Breathing:</strong>'.$patient_data->breathing.'
			</td>
			<td>
			<strong>Extrication/Immobilization:</strong>'.$patient_data->immobilization.'
			</td>
			</tr>



			<tr>
			<td><strong>Narrative:</strong>'.$patient_data->narrative.'</td>
			</tr>

			<tr>
			<td><strong>CPR INFORMATION:</strong></td>
			</tr>

			<tr>
			<td><strong>Arrest:</strong>'.$patient_data->arrest.'</td>
			<td><strong>Cycles of CPR:</strong>'.$patient_data->cpr.'</td>
			<td><strong>Pulse Restored:</strong>'.$patient_data->pulse.'</td>
			</tr>

			<tr>
			<td><strong>Patient Disposition:</strong>'.$patient_data->disposition.'</td>
			<td><strong>Pending Equipment:</strong>'.$patient_data->pending.'</td>
			</tr>

			<tr>
			<td><strong>Ambulance Driver:</strong>'.$patient_data->ambulanceDriver.'</td>
			<td>
			<strong>Ambulance Crew:</strong>'.$patient_data->crew1.'
			<strong>Ambulance Crew:</strong>'.$patient_data->crew2.'
			<strong>Ambulance Crew:</strong>'.$patient_data->crew3.'
			<strong>Ambulance Crew:</strong>'.$patient_data->crew4.'
			<strong>Ambulance Crew:</strong>'.$patient_data->crew5.'
			<strong>Ambulance Crew:</strong>'.$patient_data->crew6.'
			</td>
			</tr>

			<tr>
			<td><strong>Endorsed By:</strong>'.$patient_data->endorsedBy.'</td>
			<td><strong>Received By:</strong>'.$patient_data->receivedBy.'
			</td>
			<td><h4><strong>Signature:</strong></h4>
			<img src="'.base_url($patient_data->image).'" class="img img-responsive img-circle">
			</td>
			</tr>

			';
		}



		$output .= '</table></body>';
		return $output;
	}
}

?>