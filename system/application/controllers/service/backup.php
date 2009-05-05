<?php

class Backup extends Controller {

	function Backup()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if($this->requirements_met())
		{
		
		}
	}

	function requirements_met()
	{
		$requirements_met = false;
		$check = exec("dpkg -l | grep sbackup");
		if($check != null)
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
