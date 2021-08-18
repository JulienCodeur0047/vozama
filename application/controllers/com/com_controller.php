<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Com_controller extends CI_Controller{
	
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		$this->load->model('com/Com_model','com');
		

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
	public function indexparr()
	{
		$data['data'] = $this->poste->getPostOrSearch();
		$this->getSession();
		$this->load->view('com/com_list_parr',$data);
		$this->load->view('theme/footer');
	}
	public function indexpart()
	{
		$data['data'] = $this->poste->getPostOrSearch();
		$this->getSession();
		$this->load->view('com/com_list_partenair',$data);
		$this->load->view('theme/footer');
	}
	public function indexres()
	{
		$data['data'] = $this->com->getResOrSearch();
		$this->getSession();
		$this->load->view('com/com_list_res',$data);
		$this->load->view('theme/footer');
	}
	public function deleteres($id)
	{
		$this->com->deleteRes($id);
		redirect(base_url('comres'));
	}
	public function saveres()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('socn_titre', 'socn_titre', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('comres'));
		}else{
		   $this->com->saveOrUpdateRes();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('comres'));
		}
	}
	public function saveparr()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('poste_parrain', 'poste_parrain', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('com'));
		}else{
		   $this->com->saveParr();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('com'));
		}
	}
	public function savepart()
	{
		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('poste_partenair_type', 'poste_partenair_type', 'required');

		/*if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('compart'));
		}else{*/
		   $this->com->savePart();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('compart'));
		//}
	}
	public function printParr()
	{
		$data['data'] = $this->com->printParr();
		$html = $this->load->view('com/com_parr_pdf',$data,true);
		$this->pdf->createPDF($html,'listPosteParrain',false);
	}
	public function printPart()
	{
		$data['data'] = $this->com->printPart();
		$html = $this->load->view('com/com_part_pdf',$data,true);
		$this->pdf->createPDF($html,'listPostePartenaire',false);
	}
	public function printRes()
	{
		$data['data'] = $this->com->printRes();
		$html = $this->load->view('com/com_res_pdf',$data,true);
		$this->pdf->createPDF($html,'listcom',false);
	}
}
?>
