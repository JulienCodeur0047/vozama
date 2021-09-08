<?php
class Entre_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }

	  public function getDepOrSearch()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('dep_name', $this->input->get("search"));
			$this->db->or_like('dep_number', $this->input->get("search")); 
			$this->db->or_like('dep_type', $this->input->get("search")); 
		  }
		  $query = $this->db->get("department");
		  return $query->result();
	  }
    public function getConOrSearch()
	  {
			$dep = $this->input->post("dep_id");
			if(!empty($this->input->get("search"))){
				$this->db->like('conge_pers', $this->input->get("search"));
				$this->db->or_like('conge_motif', $this->input->get("search")); 
				}
			if(!empty($dep)){
        $this->db->where('dep_id', $dep);
      }
		  $query = $this->db->get("conge");
		  return $query->result();
	  }
		public function getBienOrSearch()
	  {
			$dep = $this->input->post("dep_id");
			$type = $this->input->post("bien_type");

			if(!empty($this->input->get("search"))){
				$this->db->like('bien_name', $this->input->get("search"));
				$this->db->or_like('bien_resp', $this->input->get("search")); 
				$this->db->or_like('bien_type', $this->input->get("search")); 
				$this->db->or_like('bien_dep', $this->input->get("search")); 
				$this->db->or_like('bien_mat', $this->input->get("search")); 
				}
				if(!empty($dep)){
					$this->db->where('dep_id', $dep);
				}
				if(!empty($type)){
					$this->db->where('bien_type', $type);
				}
		  $query = $this->db->get("bien");
		  return $query->result();
	  }
		public function getOrSearchStkProduit()
		{
			$type = $this->input->post('stk_type');
			$dated = $this->input->post('dated');
			$datef = $this->input->post('datef');

			if (!empty($this->input->get("searchp"))) {
				$this->db->like('stk_designation', $this->input->get("searchp"));
				$this->db->or_like('stk_type', $this->input->get("searchp")); 
				$this->db->or_like('stk_date', $this->input->get("searchp")); 
				$this->db->or_like('stk_fournisseur', $this->input->get("searchp")); 
			}
			if (!empty($type)) {
				$this->db->where('stk_type', $type);
			}
			if (!empty($dated)&&!empty($datef)) {
				$this->db->where('stk_date >=', $dated);
				$this->db->where('stk_date <=', $datef);
			}
			$query = $this->db->get("stk");
		  return $query->result();
		}
		public function getOrSearchStkMvt()
		{
			$etat = $this->input->post('mvt_etat');
			$dated = $this->input->post('dated');
			$datef = $this->input->post('datef');

			if (!empty($this->input->get("searchm"))) {
				$this->db->like('mvt_destination', $this->input->get("searchm"));
				$this->db->or_like('mvt_etat', $this->input->get("searchm")); 
				$this->db->or_like('mvt_stk_designation', $this->input->get("searchm")); 
				$this->db->or_like('stk_id', $this->input->get("searchm")); 
			}
			if (!empty($etat)) {
				$this->db->where('mvt_etat', $etat);
			}
			if (!empty($dated)&&!empty($datef)) {
				$this->db->where('mvt_date >=', $dated);
				$this->db->where('mvt_date <=', $datef);
			}
			$query = $this->db->get("stk_mvt");
		  return $query->result();
		}

		public function getPersOrSearch()
	  {
      $type = $this->input->post("pers_type");
      $dep = $this->input->post("pers_dep");
      $contrat = $this->input->post("pers_contrat");
		if(!empty($this->input->get("search"))){
			$this->db->like('pers_name', $this->input->get("search"));
			$this->db->or_like('pers_firstname', $this->input->get("search"));
			$this->db->or_like('pers_type', $this->input->get("search")); 
			$this->db->or_like('pers_contrat', $this->input->get("search")); 
			$this->db->or_like('pers_dep', $this->input->get("search")); 
			$this->db->or_like('pers_cot_social', $this->input->get("search")); 
		  }
      if(!empty($dep)){
        $this->db->where('pers_dep', $dep);
      }
      if(!empty($type)){
        $this->db->where('pers_type', $type);
      }
      if(!empty($contrat)){
        $this->db->where('pers_contrat', $contrat);
      }
		  $query = $this->db->get("personal");
		  return $query->result();
	  }
		public function insetStk()
		{
			$datastk = array(
        'stk_designation' => $this->input->post('stk_designation'),
        'stk_qte' => $this->input->post('stk_qte'),
        'stk_unit' => $this->input->post('stk_unit'),
        'stk_type' => $this->input->post('stk_type'),
        'stk_date' => $this->input->post('stk_date'),
        'stk_fournisseur' => $this->input->post('stk_fournisseur'),
        );
				$this->db->insert('stk', $datastk);
				$idstk = 	$this->db->insert_id();

				$datamvt = array(
					'mvt_date' => $this->input->post('stk_date'),
					'mvt_fournisseur' => $this->input->post('stk_fournisseur'),
					'mvt_qte' => $this->input->post('stk_qte'),
					'mvt_unit' => $this->input->post('stk_unit'),
					'mvt_etat' => "Entrée",
					'mvt_reste' => $this->input->post('stk_qte'),
					'stk_id' => $idstk,
					'mvt_stk_designation' => $this->input->post('stk_designation'),
					);
					$this->addMvt($datamvt);
		}
		public function outsetStk()
		{
			$idstk = $this->input->post('id');
			$qteOut = $this->input->post('mvt_qte');
			$qteStk = $this->getStkById($idstk)->stk_qte;
			if ($qteOut<=$qteStk) {
				$rest = $this->getStkById($idstk)->stk_qte - $qteOut;
				$datamvt = array(
					'mvt_date' => $this->input->post('mvt_date'),
					'mvt_destination' => $this->input->post('mvt_destination'),
					'mvt_qte' => $qteOut,
					'mvt_unit' => $this->getStkById($idstk)->stk_unit,
					'mvt_etat' => "Sortie",
					'mvt_reste' => $rest,
					'stk_id' => $idstk,
					'mvt_stk_designation' => $this->getStkById($idstk)->stk_designation,
					);
					$datastk = array(
						'stk_qte' => $rest,
						);
					$this->addMvt($datamvt);
					$this->db->where('id',$idstk);
        	$this->db->update('stk',$datastk);
			}
			else {
				return "E";
			}
		}
		public function addMvt($data)
		{
			if (!empty($data)){
				return $this->db->insert('stk_mvt', $data);
			}
		}
		public function getStkById($id){
			return $this->db->get_where('stk', array('id' => $id))->row();
		}
	public function saveOrUpdateDep()
    {
      $id = $this->input->post('id');
      $data = array(
        'dep_name' => $this->input->post('dep_name'),
        'dep_number' => $this->input->post('dep_number'),
        'dep_type' => $this->input->post('dep_type'),
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('department',$data);
      }else{
        return $this->db->insert('department', $data);
      }
    }
		public function getLookUpTypePers()
		{
			$query = $this->db->get("personal_type");
		  return $query->result();
		}
		public function saveOrUpdatePers()
    {
      $id = $this->input->post('id');
			$depname = $this->findDepById($this->input->post('dep_id'))->dep_name;
      $data = array(
        'pers_name' => $this->input->post('pers_name'),
        'pers_firstname' => $this->input->post('pers_firstname'),
        'pers_matricule' => $this->input->post('pers_matricule'),
        'pers_site' => $this->input->post('pers_site'),
        'pers_sexe' => $this->input->post('pers_sexe'),
        'pers_date_birth' => $this->input->post('pers_date_birth'),
        'pers_age' => $this->calculateAge($this->input->post('pers_date_birth')),
        'pers_type' => $this->input->post('pers_type'),
        'pers_contrat' => $this->input->post('pers_contrat'),
        'pers_cot_social' => $this->input->post('pers_cot_social'),
        'pers_cin' => $this->input->post('pers_cin'),
        'pers_address' => $this->input->post('pers_address'),
        'pers_sm' => $this->input->post('pers_sm'),
        'pers_phone' => $this->input->post('pers_phone'),
        'pers_mail' => $this->input->post('pers_mail'),
        'pers_date_arrived' => $this->input->post('pers_date_arrived'),
        'pers_date_gone' => $this->input->post('pers_date_gone'),
        'pers_dep' => $depname,
        'dep_id' => $this->input->post('dep_id'),
        'pers_dr_conge' => $this->input->post('pers_dr_conge'), 
        'pers_nbr_conge' =>$this->input->post('pers_nbr_conge') , 
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('personal',$data);
      }else{
        return $this->db->insert('personal', $data);
      }
    }

		public function getNbrJourConge($dateEmbauche, $drConge)
		{
			$str1 =  strtotime($dateEmbauche);
			$str2 = strtotime(date('Y-m-d'));

			$year1 = date('Y', $str1);
			$year2 = date('Y', $str2);

			$month1 = date('m', $str1);
			$month2 = date('m', $str2);

			$nbrMois = (($year2 - $year1) * 12) + ($month2 - $month1);
			$nbrConge = $drConge * $nbrMois;

			if ($str1 < $str2 && $drConge > 0) {
				return $nbrConge;
			} else {
				return 0;
			}
		}

		public function saveOrUpdateBien()
    {
      $id = $this->input->post('id');
			$depname = $this->findDepById($this->input->post('dep_id'))->dep_name;
      $data = array(
        'bien_name' => $this->input->post('bien_name'),
        'bien_date_arrive' => $this->input->post('bien_date_arrive'),
        'bien_resp' => $this->input->post('bien_resp'),
        'bien_date_disf' => $this->input->post('bien_date_disf'),
        'bien_type' => $this->input->post('bien_type'),
        'dep_id' => $this->input->post('dep_id'),
        'bien_dep' => $depname,
        'bien_mat' => $this->input->post('bien_mat'),
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('bien',$data);
      }else{
        return $this->db->insert('bien', $data);
      }
    }


    public function saveOrUpdateCong()
    {
      $id = $this->input->post('id');
			$currentpers = $this->findPersById($this->input->post('pers_id'));
			$persname = $currentpers->pers_name;
			$persfirstname = $currentpers->pers_firstname;
			$dep_id = $currentpers->dep_id;

			$nbrjr = $this->input->post('conge_nbr_day');
			$prixdroit = $this->input->post('conge_droit');
			$prixcong = $prixdroit*$nbrjr;
      $data = array(
        'conge_motif' => $this->input->post('conge_motif'),
        'conge_pers' => $persname." ".$persfirstname,
				'pers_id' => $this->input->post('pers_id'),
        'conge_date_start' => $this->input->post('conge_date_start'),
        'conge_date_end' => $this->input->post('conge_date_end'),
				'conge_date_reprise' => $this->input->post('conge_date_reprise'),
        'conge_nbr_day' => $nbrjr,
        'conge_price' => $prixcong,
        'conge_droit' => $prixdroit,
        'dep_id' => $dep_id,
        );
			$this->updatePersConge($currentpers->id,$nbrjr);
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('conge',$data);
      }else{
        return $this->db->insert('conge', $data);
      }
    }
		public function updatePersConge($idPers, $nbrJrs)
		{
			$currentpersNbrConge = $this->findPersById($idPers)->pers_nbr_conge;
			if ($currentpersNbrConge > 0 && $nbrJrs > 0 && $currentpersNbrConge >= $nbrJrs) {
				$data = array(
					'pers_nbr_conge' => $currentpersNbrConge - $nbrJrs
				);
				$this->db->where('id',$idPers);
					return $this->db->update('personal',$data);
			}
			
		}
		public function findDepById($id)
		{
			return $this->db->get_where('department', array('id' => $id))->row();

		}
    public function findPersById($id)
		{
			return $this->db->get_where('personal', array('id' => $id))->row();

		}
	  public function printDep()
    {
      $query = $this->db->get("department");
      return $query->result();
    }
    public function getPers()
    {
      $query = $this->db->get("personal");
      return $query->result();
    }
    public function deleteDep($id)
    {
      return $this->db->delete('department', array('id' => $id));
    }
		public function deletePers($id)
    {
      return $this->db->delete('personal', array('id' => $id));
    }
		public function deleteCong($id)
    {
      return $this->db->delete('conge', array('id' => $id));
    }
		public function deleteBien($id)
    {
      return $this->db->delete('bien', array('id' => $id));
    }
    public function printPers()
    {
      $type = $this->input->post("pers_type");
      $dep = $this->input->post("pers_dep");
      $contrat = $this->input->post("pers_contrat");
      if(!empty($dep)){
        $this->db->where('pers_dep', $dep);
      }
      if(!empty($type)){
        $this->db->where('pers_type', $type);
      }
      if(!empty($contrat)){
        $this->db->where('pers_contrat', $contrat);
      }
		  $query = $this->db->get("personal");
		  return $query->result();
    }
		public function printCong()
		{
			$dep = $this->input->post("dep_id");
			if(!empty($dep)){
        $this->db->where('dep_id', $dep);
      }
		  $query = $this->db->get("conge");
		  return $query->result();
		}
		public function printBien()
		{
			$dep = $this->input->post("dep_id");
			$type = $this->input->post("bien_type");
			if(!empty($dep)){
				$this->db->where('dep_id', $dep);
			}
			if(!empty($type)){
				$this->db->where('bien_type', $type);
			}
		  $query = $this->db->get("bien");
		  return $query->result();
		}
		public function printStk()
		{
			$type = $this->input->post('stk_type');
			$dated = $this->input->post('dated');
			$datef = $this->input->post('datef');

			if (!empty($type)) {
				$this->db->where('stk_type', $type);
			}
			if (!empty($dated)&&!empty($datef)) {
				$this->db->where('stk_date >=', $dated);
				$this->db->where('stk_date <=', $datef);
			}
			$query = $this->db->get("stk");
		  return $query->result();
		}
		public function printMvt()
		{
			$etat = $this->input->post('mvt_etat');
			$dated = $this->input->post('dated');
			$datef = $this->input->post('datef');

			if (!empty($etat)) {
				$this->db->where('mvt_etat', $etat);
			}
			if (!empty($dated)&&!empty($datef)) {
				$this->db->where('mvt_date >=', $dated);
				$this->db->where('mvt_date <=', $datef);
			}
			$query = $this->db->get("stk_mvt");
		  return $query->result();
		}
		public function calculateAge($date){
			$now = new DateTime('now');
			$from = new DateTime($date);
			return $from->diff($now)->y;
		}
    
}
