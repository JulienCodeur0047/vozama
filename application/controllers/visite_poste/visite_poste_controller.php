<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visite_poste_controller extends CI_Controller{

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	*/
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		$this->load->model('visite_poste/Visite_poste_model','vp');

	}

	public function index(){
		$data['data'] = $this->vp->getVpOrSearch();
		$data['poste'] = $this->poste->getPostOrSearch();
		$data['moniteur'] = $this->poste->getMoniteurLookUp();
		$data['inspecteur'] = $this->poste->getInspecteurLookUp();
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);       
		$this->load->view('visite_poste/vp_list',$data);
		$this->load->view('theme/footer');
	}
	public function printlistvp()
	{
		$data['data'] = $this->vp->getVpOrSearch();
		$html = $this->load->view('visite_poste/vp_pdf',$data,true);
		$this->pdf->createPDF($html,'listVp',false);
	}

	public function save(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('poste_id', 'poste_id', 'required');
		$this->form_validation->set_rules('vp_date', 'vp_date', 'required');
		$this->form_validation->set_rules('vp_heure', 'vp_heure', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('vp'));
		}else{
		   $this->vp->insertVp();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('vp'));
		}
	}

	public function show($id){
		$data['vp'] = $this->vp->getVpById($id);
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);
		$this->load->view('visite_poste/vp_detail',$data);
		$this->load->view('theme/footer');

	}

	public function edit($id){
		$data['vp'] = $this->vp->getVpById($id);
		$data['poste'] = $this->poste->getPostOrSearch();
		$data['moniteur'] = $this->poste->getMoniteurLookUp();
		$data['inspecteur'] = $this->poste->getInspecteurLookUp();

		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);     
		$this->load->view('visite_poste/vp_edit',$data);
		$this->load->view('theme/footer');
	}
	public function update($id){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('poste_id', 'poste_id', 'required');
		$this->form_validation->set_rules('vp_date', 'vp_date', 'required');
		$this->form_validation->set_rules('vp_heure', 'vp_heure', 'required');

		//var_dump($this->form_validation->run());
		//die;
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('vp'));
		}else{
		   $this->vp->update($id);
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('vp'));
		}
	}

	public function delete($id){
		$this->vp->deleteVp($id);
		redirect(base_url('vp'));
	}
}
