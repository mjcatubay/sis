<?php

class MY_Model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get($id)
	{		
		$this->db->where($this->get_identifier(), $id);
		$query = $this->db->get($this->get_table_name());
		return $query->row();
	}
	
	public function get_all($limit = 0, $offset = 0)
	{
		if($limit > 0)
		{
			$this->db->limit($limit, $offset);
		}
		
		$query = $this->db->get($this->get_table_name());
		return $query->result();
	}
	
	public function get_all_active($limit = 0, $offset = 0)
	{
		if($limit > 0)
		{
			$this->db->limit($limit, $offset);
		}
		
		$this->db->where($this->get_active_identifier(),true);
		$query = $this->db->get($this->get_table_name());
		return $query->result();
	}
	
	public function count()
	{
		return $this->db->count_all($this->get_table_name());
	}
	
	public function create($record)
	{
		return $this->db->insert($this->get_table_name(), $record);
	}
	
	public function update($record, $id)
	{
		$this->db->where($this->get_identifier(), $id);
		return $this->db->update($this->get_table_name(), $record);
	}
	
	public function delete($id)
	{
		$this->db->where($this->get_identifier(), $id);
		$this->db->delete($this->get_table_name());
	}
	
	public function get_active_identifier()
	{
		return 'is_active';
	}
	
	public function get_table_name()
	{
		return '';
	}
	
	public function get_identifier()
	{
		return '';
	}
}

/**
* eof: MY_Model.php
*/