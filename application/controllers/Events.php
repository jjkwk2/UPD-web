<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){

    parent::__construct();
	$this->load->model('client_model');
    $this->load->database('default');
	$this->load->helper('url');

	}
	public function index()
	{
        $this->load->view('client/events_index.php');
        // ahref Services/filteredDetails/services_/ <-if filtered blog posts
	}
	
	public function filteredEvents($getValue){
        //slider dynamic
        //once clicked "see more" pages only == based on the post's ID
        $data['view_tagged'] = $this->client_model->getTaggedPosts(urldecode($getValue));
        $this->load->view('client/events_index.php',$data);
         
	}
	
}
