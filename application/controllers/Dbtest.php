<?php

class Dbtest extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('description_model');
	}
	
	public function index()
	{
		$data['description'] = $this->description_model->get_by_acronym_id(1);
		$this->load->view('dbtest', $data);
	}
}
