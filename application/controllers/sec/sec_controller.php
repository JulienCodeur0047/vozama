<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sec_controller extends CI_Controller{
	
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		$this->load->model('com/Com_model','com');
		$this->load->model('sec/Sec_model','sec');
		

	}
    public function indexvst()
    {
		$data['data'] = $this->sec->getOrSearchVis();
        $this->getSession();
        $this->load->view('sec/sec_list_vis',$data);
		$this->load->view('theme/footer');
    }
    public function indexpass()
    {
		$data['data'] = $this->sec->getOrSearchPass();
        $this->getSession();
        $this->load->view('sec/sec_list_pass',$data);
		$this->load->view('theme/footer');
    }
    public function indexplan()
    {
        $this->getSession();
        $this->load->view('sec/sec_planning'); /// replace $this->load->view('fullcalendar');
		$this->load->view('theme/footer');
    }

	public function getSession()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
	}
	public function savevis()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('vis_name', 'vis_name', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('sec'));
		}else{
		   $this->sec->saveOrUpdateVis();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('sec'));
		}
	}
	public function savepass()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pass_name_firstname', 'pass_name_firstname', 'required');
		$this->form_validation->set_rules('pass_obejt', 'pass_obejt', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('secpass'));
		}else{
		   $this->sec->saveOrUpdatePass();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('secpass'));
		}
	}
	public function printVis()
	{
		$data['data'] = $this->sec->printVis();
		$html = $this->load->view('sec/sec_vis_pdf',$data,true);
		$this->pdf->createPDF($html,'listvisite',false);
	}
	public function deleteVis($id)
	{
		$this->sec->deleteVis($id);
		redirect(base_url('sec'));
	}
	public function deletePass($id)
	{
		$this->sec->deletePass($id);
		redirect(base_url('secpass'));
	}
	public function printPass()
	{
		$data['data'] = $this->sec->printPass();
		$html = $this->load->view('sec/sec_pass_pdf',$data,true);
		$this->pdf->createPDF($html,'listpass',false);
	}

     ///////////////////
	//// planning 
   /////////////////////
   function load()
   {
	$event_data = $this->sec->fetch_all_event();
	foreach($event_data->result_array() as $row)
	{
	 $data[] = array(
	  'id' => $row['id'],
	  'title' => $row['title'],
	  'start' => $row['start_event'],
	  'end' => $row['end_event']
	 );
	}
	echo json_encode($data);
   }
  
   function insert()
   {
	if($this->input->post('title'))
	{
	 $data = array(
	  'title'  => $this->input->post('title'),
	  'start_event'=> $this->input->post('start'),
	  'end_event' => $this->input->post('end')
	 );
	 $this->sec->insert_event($data);
	}
   }
  
   function update()
   {
	if($this->input->post('id'))
	{
	 $data = array(
	  'title'   => $this->input->post('title'),
	  'start_event' => $this->input->post('start'),
	  'end_event'  => $this->input->post('end')
	 );
  
	 $this->sec->update_event($data, $this->input->post('id'));
	}
   }
  
   function delete()
   {
	if($this->input->post('id'))
	{
	 $this->sec->delete_event($this->input->post('id'));
	}
   }
}