<?php

class Backup extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('home');
	}
}

/* End of file backup.php */
/* Location: ./system/application/controllers/backup.php */