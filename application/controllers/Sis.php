<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sis extends MY_Controller {

	public function __construct() {
		parent::__construct();
		 
		if(!$this->session->userdata('is_logged_in')){
            redirect(base_url().'user');
        }
	}
	
	public function index() {
		$data["title"] = "Sis Admin";
		$data["styles"] = array("package/plans","package/event", "package/pricing");
		
		
		$this->view('common/index', $data);
	}
}