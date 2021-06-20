<?php
class Dev_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }
	  public function getAllComSearch()
	  {
		  # code...
	  }
	  public function getComById($id)
	  {
		  # code...
	  }
	  public function insertCom()
	  {
		  # code...
	  }
}
?>