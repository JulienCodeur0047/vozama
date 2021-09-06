<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Env_controller extends CI_Controller{

	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('environnement/env_model','env');
		
		$this->load->model('Session_model','sess4');
	  }

		public function indexPep(){
			$data['data'] = $this->env->getPepOrSearchFilter();
			$data['poste'] = $this->poste->getPosteLookUp();
			$data['site'] = $this->poste->getSiteLookUp();
		
			$this->getSession();     
			$this->load->view('environnement/env_pepiniere_list',$data);
			$this->load->view('theme/footer');
		}
		public function indexEnv()
		{
			$data['env'] = $this->env->getEnvOrSearch();
			$data['site'] = $this->poste->getSiteLookUp();
			$data['commune'] = $this->poste->getCommuneLookUp();
			
			$this->getSession(); 
			$this->load->view('environnement/env_list_env',$data);
			$this->load->view('theme/footer');
		}
		public function indexAep(){
			$data['aep'] = $this->env->getAepOrSearchFilter();
			$data['poste'] = $this->poste->getPosteLookUp();
			$data['site'] = $this->poste->getSiteLookUp();
			$this->getSession();      
			$this->load->view('environnement/env_aep_list',$data);
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
		public function savepep(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('pep_espece', 'pep_espece', 'required');
	
	
			if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('errors', validation_errors());
				echo "<script>alert('Ajout Error');</script>";
				redirect(base_url('env'));
			}else{
			   $this->env->insertpep();
			   echo "<script>alert('Ajout Reussit');</script>";
			   redirect(base_url('env'));
			}
		}
		public function saveenv()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('site_id', 'site_id', 'required');
	
			if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('errors', validation_errors());
				echo "<script>alert('Ajout Error');</script>";
				redirect(base_url('envn'));
			}else{
			   $this->env->saveOrUpdateEnv();
			   echo "<script>alert('Ajout Reussit');</script>";
			   redirect(base_url('envn'));
			}
		}
		public function saveaep(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('aep_type', 'aep_type', 'required');
	
	
			if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('errors', validation_errors());
				echo "<script>alert('Ajout Error');</script>";
				redirect(base_url('envaep'));
			}else{
			   $this->env->saveOrUpdateAep();
			   echo "<script>alert('Ajout Reussit');</script>";
			   redirect(base_url('envaep'));
			}
		}
		public function updateaep(){
			$id = $this->input->post('id');
			$data = array(
				'aep_date'        	=> $this->input->post('aep_date'),
				'aep_parrain'       => $this->input->post('aep_parrain'),
				'aep_description'   => $this->input->post('aep_description'),
				'aep_poste' 		=> $this->poste->findPoste($this->input->post('poste_id'))->poste_name,
				'aep_site'			=> $this->poste->findSite($this->input->post('site_id'))->site_name,
				'poste_id' 			=> $this->input->post('poste_id'),
				'site_id' 			=> $this->input->post('site_id'),
				 
			);
			$this->env->updateaep($data, $id);
			redirect(base_url('envaep'));
		}

		public function updatepep(){
			$id = $this->input->post('id');
			$data = array(
				'pep_type'        	=> $this->input->post('pep_type'),
				'pep_libelle'        	=> $this->input->post('pep_libelle'),
				'pep_date'        	=> $this->input->post('pep_date'),
				'pep_qte'        	=> $this->input->post('pep_qte'),
				'pep_durre_porjet'        	=> $this->input->post('pep_durre_porjet'),
				'pep_description'       => $this->input->post('pep_description'),
				'pep_surface'   => $this->input->post('pep_surface'),
				'pep_poste' 		=> $this->poste->findPoste($this->input->post('poste_id'))->poste_name,
				'pep_site'			=> $this->poste->findSite($this->input->post('site_id'))->site_name,
				'poste_id' 			=> $this->input->post('poste_id'),
				'site_id' 			=> $this->input->post('site_id'),
				'pep_prix' 			=> $this->input->post('pep_prix'),
				'pep_taille' 			=> $this->input->post('pep_taille'),
				 
			);
			$this->env->updatepep($data, $id);
			redirect(base_url('env'));
		}
		public function deletePepiniere($id)
		{
			$this->env->deletePepiniere($id);
			redirect(base_url('env'));
		}
		public function deleteAep($id)
		{
			$this->env->deleteAep($id);
			redirect(base_url('envaep'));
		}

}
