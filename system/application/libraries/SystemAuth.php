<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SystemAuth {

	var $CI;
	var $user_name, $user_password;

    function SystemAuth()
    {
    	$CI =& get_instance();
    	$CI->load->library('session');
    }

    function requirement_met()
    {
	$requirements_met = false;
	$check = exec("dpkg -l | grep php5-auth-pam");
	if($check != null)
	{
		$requirements_met = true;
	}
	return $requirements_met;
    }

    function register($username, $password)
    {
	$password = crypt($password);
	#adduser
	#Needs to be root not www-data
    }

    function validate($username, $password)
    {
	if($username == null){$username = $this->user_name;}
	if($password == null){$password = $this->user_password;}
	if (pam_auth($username, $password, &$error))
	{
		$this->user_name = $username;
		$this->user_password = $password;
		return true;
	} else {
		#$this->load->view('', $error);
		return false;
	}
    }

    funtion login($username, $password)
    {
	if($username == null){$username = $this->user_name;}
	if($password == null){$password = $this->user_password;}
	if($this->validate($username, $password))
	{
		$this->session->set_userdata('Auth', md5($username.$password));
	} else {
		#$this->load->view('', $error);
	}
    }
}

?>
