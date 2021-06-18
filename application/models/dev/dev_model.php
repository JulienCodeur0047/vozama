<?php
class Dev_model extends CI_Model{


	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
	  }

	  public function getDevOrSearchAp()
	  {
		  # code...
	  }

	  public function getDevApByPost($idPoste)
	  {
		  # code...
	  }
	  public function getDevApByDate($date)
	  {
		  # code...
	  }
	  public function getDevApById($id)
	  {
		  # code...
	  }
	  public function getCmOrSearchAp()
	  {
		  # code...
	  }
	  public function getDevCmByTitre($titre)
	  {
		  # code...
	  }

	  public function getDevCmById($id)
	  {
		  # code...
	  }
	  public function delCm($id)
	  {
		  # code...
	  }
	  public function delAp($id)
	  {
		  # code...
	  }
}
?>
