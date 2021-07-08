<?php
class Parent_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}
    public function getOrSearchPare()
    {
      $poste = $this->input->post("poste_id");
      $site = $this->input->post("site_id");
      if(!empty($this->input->get("search"))){
			$this->db->like('parent_pere_name', $this->input->get("search"));
			$this->db->or_like('parent_mere_name', $this->input->get("search")); 
			$this->db->or_like('parent_pere_fonction', $this->input->get("search")); 
		  }
      
      if(!empty($poste)){
        $this->db->where('poste_id', $poste);
      }
      if(!empty($site)){
        $this->db->where('site_id', $site);
      }
		  $query = $this->db->get("parent");
		  return $query->result();
    }

    public function findDepById($id)
		{
			return $this->db->get_where('department', array('id' => $id))->row();

		}
    public function saveOrUpdateParent()
    {
       $poste_name = $this->poste->findPoste($this->input->post('poste_id'))->poste_name;
       $site_name = $this->poste->findSite($this->input->post('site_id'))->poste_name;
       $id = $this->input->post('id');
       $data = array(
         'parent_mere_name' => $this->input->post('parent_mere_name'),
         'parent_pere_name' => $this->input->post('parent_pere_name'),
         'parent_pere_fonction' => $this->input->post('parent_pere_fonction'),
         'parent_address' => $this->input->post('parent_address'),
         'poste_id' => $this->input->post('poste_id'),
         'site_id' => $this->input->post('site_id'),
         'parent_site' => $site_name,
         'parent_poste' => $poste_name,
         'parent_nbr_enfant' => $this->input->post('parent_nbr_enfant'),
         'parent_nbr_sco_voz' => $this->input->post('parent_nbr_sco_voz'),
         'parent_anne_sorti_voz' => $this->input->post('parent_anne_sorti_voz'),
         'parent_anne_entre_voz' => $this->input->post('parent_anne_entre_voz'),
         );
       if (!empty($id)) {
         $this->db->where('id',$id);
         return $this->db->update('parent',$data);
       }else{
         return $this->db->insert('parent', $data);
       }
    }
    public function deleteParent($id){
      return $this->db->delete('parent', array('id' => $id));
    }
}
?>