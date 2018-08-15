<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientlocation extends CI_Controller {

	public function __construct(){

    parent::__construct();
	$this->load->model('client_model');
    $this->load->database('default');
	$this->load->helper('url');

	}
	public function index()
	{
		$data['view_table'] = $this->client_model->getCities1();
		$this->load->view('client/infocation.php',$data);
		//show automatic view of list then dropdown list will be viewed after clicking
		//map on side after clicking: zoom
		//when city clicked after: show number of hospitals etc. and description of it.
		//b-e only
	}
	
	public function loadDetails($getValue,$get_province	){
		$data2['city_details'] = $this->client_model->getCityDetails(urldecode($getValue));
		$data2['view_table'] = $this->client_model->getCities1();
		$data2['view_cities'] = $this->client_model->getCities(urldecode($get_province));
		$this->load->view('client/infocation.php',$data2);
	}
	
}
