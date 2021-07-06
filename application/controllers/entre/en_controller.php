<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class En_controller extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('environnement/env_model','env');
		$this->load->model('entre/entre_model','en');
	  }

	  public function index()
	  {
		  $data['data'] = $this->en->getDepOrSearch();
		  $this->getSession();
		  $this->load->view('entre/en_list_dep',$data);
		  $this->load->view('theme/footer');

	  }
	  public function indexpers()
	  {
		$data['data'] = $this->en->getPersOrSearch();
		$data['dep'] = $this->en->printDep();

		$this->getSession();
		$this->load->view('entre/en_list_pers',$data);
		$this->load->view('theme/footer');
	  }
	  public function indexcong()
	  {
		$this->getSession();
		$this->load->view('entre/en_list_cong');
		$this->load->view('theme/footer');
	  }
	  public function indexbien()
	  {
		$this->getSession();
		$this->load->view('entre/en_list_bien');
		$this->load->view('theme/footer');
	  }
	  public function getSession()
	  {
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);  
	  }

	  public function saveDep()
	  {
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('dep_name', 'dep_name', 'required');
		  $this->form_validation->set_rules('dep_type', 'dep_type', 'required');
  
		  if ($this->form_validation->run() == FALSE){
			  $this->session->set_flashdata('errors', validation_errors());
			  echo "<script>alert('Ajout Error');</script>";
			  redirect(base_url('en'));
		  }else{
			 $this->en->saveOrUpdateDep();
			 echo "<script>alert('Ajout Reussit');</script>";
			 redirect(base_url('en'));
		  }
	  }
	  public function savePers()
	  {
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('pers_name', 'pers_name', 'required');
  
		  if ($this->form_validation->run() == FALSE){
			  $this->session->set_flashdata('errors', validation_errors());
			  echo "<script>alert('Ajout Error');</script>";
			  redirect(base_url('enpers'));
		  }else{
			 $this->en->saveOrUpdatePers();
			 echo "<script>alert('Ajout Reussit');</script>";
			 redirect(base_url('enpers'));
		  }
	  }
	  public function printDep()
	  {
		  $data['data'] = $this->en->printDep();
		  $html = $this->load->view('entre/en_dep_pdf',$data,true);
		  $this->pdf->createPDF($html,'listdep',false);
	  }
	  public function deleteDep($id)
	  {
		  $this->en->deleteDep($id);
		  redirect(base_url('en'));
	  }
}
