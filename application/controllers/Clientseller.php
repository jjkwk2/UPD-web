<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientseller extends CI_Controller {

	public function index()
	{
		//automatic view
		$this->load->view('client/seller');
	}
	public function insertcl()
	{
		$fname =  $this->input->post('fName');
		$email =  $this->input->post('email');
		$cont =  $this->input->post('cont');
		$sdate =  $this->input->post('sdate');
		$stime =  $this->input->post('stime');

		$clinsert=array(
			'FNAME' => $fname,
			'CONTACT'=>$cont,
			'MAIL'=>$email,
			'P_DATE'=>$sdate,
			'P_TIME'=>$stime,
			'STATUS'=>0
		);

		  $value = $this->client_model->insertData_S($clinsert);
			if ($value){
				echo '<script> alert("Successful!") </script>';
			} else {
				echo '<script> alert("Try again.") </script>';
			}
			
		  $this->load->view('client/seller.php');	
	}
	
}
