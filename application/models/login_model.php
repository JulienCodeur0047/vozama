<?php
class Login_model extends CI_Model {
	
	private $id;
	private $user_name;
	private $user_password;
	private $user_type_code;
	private $user_type;

	  public function setId($id) {
		$this->id = $id;
	  }  
	  public function setUser_Name($user_name) {
		$this->user_name = $user_name;
	  }
	  public function setUser_Password($user_password) {
		$this->user_password = $user_password;
	  }
	  public function setUser_Type_Code($user_type_code) {
		$this->user_type_code = $user_type_code;
	  }
	  public function setUser_Type($user_type) {
		$this->user_type = $user_type;
	  }

	  public function getUserInfo() {
		$this->db->select(array('u.id', 'u.user_name', 'u.user_password','u.user_type_code','u.user_type'));
		$this->db->from('user as u');
		$this->db->where('u.id', $this->id);
		$query = $this->db->get();
		return $query->row_array();
	  }
	  function login() {
		$this -> db -> select('id, user_name,user_type_code');
		$this -> db -> from('user');
		$this -> db -> where('user_name', $this->user_name);
		$this -> db -> where('user_password', $this->user_password);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query -> num_rows() == 1) {
		  return $query->result();
		} else {
		  return false;
		}
	  }
	  public function getOrSearchUser()
	  {
		if(!empty($this->input->get("search"))){
			  $this->db->like('id', $this->input->get("search"));
			  $this->db->or_like('user_name', $this->input->get("search"));
			  $this->db->or_like('user_type', $this->input->get("search"));
			}
		if (!empty($this->input->post("search"))) {
			$this->db->like('id', $this->input->post("search"));
			$this->db->or_like('user_name', $this->input->post("search"));
		}
		if (!empty($this->input->post("user_type"))) {
			$this->db->or_like('user_type', $this->input->post("user_type"));
		}
			$query = $this->db->get("user");
			return $query->result();
	  }
	  public function saveOrUpdateUser()
	  {
		$id = $this->input->post('id');
		$user_code = $this->input->post('user_type_code');
		switch ($user_code) {
				case 2:
					$user_type = "Alphabétisation";
					break;
					case 3:
						$user_type = "Environnement";
						break;
						case 4:
							$user_type = "Développement";
							break;
							case 5:
								$user_type = "Suivi et évaluation";
								break;
								case 6:
									$user_type = "Communication ";
									break;
									case 7:
										$user_type = "Tourisme solidaire";
										break;
										case 8:
											$user_type = "Sécurité";
											break;
											case 9:
												$user_type = "Entreprise";
												break;
			default:
			$user_type = "Administrateur";
				break;
		}

		$data = array(
			'user_name'=> $this->input->post('user_name'),
			'user_password'=> $this->input->post('user_password'),
			'user_type'=> $user_type,
			'user_type_code'=> $user_code,
		);
		if (!empty($id)) {
			$this->db->where('id',$id);
        	return $this->db->update('user',$data);
		}else {
        	return $this->db->insert('user',$data);
		}
	  }
	  public function deleteUser($id)
	  {
		return $this->db->delete('user', array('id' => $id));
	  }
	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of user_name
	 */ 
	public function getUser_name()
	{
		return $this->user_name;
	}

	/**
	 * Get the value of user_password
	 */ 
	public function getUser_password()
	{
		return $this->user_password;
	}

	/**
	 * Get the value of user_type_code
	 */ 
	public function getUser_type_code()
	{
		return $this->user_type_code;
	}

	/**
	 * Get the value of user_type
	 */ 
	public function getUser_type()
	{
		return $this->user_type;
	}
}
