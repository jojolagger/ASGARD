<?php

class Upload extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$config = array('upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "768",
			'max_width' => "1024"
		);
		
		$this->load->library('upload', $config);
		$this->load->library('parser');
		
		if($this->upload->do_upload())
		{
			$this->data['upload_data'] = $this->upload->data();
			//$this->load->view('upload_success', $data);
			$this->parser->parse('upload_success', $this->data);
		}
		else
		{
			$this->data['error'] = $this->upload->display_errors();
			//$this->load->view('upload_fail', $error);
			$this->parser->parse('upload_fail', $this->data);
		}
	}
}
