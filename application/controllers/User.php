<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('common/users_model');
	}

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect(base_url().'sis');
        } else {
        	$data['title'] = 'Login';
			$this->no_view('common/login/index', $data); 	
        }
	}

    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) { 
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials() {	
		$user_name = $this->input->post('user_name');
		$password = $this->__encrip_password($this->input->post('password'));
		$user_data = $this->users_model->validate($user_name, $password);
		
		if($user_data && $user_data->id > 0)
		{
			$data = array(
				'user_id' => $user_data->id,
				'user_name' => $user_data->user_name,
				'first_name' => $user_data->first_name,
				'last_name' => $user_data->last_name,
				'status' => $user_data->status,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			$this->users_model->update(array("last_login"=>date("Y-m-d H:i:s")), $user_id);
			redirect(base_url().'sis');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->no_view('login/index', $data); 		
		}
	}

	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'user');
	}
	
	
	public function profile() {
		if(!$this->session->userdata('is_logged_in')){
            redirect(base_url().'user');
        }
		
		$user = $this->session->userdata;
		
		$data["user"] = $this->users_model->get($user["user_id"]);
		$data["title"] ="User Profile";
        $this->view('sis/users/profile', $data); 
	}
	
	public function update() {
		$data = $this->input->post();
		
		if($data) {
			$user = array(
				"first_name" => $data["first_name"],
				"last_name" => $data["last_name"],
				"email" => $data["email"]
			);
			
			$this->users_model->update($user, $data["id"]);
			if($data["password"]) {
				$password = array("password"=> $this->__encrip_password($data['password']));
				$this->users_model->update($password,$data["id"]);
			}
			$this->session->set_flashdata('success_message', "Update successful!");
		}
		redirect(base_url()."user/profile"); 
	}
}
