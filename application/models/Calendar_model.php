<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model {


/*Read the data from DB */
	Public function getEvents()
	{
		
	$sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}

/*Create new events */

	Public function addEvent()
	{

	$sql = "INSERT INTO events (title,events.start,events.end,description, color) VALUES (?,?,?,?,?)";
	$this->db->query($sql, array($_POST['title'], $_POST['start'],$_POST['end'], $_POST['description'], $_POST['color']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function updateEvent()
	{

	$sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ?";
	$this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}


	/*Delete event */

	Public function deleteEvent()
	{

	$sql = "DELETE FROM events WHERE id = ?";
	$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function dragUpdateEvent()
	{
			//$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

			$sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ?";
			$this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;


	}



	public function eventnotif() 

	{  

		//$this->db->select('id,name');

		//$query = $this->db->get('equipments');

		//$u=$query->num_rows();

		//return $u;

		$date = new DateTime("now");

		//$curr_date = $date->format('Y-m-d ');
		//$curr_date = $date->format("%d/%m/%Y");
		$curr_date = $date->format('Y-m-d');



		$this->db->select('*');
		$this->db->from('events'); 
 		$this->db->where('start', $curr_date);//use date function
 		$query = $this->db->get();
 		//return $query->result();

 		$u=$query->num_rows();
 		return $u;



 	}



 	public function getevent_notif(){
 		//$this->db->where('status', 'activated');
 		//$query = $this->db->get('equipments');

 		//return $query->result();


 		$date = new DateTime("now");

 		$curr_date = $date->format('Y-m-d');

 		//$this->db->select('*');
 		//$this->db->from('equipments'); 
 		$this->db->where('start',$curr_date);//use date function
 		$query = $this->db->get('events');
 		return $query->result();



}



}