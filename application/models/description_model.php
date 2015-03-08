<?php

class description_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_by_acronym_id($id, $need_confirmed = 0)
	{
		$query_string = "SELECT * FROM details WHERE acronym_id = " . $id;
		$query_string .= " AND confirmed=" . $need_confirmed . ";";
		
		$query = $this->db->query($query_string);
		
		return $query->result();
	}
	
	public function get_by_description_id($id, $need_confirmed = 0)
	{
		$query_string = "SELECT * FROM details WHERE description_id = " . $id;
		if($need_confirmed == TRUE)
			$query_string .= " AND confirmed=1;";
	
		$query = $this->db->query($query_string);
		
		return $query->result();
	}
	
	public function get_all($need_confirmed = 0)
	{
		$query_string = "SELECT * FROM details";
		$query_string .= " WHERE confirmed=" . $need_confirmed . ";";
		
		$query = $this->db->query($query_string);
		
		return $query->result();
	}
	
	public function add($acronym_id, $expansion, $description, $confirmed)
	{
		$query = $this->db->query("INSERT INTO details (acronym_id, expansion, description, confirmed) VALUES (" . $acronym_id . ",\"" . $expansion . "\",\"" . $description . "\"," . $confirmed . ");");
		return $query;
	}
	
	public function confirm($description_id)
	{
		$query = $this->db->query("UPDATE details SET confirmed=1 WHERE description_id=" . $description_id . ";");
		return $query;
	}
}
