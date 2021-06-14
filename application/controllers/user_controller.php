<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH . 'libraries/REST_Controller.php';
class User_Controller extends CI_Controller{
	//public $user;

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	*/
	public function __construct() {
	   parent::__construct(); 
	   //$this->load->library('form_validation');
	   //$this->load->library('session');
	   $this->load->model('User_Model','user');
 
 
	   
	}
	/**
    * Display Data this method.
    *
    * @return Response
   */
  public function index()
  {
	  $data['data'] = $this->user->get_user();
		/*var_dump($data);
		die; */

	  $this->load->view('theme/header');       
	  $this->load->view('userCRUD/list',$data);
	  $this->load->view('theme/footer');
  }


  /**
   * Show Details this method.
   *
   * @return Response
  */
  public function show($id_user)
  {
	 $utilisateur = $this->user->find_user($id_user);


	 $this->load->view('theme/header');
	 $this->load->view('userCRUD/show',array('utilisateur'=>$utilisateur));
	 $this->load->view('theme/footer');
  }


  /**
   * Create from display on this method.
   *
   * @return Response
  */
  public function create()
  {
	 $this->load->view('theme/header');
	 $this->load->view('userCRUD/create');
	 $this->load->view('theme/footer');   
  }


  /**
   * Store Data from this method.
   *
   * @return Response
  */
  public function store()
  {
	   $this->form_validation->set_rules('name', 'name', 'required');
	   $this->form_validation->set_rules('statut', 'statut', 'required');
	   $this->form_validation->set_rules('email', 'email', 'required');
	   $this->form_validation->set_rules('address', 'address', 'required');


	   if ($this->form_validation->run() == FALSE){
		   $this->session->set_flashdata('errors', validation_errors());
		   redirect(base_url('userCreate/'));
	   }else{
		  $this->user->insert_user();
		  redirect(base_url('user'));
	   }
   }


  /**
   * Edit Data from this method.
   *
   * @return Response
  */
  public function edit($id_user)
  {
	  $utilisateur = $this->user->find_user($id_user);
	  $this->load->view('theme/header');
	  $this->load->view('userCRUD/edit',array('utilisateur'=>$utilisateur));
	  $this->load->view('theme/footer');
  }


  /**
   * Update Data from this method.
   *
   * @return Response
  */
  public function update($id_user)
  {
	$this->form_validation->set_rules('name', 'name', 'required');
	$this->form_validation->set_rules('statut', 'statut', 'required');
	$this->form_validation->set_rules('email', 'email', 'required');
	$this->form_validation->set_rules('address', 'address', 'required');


	   if ($this->form_validation->run() == FALSE){
		   $this->session->set_flashdata('errors', validation_errors());
		   redirect(base_url('userEdit/'.$id_user));
	   }else{ 
		 $this->user->update_user($id_user);
		 redirect(base_url('user'));
	   }
  }


  /**
   * Delete Data from this method.
   *
   * @return Response
  */
  public function delete($id_user)
  {
	  $this->user->delete_user($id_user);
	  redirect(base_url('user'));
  }
}
?>
