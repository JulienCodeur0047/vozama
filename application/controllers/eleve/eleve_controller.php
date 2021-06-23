<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eleve_controller extends CI_Controller{
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		
		

	}
	
	public function index(){
		//$data['data'] = $this->eleve->getEleveOrSearchFilter();
		$data['poste'] = $this->poste->getAllPoste();
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);      
		$this->load->view('eleve/eleve_list',$data);
		$this->load->view('theme/footer');
	}

	public function printlistel(){
		$data['data'] = $this->eleve->getEleveOrSearchFilter();
		$html = $this->load->view('eleve/eleve_pdf',$data,true);
		$this->pdf->createPDF($html,'listEleve',false);
	}
	public function insertEleve($poste_id){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('eleve_name', 'eleve_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			//redirect(base_url('createposte'));
		}else{
		   $this->eleve->insertEleve();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('showPoste'.$poste_id));
		}
	}

	public function insertAll(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('eleve_name', 'eleve_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('el'));
		}else{
		   $this->eleve->insertEleveAll();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('el'));
		}
	}

	public function deleteElevePoste($id,$poste_id){
		$this->eleve->deleteEleve($id);
		redirect(base_url('showPoste'.$poste_id));
	}
	public function showEleveDetail($id){
		$data['eleveInfo'] = $this->eleve->getEleveById($id);
		$this->load->view('poste/modal_detail_eleve',$data);
	}
}
?>
