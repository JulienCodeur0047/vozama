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
		$this->load->model('Session_model','sess4');
	}

	public function index(){
		$data['data'] = $this->poste->getPostOrSearch();
		$data['secteur'] = $this->poste->getSecteurLookUp();
		$data['site'] = $this->poste->getSiteLookUp();
		
		$this->getSession();        
		$this->load->view('poste/poste_list',$data);
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
	public function delete($id){
		$this->poste->deletePoste($id);
		redirect(base_url('alph'));
	}
	public function deleteeleve($id){
		$this->poste->deleteEleve($id);
		redirect(base_url('el'));
	}
	
	public function printListPosteToPdf()
	{
		$this->load->library('pdf');
		$data['data'] = $this->poste->getPostOrSearch();
		$html = $this->load->view('poste/poste_pdf',$data,true);
		$this->pdf->createPDF($html,'listPoste',false);
	}
	public function printListPosteToPdfU()
	{
		$this->load->library('pdf');
		$data['data'] = $this->poste->printGetPoste();
		$html = $this->load->view('poste/poste_pdf_u',$data,true);
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
		
		$this->getSession();  
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

		
		$this->getSession();  
		$this->load->view('poste/poste_edit',$data);
		$this->load->view('theme/footer');

	}

	public function showDetail($id){
		$data['poste'] = $this->poste->findPoste($id);
		$data['eleve'] = $this->eleve->getEleveByPoste($id);
		$data['eleveInfo'] = $this->eleve->getEleveById($id);
		$data['eleveCount'] = $this->eleve->getEleveCountByPoste($id);

		$this->getSession();  
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
	public function saveEglise()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('eglise_name', 'eglise_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveEglise();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveSecteur()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('secteur_name', 'secteur_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveSecteur();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveZone()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('zone_name', 'zone_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveZone();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveRegion()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('region_name', 'region_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveRegion();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveCisco()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cisco_name', 'cisco_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveCisco();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveCommune()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('commune_name', 'commune_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveCommune();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveNiveau()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('niveau_name', 'niveau_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveNiveau();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveFkt()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fkt_name', 'fkt_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveFkt();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveDistrict()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('district_name', 'district_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveDistrict();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function savePref()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('sous_pref_name', 'sous_pref_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->savePref();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveMoniteur()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('moniteur_name', 'moniteur_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveMoniteur();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function saveInspecteur()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('insp_name', 'insp_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->saveInspecteur();
		   redirect(base_url('createposte'),'refresh');
		}
	}
	public function savePere()
	{ 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pere_name', 'pere_name', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('createposte'));
		}else{
		   $this->poste->savePere();
		   redirect(base_url('createposte'),'refresh');
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
