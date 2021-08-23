<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{
	 
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model', 'user');
	}

	public function index(){
		$this->login();
		$this->destroySession();
		
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
	public function destroySession()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('user_type_code');
		$sessArray = array(
			'id' => "",
			'user_name' => "",
			'user_type_code' => "",
			'is_authenticated' => FALSE,
		  );
		$this->session->set_userdata($sessArray);
	}
	public function userManager()
	{
		$data['user'] = $this->user->getOrSearchUser();
		$this->getSession();
		$this->load->view('admin/admin_list_user',$data);
		$this->load->view('theme/footer');
	}
	public function saveUser()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('user_name', 'user_name', 'required');
		$this->form_validation->set_rules('user_password', 'user_password', 'required');
		//$this->form_validation->set_rules('user_type', 'user_type', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
		redirect(base_url('usermgr'));
		}else{
		   $this->user->saveOrUpdateUser();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('usermgr'));
		}
	}
	public function deleteUser($id)
	{
		$this->user->deleteUser($id);
		redirect(base_url('usermgr'));
	}
	public function getSession()
	{
		if ($this->session->userdata('is_authenticated') == TRUE) {
			$session['session'] = $this->session;
			$this->load->view('theme/header',$session);
		}else{
			redirect(base_url('logout'));
		}
	}
}
