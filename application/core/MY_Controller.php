<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
		
		
    }
	
	public function view($page = NULL, $data = NULL) {
		if ( ! file_exists(APPPATH.'views/'.$page.'.view.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = isset($data["title"]) ? ucfirst($data["title"]) : $page; // Capitalize the first letter
		
        $this->load->view('templates/header.view.php', $data);
        $this->load->view($page .'.view.php', $data);
        $this->load->view('templates/footer.view.php', $data);
	}
	
	public function no_view($page = NULL, $data = NULL) {
		if ( ! file_exists(APPPATH.'views/'.$page.'.view.php'))
        {
			
                // Whoops, we don't have a page for that!
                //show_404();
        }

        $data['title'] = isset($data["title"]) ? ucfirst($data["title"]) : $page; // Capitalize the first letter

        $this->load->view('templates/no-header.view.php', $data);
        $this->load->view($page . '.view.php', $data);
        $this->load->view('templates/no-footer.view.php', $data);
	}
}