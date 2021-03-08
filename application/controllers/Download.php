<?php 

class Download extends CI_Controller{


	public function index(){


		$fileContents = 'uploads/files/tacruapp.zip';
		force_download($fileContents, NULL);

	}






}

 ?>