<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signature extends CI_Controller {

	public function __construct(){

	parent::__construct();



	if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access', 'Sorry you are not logged in');
			
			redirect('Login');
		}

	}


	public function index()
	{
		
	}
	Public function insert_single_signature()
	{

	$img = $_POST['image'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = './signature-image/' . uniqid() . '.png';
	$success = file_put_contents($file, $data);
	$image=str_replace('./','',$file);

    $this->Signature_model->insert_single_signature($image);
	 echo '<img src="'.base_url().$image.'">';

     
	}
	public function multiple()
	{	
			$this->load->view('header');
		    $this->load->view('multiple_sign');
	}

	Public function get_multiple()
	{
	$img = $_POST['image'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$image=uniqid() . '.png';
	$file = './signature-image/' .$image;
	$success = file_put_contents($file, $data);
		

	$this->welcome_model->insert_signature($image);
	 echo '<img src="'.base_url().'signature-image/'.$image.'">';
    

	}


}
