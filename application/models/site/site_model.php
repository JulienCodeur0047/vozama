<?php
class Site_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	  
		
	  }

	  public function findSiteById($id)
	  {
		return $this->db->get_where('site', array('id' => $id))->row();
	  }

}
