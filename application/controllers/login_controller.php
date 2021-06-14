<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{
	 
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model', 'user');
	}

	public function index(){
		$this->login();
	}

	public function welcome(){
		$data['session'] = $this->session;	
		$this->load->view('theme/header',$data);
		$this->load->view('home/welcome');
		$this->load->view('theme/footer');
	}
	public function navbar(){
		$this->load->view('home/navbar');
	}

	public function login(){

		$this->load->view('theme/header-login');
		$this->load->view('login/login');
		$this->load->view('theme/footer');
	}

	function doLogin() {
		// Check form  validation
		$this->load->library('form_validation');
	 
		$this->form_validation->set_rules('user_name', 'Utilisateur', 'trim|required');
		$this->form_validation->set_rules('user_password', 'Mot de passe', 'trim|required');
		//var_dump($this->form_validation->run());
		//die;
		if($this->form_validation->run() == FALSE) {
		  //Field validation failed.  User redirected to login page
		  $this->index();
		} else {  
		  $sessArray = array();
		  //Field validation succeeded.  Validate against database
		  $user_name = $this->input->post('user_name');
		  $user_password = $this->input->post('user_password');
	 
		  $this->user->setUser_Name($user_name);
		  $this->user->setUser_Password($user_password);
	 
		  //query the database
		  $result = $this->user->login();

		  
		  if($result) {
			foreach($result as $row) {
			  $sessArray = array(
				'id' => $row->id,
				'user_name' => $row->user_name,
				'user_type_code' => $row->user_type_code,
				'is_authenticated' => TRUE,
			  );
			$this->session->set_userdata($sessArray);
			}
			$this->welcome();
		  } else {
			  $this->function_alert("Utilisateur ou Mot de passe incorrecte !");
			  $this->index();
		  } 
		}
	  }
	public function function_alert($message) {
		echo "<script>alert('$message');</script>";
	}
}
