<?php

class acronym_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_by_name($name)
	{
		$query = $this->db->query("SELECT * FROM acronyms WHERE name = " . $name);
		return $query->result();
	}
	
	public function get_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM acronyms WHERE id = " . $id);
		return $query->result();
	}
	
	public function get_all()
	{
		$query = $this->db->query("SELECT * FROM acronyms");
		return $query->result();
	}
	
	public function add($name)
	{
		$query = $this->db->query("INSERT INTO acronyms (name) VALUES (\'" . $name . "\');");
		return query->result();
	}
}
