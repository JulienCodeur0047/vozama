<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_controller extends CI_Controller{
	 
	
	public function getSession()
	{
		var_dump($this->session->get_current_user);
		die;
		if (!($this->sess->get_current_user == "" || empty($this->sess->get_current_user))) {
			$session['session'] = $this->sess;
			$this->load->view('theme/header',$session);
		}else{
			redirect(base_url('logout'));
		}
	}
}
?>
