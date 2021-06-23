<?php
class Site_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	  
		
	  }

	  public function findSiteById($id)
	  {
		return $this->db->get_where('site', array('id' => $id))->row();
	  }

	  
	  public function findParentById($id)
	  {
		return $this->db->get_where('parent', array('id' => $id))->row();
	  }
}
