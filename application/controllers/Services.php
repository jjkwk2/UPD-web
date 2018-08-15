<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct(){

    parent::__construct();
	$this->load->model('client_model');
    $this->load->database('default');
	$this->load->helper('url');

	}
	public function index()
	{
		$data1['view_table'] = $this->client_model->getTags();
        $this->load->view('client/services_index.php',$data1);
        // ahref Services/filteredDetails/services_/ <-if filtered blog posts
	}
	
	public function filteredDetails($getValue){
        $data['view_tagged'] = $this->client_model->getTaggedPosts(urldecode($getValue));
        $this->load->view('client/services_res.php',$data);
         
	}
	
}
