<?php
class Dev_model extends CI_Model{


	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('poste/Eleve_model','eleve');
		$this->load->model('site/Site_model','site');
	  }

	  public function getDevOrSearchAp()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('eleve_name', $this->input->get("search"));
			$this->db->or_like('eleve_firstname', $this->input->get("search"));  
			$this->db->or_like('eleve_matricule', $this->input->get("search"));  
		  }
		if(!empty($this->input->post("postefilter"))){
			$this->db->where('eleve_poste', $this->input->post("postefilter"));
		  }
		if(!empty($this->input->post("anneefilter"))){
			$this->db->like('eleve_date_entre', $this->input->post("anneefilter"));
		}
		$query = $this->db->get("eleve");
		return $query->result();
	  }
	  public function getDevOrSearchAgr()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('agr_filiere', $this->input->get("search"));
			$this->db->or_like('agr_parent', $this->input->get("search"));    
		  }
		$query = $this->db->get("agr");
		return $query->result();
	  }

	  public function getDevOrSearchcmv()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('cmv_name', $this->input->get("search"));
			$this->db->or_like('cmv_firstname', $this->input->get("search"));  
			$this->db->or_like('cmv_tel', $this->input->get("search"));  
			$this->db->or_like('cmv_site', $this->input->get("search"));  
			$this->db->or_like('cmv_adresse', $this->input->get("search"));  
			$this->db->or_like('cmv_titre', $this->input->get("search"));  
		  }
		if(!empty($this->input->post("cmvtitre"))){
			$this->db->like('cmv_titre', $this->input->post("cmvtitre"));
		}
		$query = $this->db->get("comite_villagois");
		return $query->result();
	  }

	  public function insertCmv(){
		$data = array(
		'cmv_site' => $this->site->findSiteById($this->input->post('site_id'))->site_name,
		'cmv_name' => $this->input->post('cmv_name'),
		'cmv_firstname' => $this->input->post('cmv_firstname'),
		'cmv_adresse' => $this->input->post('cmv_adress'),
		'cmv_tel' => $this->input->post('cmv_tel'),
		'cmv_gps' => $this->input->post('cmv_gps'),
		'site_id' => $this->input->post('site_id'),
		'cmv_titre' => $this->input->post('cmv_titre'),
		'cmv_nbr_par_ger' => $this->input->post('cmv_nbr_par_ger'),
		'cmv_nbr_enfant' => $this->input->post('cm_nbr_enfant'),
		);
		return $this->db->insert('comite_villagois', $data);
	}

	public function insertAgr(){
		$pere_name = $this->site->findParentById($this->input->post('parent_id'))->parent_pere_name;
		$pere_firstname = $this->site->findParentById($this->input->post('parent_id'))->parent_pere_firstname;
		$data = array(
		'agr_parent' => $pere_name." ".$pere_firstname ,
		'parent_id' => $this->input->post('parent_id'),
		'agr_filiere' => $this->input->post('agr_filiere'),
		'agr_qte' => $this->input->post('agr_qte'),
		'agr_date_d' => $this->input->post('agr_date_d'),
		'agr_date_suivi' => $this->input->post('agr_date_suivi'),
		'agr_unite' => $this->input->post('agr_unite'),
		'agr_formation' => $this->input->post('agr_formation'),
		);
		return $this->db->insert('agr', $data);
	}

	public function deleteAgr($id){
		return $this->db->delete('agr', array('id' => $id));
	}
	public function deleteCmv($id){
		return $this->db->delete('comite_villagois', array('id' => $id));
	}
	

	public function printcmv()
	{
		if(!empty($this->input->post("search"))){
			$this->db->where('cmv_name', $this->input->post("search")); 
			$this->db->or_where('cmv_firstname', $this->input->post("search")); 
			$this->db->or_where('cmv_adresse', $this->input->post("search")); 
			$this->db->or_where('cmv_tel', $this->input->post("search")); 
		  }
		  if(!empty($this->input->post("cmvtitre"))){
			$this->db->or_where('cmv_titre', $this->input->post("cmvtitre"));
		}
		$query = $this->db->get("comite_villagois");
		return $query->result();
	}

	public function printAp()
	{
		if(!empty($this->input->post("postefilter"))){
			$this->db->where('eleve_poste', $this->input->post("postefilter")); 
		  }
		  if(!empty($this->input->post("anneefilter"))){
			$this->db->or_where('eleve_date_entre', $this->input->post("anneefilter"));
		}
		$query = $this->db->get("eleve");
		return $query->result();
	}

	public function printAgr()
	{
		if(!empty($this->input->post("search"))){
			$this->db->like('agr_filiere', $this->input->post("agr_filiere")); 
			$this->db->or_like('agr_parent', $this->input->post("agr_parent")); 
		  }
		$query = $this->db->get("agr");
		return $query->result();
	}

	  public function getParentByTitre($titre)
	  {
		$this->db->or_like('parent_titre', $titre); 
		$query = $this->db->get("parent");
		return $query->result();
	  }
	  public function getPoste($postSrt)
	  {
		$response = array();

		if(isset($postData['search']) ){
		  // Select record
		  $this->db->select('*');
		  $this->db->where("poste_name like '%".$postData['search']."%' ");
   
		  $records = $this->db->get('poste')->result();
   
		  foreach($records as $row ){
			 $response[] = array("value"=>$row->id,"label"=>$row->username);
		  }
   
		}
   
		return $response;
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
	  public function insertDev()
	  {
		  # code...
	  }
}
?>
