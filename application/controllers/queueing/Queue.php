<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Queue extends MY_Controller {

	public function __construct() {
		parent::__construct();
		
		
	}
	
	public function index() {
		$data["title"] = "Queueing Admin";
		$data["scripts"] = array("plugins/flot/jquery.flot","plugins/flot/jquery.flot.pie","plugins/flot/jquery.flot.resize","charts/donut");
		
		
		$this->view('queueing/index', $data);
	}
	
	public function board() {
		$data["title"] = "Queueing :: Board";
		$data["plugins"] = array("flipclock/flipclock");
		$data["scripts"] = array("plugins/flipclock/flipclock");
		
		$this->no_view('queueing/board', $data);
	}
	
	public function kiosk() {
		$data["title"] = "Queueing :: Kiosk";
		
		$this->no_view('queueing/kiosk', $data);
	}
	
	public function teller() {
		$data["title"] = "Queueing :: Teller";
		
		$this->no_view('queueing/teller', $data);
	}
	
	public function adds() {
		$data["title"] = "Queueing :: Adds";
		
		$this->load->view('queueing/adds.view.php', $data);
	}
}
