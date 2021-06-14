<?php
class Visite_poste_model extends CI_Model{


	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }

	  public function getVpOrSearch(){
		if(!empty($this->input->get("search"))){
			$this->db->like('vp_poste', $this->input->get("search"));
			$this->db->or_like('id', $this->input->get("search")); 
			$this->db->or_like('vp_date', $this->input->get("search")); 
			$this->db->or_like('vp_heure', $this->input->get("search")); 
			$this->db->or_like('vp_moniteur', $this->input->get("search")); 
			$this->db->or_like('vp_inspecteur', $this->input->get("search"));
		  }
		  $query = $this->db->get("visite_poste");
		  return $query->result();
	  }

	  public function insertVp(){
		$data = array(
		'vp_poste' => $this->poste->findPoste($this->input->post('poste_id'))->poste_name,
		'vp_date' => $this->input->post('vp_date'),
		'vp_heure' => $this->input->post('vp_heure'),
		'vp_visiteur1' => $this->input->post('vp_visiteur1'),
		'vp_visiteur2' => $this->input->post('vp_visiteur2'),
		'vp_visiteur3' => $this->input->post('vp_visiteur3'),
		'vp_moniteur' => $this->poste->findMoniteur($this->input->post('moniteur_id'))->moniteur_name ,
		'vp_inspecteur' => $this->poste->findInspecteur($this->input->post('inspecteur_id'))->insp_name,
		'vp_eval_moniteur' => $this->input->post('vp_eval_moniteur'),
		'vp_eval_inspecteur' => $this->input->post('vp_eval_inspecteur'),
		'vp_presence_moniteur' => $this->input->post('vp_presence_moniteur'),
		'vp_rempl_nom' => $this->input->post('vp_rempl_nom'),
		'vp_rempl_raison' => $this->input->post('vp_rempl_raison'),
		'vp_rempl_duree' => $this->input->post('vp_rempl_duree'),
		'vp_cahier_appel' => $this->input->post('vp_cahier_appel'),
		'vp_prep_cours_fait' => $this->input->post('vp_prep_cours_fait'),
		'vp_rem_prepa_cours' => $this->input->post('vp_rem_prepa_cours'),
		'vp_appel_fait' => $this->input->post('vp_appel_fait'),
		'vp_nbr_list_off' => $this->input->post('vp_nbr_list_off'),
		'vp_nbr_eleve_present' => $this->input->post('vp_nbr_eleve_present'),
		'vp_nbr_eleve_classe' => $this->input->post('vp_nbr_eleve_classe'),
		'vp_nbr_abs' => $this->input->post('vp_nbr_abs'),
		'vp_observation' => $this->input->post('vp_observation'),
		'vp_propr_salle' => $this->input->post('vp_propr_salle'),
		'vp_etat_salle' => $this->input->post('vp_etat_salle'),
		'poste_id' => $this->input->post('poste_id'),
		'moniteur_id' => $this->input->post('moniteur_id'),
		'inspecteur_id' => $this->input->post('inspecteur_id'),
		'vp_remarque' => $this->input->post('vp_remarque'),
		);
		return $this->db->insert('visite_poste', $data);
	}
	public function update($id){
		$data = array(
			'vp_poste' => $this->poste->findPoste($this->input->post('poste_id'))->poste_name,
			'vp_date' => $this->input->post('vp_date'),
			'vp_heure' => $this->input->post('vp_heure'),
			'vp_visiteur1' => $this->input->post('vp_visiteur1'),
			'vp_visiteur2' => $this->input->post('vp_visiteur2'),
			'vp_visiteur3' => $this->input->post('vp_visiteur3'),
			'vp_moniteur' => $this->poste->findMoniteur($this->input->post('moniteur_id'))->moniteur_name ,
			'vp_inspecteur' => $this->poste->findInspecteur($this->input->post('inspecteur_id'))->insp_name,
			'vp_eval_moniteur' => $this->input->post('vp_eval_moniteur'),
			'vp_eval_inspecteur' => $this->input->post('vp_eval_inspecteur'),
			'vp_presence_moniteur' => $this->input->post('vp_presence_moniteur'),
			'vp_rempl_nom' => $this->input->post('vp_rempl_nom'),
			'vp_rempl_raison' => $this->input->post('vp_rempl_raison'),
			'vp_rempl_duree' => $this->input->post('vp_rempl_duree'),
			'vp_cahier_appel' => $this->input->post('vp_cahier_appel'),
			'vp_prep_cours_fait' => $this->input->post('vp_prep_cours_fait'),
			'vp_rem_prepa_cours' => $this->input->post('vp_rem_prepa_cours'),
			'vp_appel_fait' => $this->input->post('vp_appel_fait'),
			'vp_nbr_list_off' => $this->input->post('vp_nbr_list_off'),
			'vp_nbr_eleve_present' => $this->input->post('vp_nbr_eleve_present'),
			'vp_nbr_eleve_classe' => $this->input->post('vp_nbr_eleve_classe'),
			'vp_nbr_abs' => $this->input->post('vp_nbr_abs'),
			'vp_observation' => $this->input->post('vp_observation'),
			'vp_propr_salle' => $this->input->post('vp_propr_salle'),
			'vp_etat_salle' => $this->input->post('vp_etat_salle'),
			'poste_id' => $this->input->post('poste_id'),
			'moniteur_id' => $this->input->post('moniteur_id'),
			'inspecteur_id' => $this->input->post('inspecteur_id'),
			'vp_remarque' => $this->input->post('vp_remarque'),
			);
		if($id==0){
            return $this->db->insert('visite_poste',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('visite_poste',$data);
        }
	}
	public function getVpById($id){
		return $this->db->get_where('visite_poste', array('id' => $id))->row();
	}
	public function deleteVp($id){
		return $this->db->delete('visite_poste', array('id' => $id));
	}
}
?>
