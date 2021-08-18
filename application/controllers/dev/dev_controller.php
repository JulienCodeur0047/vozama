<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dev_controller extends CI_Controller{
	
	public function __construct() {
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		$this->load->model('dev/DEv_model','dev');
		

	}
	
	public function getParentByTitre($titre)
	{
		//var_dump($titre);
		//die;
		if ($titre == "") {
			$this->indexcmv();
		} else {
			$data['data'] = $this->dev->getParentByTitre($titre);
			$this->getSession();
			$this->load->view('dev/dev_list',$data);
			$this->load->view('theme/footer');
		}

	}

	public function savecmv()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cmv_name', 'cmv_name', 'required');
		$this->form_validation->set_rules('cmv_titre', 'cmv_titre', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('devcmv'));
		}else{
		   $this->dev->saveOrUpdateCmv();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('devcmv'));
		}
	}
	public function saveagr()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('agr_filiere', 'agr_filiere', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('devagr'));
		}else{
		   $this->dev->saveOrUpdateAgr();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('devagr'));
		}
	}


	public function printCmv()
	{
		$data['data'] = $this->dev->printcmv();
		$html = $this->load->view('dev/dev_cmv_pdf',$data,true);
		$this->pdf->createPDF($html,'listCmv',false);
	}
	public function printAp()
	{
		$data['data'] = $this->dev->printAp();
		$html = $this->load->view('dev/dev_ap_pdf',$data,true);
		$this->pdf->createPDF($html,'listCmv',false);
	}
	public function printAgr()
	{
		$data['data'] = $this->dev->printAgr();
		$html = $this->load->view('dev/dev_agr_pdf',$data,true);
		$this->pdf->createPDF($html,'listAgr',false);
	}

	public function filtrecmv()
	{
		$data['data'] = $this->dev->FilterCmv();
		$this->getSession();
		$this->load->view('dev/dev_list_cmv',$data);
		$this->load->view('theme/footer');
	}

	public function deleteCmv($id){
		$this->dev->deleteCmv($id);
		redirect(base_url('devcmv'));
	}

	public function deleteAgr($id){
		$this->dev->deleteAgr($id);
		redirect(base_url('devagr'));
	}
	public function deleteAP($id){
		$this->eleve->deleteEleve($id);
		redirect(base_url('dev'));
	}
	public function indexap(){
		
		$data['data'] = $this->dev->getDevOrSearchAp();
		$data['poste'] = $this->poste->getAllPoste();
		$this->getSession();
		$this->load->view('dev/dev_list',$data);
		$this->load->view('theme/footer');
	}
	public function indexcmv()
	{
		$data['data'] = $this->dev->getDevOrSearchcmv();
		$this->getSession();
		$this->load->view('dev/dev_list_cmv',$data);
		$this->load->view('theme/footer');
	}
	public function indexagr()
	{
		$data['parent'] = $this->poste->getAllParent();
		$data['data'] = $this->dev->getDevOrSearchAgr();
		$this->getSession();
		$this->load->view('dev/dev_list_agr',$data);
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
}
?>
