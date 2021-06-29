<?php
class Tour_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }
    public function saveorupdatereserv()
    {
        
    }
		public function getChmbreNotres()
		{
			$this->db->where('chr_reserve','non');
			$query = $this->db->get("chambre");
			return $query->result();
		}
		public function getChambreOrSearch()
		{
			if(!empty($this->input->get("search"))){
				$this->db->like('	res_chr_num', $this->input->get("search"));
				$this->db->or_like('res_cli_nom', $this->input->get("search"));
				$this->db->or_like('res_cli_tel', $this->input->get("search"));
				}
			$query = $this->db->get("reservation");
		  return $query->result();
		}
}
?>
