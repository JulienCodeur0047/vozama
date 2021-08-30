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
		//TYPE
		public function getChmbreNResTypeS()
		{
			$this->db->where('chr_reserve','non');
			$this->db->where('chr_type','Simple');
			$query = $this->db->get("chambre");
			return $query->result();
		}
		public function getChmbreNResTypeD()
		{
			$this->db->where('chr_reserve','non');
			$this->db->where('chr_type','Double');
			$query = $this->db->get("chambre");
			return $query->result();
		}
		public function getChmbreNResTypeF()
		{
			$this->db->where('chr_reserve','non');
			$this->db->where('chr_type','Familial');
			$query = $this->db->get("chambre");
			return $query->result();
		}
		public function getChmbreNResTypeDo()
		{
			$this->db->where('chr_reserve','non');
			$this->db->where('chr_type','Dortoir');
			$query = $this->db->get("chambre");
			return $query->result();
		}
		//TYPE
		public function getChmbreOrSearch()
		{
			if(!empty($this->input->get("search"))){
				$this->db->like('chr_type', $this->input->get("search"));
				$this->db->or_like('chr_numero', $this->input->get("search"));
				$this->db->or_like('chr_prix_nuite', $this->input->get("search"));
				}
			$query = $this->db->get("chambre");
			return $query->result();
		}
		public function getChambreResOrSearch()
		{
			if(!empty($this->input->get("search"))){
				$this->db->like('res_chr_num', $this->input->get("search"));
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
		public function saveOrUpdateChmbre()
		{
			$id = $this->input->post('id');
			$data = array(
				'chr_numero' => $this->input->post('chr_numero'),
				'chr_type' => $this->input->post('chr_type'),
				'chr_prix_nuite' => $this->input->post('chr_prix_nuite'),
			);
			if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('chambre',$data);
      }else{
        return $this->db->insert('chambre', $data);
      }
		}
		public function deleteChmbre($id)
		{
			return $this->db->delete('chambre', array('id' => $id));
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
	  $idres = $this->input->post('id');
      $idchmbr = $this->input->post('chambre_id');

	  $Chmbre = $this->findChmbre($idchmbr);
      //calcule
      $chr_prix = $Chmbre->chr_prix_nuite;
      $chr_nbr_jr = $this->input->post('res_nbr_jr');
	  
	  $vs = $this->input->post('res_visitesite');
	  if ($vs == "OUI") {
		$vs_prix = $this->input->post('res_visitesite_prix');
	  }else{
		$vs_prix = 0;
		$vs = "NON";
	  }

			if ($chr_nbr_jr > 0) {
				$montantTChr = $chr_prix*$chr_nbr_jr;
			} else {
				$montantTChr = 0;
				$chr_prix = 0;
				$chr_nbr_jr = 0;
			}

			$repas = $this->input->post('res_repas');
			$repas_type = $this->input->post('res_repas_type');
			$repas_prix = $this->input->post('res_repas_prix');
			$repas_nbr =  $this->input->post('res_repas_nbr');

			if ($repas == "OUI") {
				$montantRepas = $repas_nbr*$repas_prix;
			}else {
				$repas = "NON";
				$montantRepas = 0;
				$repas_type = "";
				$repas_prix = 0;
				$repas_nbr = 0;
				
			}

			$ptid = $this->input->post('res_ptid');
			$ptid_prix = $this->input->post('res_ptid_prix');
			$ptid_nbr = $this->input->post('res_ptid_nbr');

			if ($ptid == "OUI") {
				$montantPtid = $ptid_nbr*$ptid_prix;
			}else {
				$ptid = "NON";
				$ptid_prix = 0;
				$ptid_nbr = 0;
				$montantPtid = 0;
			}

			$lit= $this->input->post('res_lit_sup');
			$lit_prix = $this->input->post('res_lit_sup_prix');
			$lit_nbr = $this->input->post('res_lit_sup_nbr');
			if ($lit == "OUI") {
				$montantLitSup = $lit_nbr*$lit_prix;
			}else {
				$montantLitSup = 0;
				$lit_prix = 0;
				$lit_nbr = 0;
			}

			$montantTotalRes = $montantTChr + $montantRepas + $montantPtid + $montantLitSup + $vs_prix;

      $data = array(
        'chambre_id' => $idchmbr,
        //cli
        'res_cli_nom' => $this->input->post('res_cli_nom'),
        'res_cli_tel' => $this->input->post('res_cli_tel'),
        'res_cli_email' => $this->input->post('res_cli_email'),
        'res_cli_nbr' => $this->input->post('res_cli_nbr'),
				//chr
				'res_chr_num' => $Chmbre->chr_numero,
				'res_chr_type' => $Chmbre->chr_type,
				'res_chr_prix' => $Chmbre->chr_prix_nuite,
				'res_chr_prix_total' => $montantTChr,
				'res_nbr_jr' => $chr_nbr_jr,
				//repas
				'res_repas' => $repas,
				'res_repas_type' => $repas_type,
				'res_repas_prix' => $repas_prix,
				'res_repas_nbr' => $repas_nbr,
				'res_repas_prix_total' => $montantRepas,
				//ptid
				'res_ptid' => $ptid,
				'res_ptid_prix' => $ptid_prix,
				'res_ptid_nbr' => $ptid_nbr,
				'res_ptid_prix_total' => $montantPtid,
				//T
				'res_montant' => $montantTotalRes,

				//Lit
				'res_lit_sup' => $lit,
				'res_lit_sup_prix' => $lit_prix,
				'res_lit_sup_nbr' => $lit_nbr,
				'res_lit_sup_prix_total' => $montantLitSup,
				
				'res_note' => $this->input->post('res_note'), 
				'res_visitesite' => $this->input->post('res_visitesite'), 
				'res_visitesite_prix' => $this->input->post('res_visitesite_prix'), 

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
	public function findChmbre($id){
		return $this->db->get_where('chambre', array('id' => $id))->row();
	}
	public function findResa($id){
		return $this->db->get_where('reservation', array('id' => $id))->row();
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
		public function printChmbr()
		{
			$query = $this->db->get("chambre");
      return $query->result();
		}
	public function printInResa($id)
	{
		return $this->findResa($id);
	}
}
?>
