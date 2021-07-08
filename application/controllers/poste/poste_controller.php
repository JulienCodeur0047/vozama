<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poste_controller extends CI_Controller{

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	*/
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}

	public function index(){
		$data['data'] = $this->poste->getPostOrSearch();
		$data['secteur'] = $this->poste->getSecteurLookUp();
		$data['site'] = $this->poste->getSiteLookUp();
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);       
		$this->load->view('poste/poste_list',$data);
		$this->load->view('theme/footer');
	}

	public function delete($id){
		$this->poste->deletePoste($id);
		redirect(base_url('alph'));
	}

	public function printListPosteToPdf()
	{
		$this->load->library('pdf');
		$data['data'] = $this->poste->getPostOrSearch();
		$html = $this->load->view('poste/poste_pdf',$data,true);
		$this->pdf->createPDF($html,'listPoste',false);
	}

	public function create(){
		$data['secteur'] = $this->poste->getSecteurLookUp();
		$data['region'] = $this->poste->getRegionLookUp();
		$data['cisco'] = $this->poste->getCiscoLookUp();
		$data['commune'] = $this->poste->getCommuneLookUp();
		$data['niveau'] = $this->poste->getNiveauLookUp();
		$data['fokotany'] = $this->poste->getFokotanyLookUp();
		$data['quartier'] = $this->poste->getQuartierLookUp();
		$data['district'] = $this->poste->getDistrictLookUp();
		$data['eglise'] = $this->poste->getEgliseLookUp();
		$data['pere'] = $this->poste->getPereLookUp();
		$data['sous_pref'] = $this->poste->getSousPrefLookUp();
		$data['zone'] = $this->poste->getZoneLookUp();
		$data['moniteur'] = $this->poste->getMoniteurLookUp();
		$data['inspecteur'] = $this->poste->getInspecteurLookUp();
		$session['session'] = $this->session;
		
		

		$this->load->view('theme/header',$session);
		$this->load->view('poste/poste_create',$data);
		$this->load->view('theme/footer');
	}

	public function edit($id){
		$data['secteur'] = $this->poste->getSecteurLookUp();
		$data['region'] = $this->poste->getRegionLookUp();
		$data['cisco'] = $this->poste->getCiscoLookUp();
		$data['commune'] = $this->poste->getCommuneLookUp();
		$data['niveau'] = $this->poste->getNiveauLookUp();
		$data['fokotany'] = $this->poste->getFokotanyLookUp();
		$data['quartier'] = $this->poste->getQuartierLookUp();
		$data['district'] = $this->poste->getDistrictLookUp();
		$data['eglise'] = $this->poste->getEgliseLookUp();
		$data['pere'] = $this->poste->getPereLookUp();
		$data['sous_pref'] = $this->poste->getSousPrefLookUp();
		$data['zone'] = $this->poste->getZoneLookUp();
		$data['moniteur'] = $this->poste->getMoniteurLookUp();
		$data['inspecteur'] = $this->poste->getInspecteurLookUp();
		$data['poste'] = $this->poste->findPoste($id);

		$session['session'] = $this->session;
		//$poste = $this->poste->findPoste($id);

		$this->load->view('theme/header',$session);
		$this->load->view('poste/poste_edit',$data);
		$this->load->view('theme/footer');

	}

	public function showDetail($id){
		$data['poste'] = $this->poste->findPoste($id);
		$data['eleve'] = $this->eleve->getEleveByPoste($id);
		$data['eleveInfo'] = $this->eleve->getEleveById($id);
		$data['eleveCount'] = $this->eleve->getEleveCountByPoste($id);
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);
		$this->load->view('poste/poste_detail',$data);
		$this->load->view('theme/footer');
	}
	public function save(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('poste_name', 'poste_name', 'required');
		$this->form_validation->set_rules('poste_num', 'poste_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->insertPoste();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('alph'));
		}
	}

	public function update($id){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('poste_name', 'poste_name', 'required');
		$this->form_validation->set_rules('poste_num', 'poste_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('editeditPoste'.$id));
		}else{
		   $this->poste->updatePoste($id);
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('alph'));
		}
	}
}
?>
