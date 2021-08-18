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
		$this->load->model('Session_model','sess4');
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
		$data['data']= $this->en->getConOrSearch();
		$data['pers']= $this->en->getPers();
		$data['dep'] = $this->en->printDep();
		$this->getSession(); 
		$this->load->view('entre/en_list_cong',$data);
		$this->load->view('theme/footer');
	  }
	  public function indexbien()
	  {
		$data['data']= $this->en->getBienOrSearch();
		$data['dep'] = $this->en->printDep();
		$this->getSession(); 
		$this->load->view('entre/en_list_bien',$data);
		$this->load->view('theme/footer');
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
	  public function saveBien()
	  {
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('bien_name', 'bien_name', 'required');
  
		  if ($this->form_validation->run() == FALSE){
			  $this->session->set_flashdata('errors', validation_errors());
			  echo "<script>alert('Ajout Error');</script>";
			  redirect(base_url('enbien'));
		  }else{
			 $this->en->saveOrUpdateBien();
			 echo "<script>alert('Ajout Reussit');</script>";
			 redirect(base_url('enbien'));
		  }
	  }
	  public function saveCong()
	  {
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('pers_id', 'pers_id', 'required');
		  $this->form_validation->set_rules('conge_date_start', 'conge_date_start', 'required');
		  $this->form_validation->set_rules('conge_nbr_day', 'conge_nbr_day', 'required');
		  $this->form_validation->set_rules('conge_droit', 'conge_droit', 'required');
  
		  if ($this->form_validation->run() == FALSE){
			  $this->session->set_flashdata('errors', validation_errors());
			  echo "<script>alert('Ajout Error');</script>";
			  redirect(base_url('encong'));
		  }else{
			 $this->en->saveOrUpdateCong();
			 echo "<script>alert('Ajout Reussit');</script>";
			 redirect(base_url('encong'));
		  }
	  }
	  public function printDep()
	  {
		  $data['data'] = $this->en->printDep();
		  $html = $this->load->view('entre/en_dep_pdf',$data,true);
		  $this->pdf->createPDF($html,'listdep',false);
	  }
	  public function printPers()
	  {
		  $data['data'] = $this->en->printPers();
		  $html = $this->load->view('entre/en_pers_pdf',$data,true);
		  $this->pdf->createPDF($html,'listpers',false);
	  }
	  public function printCong()
	  {
		  $data['data'] = $this->en->printCong();
		  $html = $this->load->view('entre/en_cong_pdf',$data,true);
		  $this->pdf->createPDF($html,'listcong',false);
	  }
	  public function printBien()
	  {
		  $data['data'] = $this->en->printBien();
		  $html = $this->load->view('entre/en_bien_pdf',$data,true);
		  $this->pdf->createPDF($html,'listcong',false);
	  }
	  public function deleteDep($id)
	  {
		  $this->en->deleteDep($id);
		  redirect(base_url('en'));
	  }
	  public function deletePers($id)
	  {
		  $this->en->deletePers($id);
		  redirect(base_url('enpers'));
	  }
	  public function deleteCong($id)
	  {
		  $this->en->deleteCong($id);
		  redirect(base_url('encong'));
	  }
	  public function deleteBien($id)
	  {
		  $this->en->deleteBien($id);
		  redirect(base_url('enbien'));
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
