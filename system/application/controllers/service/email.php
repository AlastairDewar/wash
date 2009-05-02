<?php

class Email extends Controller {

	function Email()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}
}

/* End of file email.php */
/* Location: ./system/application/controllers/service/email.php */
