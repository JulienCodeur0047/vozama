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
		public function getChambreResOrSearch()
		{
			if(!empty($this->input->get("search"))){
				$this->db->like('	res_chr_num', $this->input->get("search"));
				$this->db->or_like('res_cli_nom', $this->input->get("search"));
				$this->db->or_like('res_cli_tel', $this->input->get("search"));
				}
			$query = $this->db->get("reservation");
		  return $query->result();
		}
    public function saveReserv()
    {
      $idchmbr = $this->input->post('idchmbr');
      $idres = $this->input->post('');
      $data = array(
        'chambre_id' => $idchmbr,
        'res_chr_num' => $this->input->post('chr_numero'),
        'res_cli_nom' => $this->input->post('res_cli_nom'),
        'res_cli_tel' => $this->input->post('res_cli_tel'),
        'res_cli_nbr' => $this->input->post('res_cli_nbr'),
        'res_nbr_jr' => $this->input->post('res_nbr_jr'),
        'res_nbr_hr' => $this->input->post('res_nbr_hr'),
        'res_repa_complet' => $this->input->post('res_repa_complet'),
        'res_paye_avc' => $this->input->post('res_paye_avc'),
        'res_paye_reste' => $this->input->post('res_paye_reste'),
        'res_paye_total' => $this->input->post('res_paye_total'),
        'res_date' => date('y-m-d h:i:s'),
        );
        if(!empty($idchmbr)){
          $this->updateChmbr($idchmbr,'oui');
        }
        if(!empty($idres))
        {
          $this->db->where('id',$idres);
          return $this->db->update('reservation', $data);
        } else {
          return $this->db->insert('reservation', $data);
        }
    }
    public function updateChmbr($id,$str)
    {
      $data = array(
        'chr_reserve' => $str,
        );
      $this->db->where('id',$id);
          return $this->db->update('chambre',$data);
    }
    public function deleteReserv($id,$idchmbr)
    {
      $this->updateChmbr($idchmbr,'non');
      return $this->db->delete('reservation', array('id' => $id));
    }
}
?>
