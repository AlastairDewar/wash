<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/system/welcome.php */
