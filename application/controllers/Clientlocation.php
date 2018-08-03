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
		$this->load->view('client/infocation.php');
	}
	
}
