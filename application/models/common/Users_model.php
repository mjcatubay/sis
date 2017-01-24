<?php

class Users_model extends MY_Model
{
	
	public $id;
	public $user_name;
	public $password;
	public $is_active;

	
	public function __construct() {
		parent::__construct();
	}

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function validate($user_name, $password)
	{
		$this->db->where(" (user_name = '$user_name' OR email = '$user_name' ) ");
		$this->db->where('password', $password);
		$this->db->where(" (status = 'ADMIN' OR status = 'SUPER ADMIN') ");
		$query = $this->db->get($this->get_table_name());
		
		if(count($query->row()) > 0) {
			return $query->row();
		} else return 0;
	}
	
	public function current_user() {
		$user_id = $this->session->userdata["user_id"];
		return $user_id;
	}
	
	public function get_by_username($user_name) {
		$this->db->where("user_name",$user_name);
		$data = $this->db->get($this->get_table_name())->result();
		return $data;
		
	}

    /**
    * Serialize the session data stored in the database, 
    * store it in a new array and return it to the controller 
    * @return array
    */
	function get_db_session_data()
	{
		$query = $this->db->select('user_data')->get('ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['user_name']; 
		    $user['is_logged_in'] = $udata['is_logged_in']; 
		}
		return $user;
	}
	
    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */	
	function create_member()
	{

		$this->db->where('user_name', $this->input->post('username'));
		$query = $this->db->get('users');

        if($query->num_rows > 0){
        	echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Username already taken";	
			echo '</strong></div>';
		}else{

			$new_member_insert_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email_addres' => $this->input->post('email_address'),			
				'user_name' => $this->input->post('user_name'),
				'password' => md5($this->input->post('password'))						
			);
			$insert = $this->db->insert('users', $new_member_insert_data);
		    return $insert;
		}
	      
	}//create_member
	
	
	// Override Methods
	//=========================================================
	
	public function get_table_name()
	{
		return 'users';
	}
	
	public function get_identifier()
	{
		return 'id';
	}
	
	//eof: Override Methods
}

/**
* eof: users_model.php
*/