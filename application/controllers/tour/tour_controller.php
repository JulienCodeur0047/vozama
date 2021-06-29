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
		

	}
    public function indexHtl()
    {
		$data['data'] = $this->tour->getChmbreNotres();
        $data['data'] = $this->tour->getChambreOrSearch();
		$this->getSession();
		$this->load->view('tour/tour_list_hotel',$data);
		$this->load->view('theme/footer');
    }
    public function indexTouriste()
    {
        $this->getSession();
		$this->load->view('tour/tour_list_tourist');
		$this->load->view('theme/footer');
    }

    public function indexTouristLog()
    {
        $this->getSession();
		$this->load->view('tour/tour_list_log');
		$this->load->view('theme/footer');
    }
    public function indexVsv()
    {
        $this->getSession();
		$this->load->view('tour/tour_list_vs');
		$this->load->view('theme/footer');
    }
    public function getSession()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
	}
}
?>
