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
    public function getTouristResOrSearch()
		{
			if(!empty($this->input->get("search"))){
				$this->db->like('	tour_name', $this->input->get("search"));
				$this->db->or_like('tour_firstname', $this->input->get("search"));
				$this->db->or_like('tour_nationalite', $this->input->get("search"));
				}
        if(!empty($this->input->post("tour_nationalite"))){
          $this->db->where('tour_nationalite', $this->input->post("tour_nationalite"));
        }
			$query = $this->db->get("touriste");
		  return $query->result();
		}
    public function getVsTourOrSearch()
		{
			if(!empty($this->input->get("search"))){
				$this->db->like('vs_site', $this->input->get("search"));
				}
        if(!empty($this->input->post("vs_site"))){
          $this->db->where('vs_site', $this->input->post("vs_site"));
        }
			$query = $this->db->get("viste_site");
		  return $query->result();
		}
    public function saveOrUpdateVs()
    {
      $id = $this->input->post('id');

      $nbrjour = $this->input->post('vs_nbr_jr');
      $nbrdmjour = $this->input->post('vs_dem_jr');
      $prixjour = $this->input->post('vs_prix_jour');
      $prixdemjour = $this->input->post('vs_prix_demi_jr');
      $prixav = $this->input->post('vs_prix_a_voiture');
      $prixsv = $this->input->post('vs_prix_s_voiture');

      $prixt = $prixav + $prixdemjour + $prixjour + $prixsv;
      $total = $prixt*$nbrjour + $prixt*$nbrdmjour;

      $data = array(
        'vs_prix_jour' => $prixjour ,
        'vs_prix_demi_jr' => $prixdemjour,
        'vs_prix_a_voiture' => $prixav,
        'vs_prix_s_voiture' =>$prixsv ,
        'vs_prix_total' => $total,
        'site_id' => $this->input->post('site_id'),
        'vs_site' => $this->input->post('vs_site'),
        'vs_nbr_jr' => $nbrjour,
        'vs_dem_jr' => $nbrjour,
        'vs_date' => $this->input->post('vs_date'),
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('viste_site',$data);
      }else{
        return $this->db->insert('viste_site', $data);
      }
    }
    public function deleteVs($id)
    {
      return $this->db->delete('viste_site', array('id' => $id));
    }
    public function saveOrUpdateTrst()
    {
      $id = $this->input->post('id');
      $data = array(
        'tour_name' => $this->input->post('tour_name'),
        'tour_firstname' => $this->input->post('tour_firstname'),
        'tour_date_birth' => $this->input->post('tour_date_birth'),
        'tour_nationalite' => $this->input->post('tour_nationalite'),
        'tour_lieu_nais' => $this->input->post('tour_lieu_nais'),
        'tour_email' => $this->input->post('tour_email'),
        'tour_tel' => $this->input->post('tour_tel'),
        'tour_newsletter' => $this->input->post('tour_newsletter'),
        'tour_gazette' => $this->input->post('tour_gazette'),
        'tour_address' => $this->input->post('tour_address'),
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('touriste',$data);
      }else{
        return $this->db->insert('touriste', $data);
      }
    }
    public function deleteTrst($id)
    {
      return $this->db->delete('touriste', array('id' => $id));
    }
    public function saveReserv()
    {
      $idchmbr = $this->input->post('idchmbr');
      //calcule
      $prixnuit = $this->input->post('chr_prix_nuite');
      $prixhr = $this->input->post('chr_prix_nuite');
      $nbrjour = $this->input->post('res_nbr_jr');
      $nbrhr = $this->input->post('res_nbr_hr');
      $prixrepas = $this->input->post('res_repa_prix_total');

      $rest = 0; $avc = $this->input->post('res_paye_avc');
      
      $total = $prixnuit*$nbrjour + $prixhr*$nbrhr + $prixrepas*$nbrjour;

      if (!empty($avc)) {
        $rest = $total - $avc;
      }
      //
      $idres = $this->input->post('');
      $data = array(
        'chambre_id' => $idchmbr,
        'res_chr_num' => $this->input->post('chr_numero'),
        'res_cli_nom' => $this->input->post('res_cli_nom'),
        'res_cli_tel' => $this->input->post('res_cli_tel'),
        'res_cli_nbr' => $this->input->post('res_cli_nbr'),
        'res_nbr_jr' => $nbrjour,
        'res_nbr_hr' => $nbrhr,
        'res_repa_prix_total' => $prixrepas,
        'res_paye_avc' => $avc,
        'res_paye_reste' => $rest,
        'res_paye_total' => $total,
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
    public function printReserv()
    {
      $query = $this->db->get("reservation");
      return $query->result();
    }
    public function printTrst()
    {
      $nat = $this->input->post("tour_nationalite");
      if(!empty($nat)){
        $this->db->where('tour_nationalite', $nat);
      }
      $query = $this->db->get("touriste");
      return $query->result();
    }
    public function printVs()
    {
      $site = $this->input->post("vs_site");
      if(!empty($site)){
        $this->db->where('vs_site', $site);
      }
      $query = $this->db->get("viste_site");
      return $query->result();
    }
}
?>
