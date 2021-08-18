<?php
class Session_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->library('session','sess');
	  }
	  
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
