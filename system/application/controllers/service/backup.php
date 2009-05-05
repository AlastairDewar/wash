<?php

class Backup extends Controller {

	function Backup()
	{
		parent::Controller();	
	}
	
	function index()
	{

	}

	function requirements_met()
	{
		$requirements_met = false;
		if(system("dpkg -l | grep sbackup"))
		{
			$requirements_met = true;
		}
		return $requirements_met;
	}

	function load_service_details()
	{
		# /etc/sbackup.conf
	}
}

/* End of file backup.php */
/* Location: ./system/application/controllers/service/backup.php */
