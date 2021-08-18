<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_controller extends CI_Controller{
	
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		$this->load->model('com/Com_model','com');
		$this->load->model('tour/Tour_model','tour');
		$this->load->model('Session_model','sess4');
		

	}
    public function indexHtl()
    {
		$data['chmbre'] = $this->tour->getChmbreNotres();
        $data['data'] = $this->tour->getChambreResOrSearch();
		$this->getSession();  
		$this->load->view('tour/tour_list_hotel',$data);
		$this->load->view('theme/footer');
    }
    public function indexTouriste()
    {
		$data['data'] = $this->tour->getTouristResOrSearch();
		$this->getSession();  
		$this->load->view('tour/tour_list_tourist',$data);
		$this->load->view('theme/footer');
    }

    public function indexVsv()
    {
		$data['site'] = $this->poste->getSiteLookUp();
		$data['data'] = $this->tour->getVsTourOrSearch();
        $this->getSession();  
		$this->load->view('tour/tour_list_vs',$data);
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
	public function saveReserv()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('res_cli_nom', 'res_cli_nom', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('tour'));
		}else{
		   $this->tour->saveReserv();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('tour'));
		}
	}
	public function saveTrst()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tour_name', 'tour_name', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('tourtrst'));
		}else{
		   $this->tour->saveOrUpdateTrst();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('tourtrst'));
		}
	}
	public function savevs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('vs_nbr_jr', 'vs_nbr_jr', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('tourvs'));
		}else{
		   $this->tour->saveOrUpdateVs();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('tourvs'));
		}
	}
	public function deleteTrst($id)
	{
		$this->tour->deleteTrst($id);
		redirect(base_url('tourtrst'));
	}
	public function deleteVs($id)
	{
		$this->tour->deleteVs($id);
		redirect(base_url('tourvs'));
	}
	public function deletereserv($id,$idchmbr)
	{
		$this->tour->deleteReserv($id,$idchmbr);
		redirect(base_url('tour'));
	}

	public function printReserv()
	{
		$data['data'] = $this->tour->printReserv();
		$html = $this->load->view('tour/tour_resrv_pdf',$data,true);
		$this->pdf->createPDF($html,'listreserv',false);
	}
	public function printTrst()
	{
		$data['data'] = $this->tour->printTrst();
		$html = $this->load->view('tour/tour_trst_pdf',$data,true);
		$this->pdf->createPDF($html,'listreserv',false);
	}

	

	public function printVs()
	{
		$data['data'] = $this->tour->printVs();
		$html = $this->load->view('tour/tour_vs_pdf',$data,true);
		$this->pdf->createPDF($html,'listvs',false);
	}
}
?>
