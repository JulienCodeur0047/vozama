<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parent_controller extends CI_Controller{
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		$this->load->model('parent/Parent_model','parent');
		$this->load->model('Session_model','sess4');
	}

	public function index()
	{
		$data['data'] = $this->parent->getOrSearchPare();
		$data['site'] = $this->poste->getSiteLookUp();
		$data['poste'] = $this->poste->getAllPoste();
		$this->getSession();  
		$this->load->view('parent/pare_list',$data);
		$this->load->view('theme/footer');
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
	public function saveparent()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('parent_address', 'parent_address', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('pare'));
		}else{
		   $this->parent->saveOrUpdateParent();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('pare'));
		}
	}
	public function printParent()
	{
		$data['data'] = $this->parent->getOrSearchPare();
		$html = $this->load->view('parent/pare_pdf',$data,true);
		$this->pdf->createPDF($html,'listparent',false);
	}
	public function deleteparent($id)
	{
		$this->parent->deleteParent($id);
		  redirect(base_url('pare'));
	}
}
