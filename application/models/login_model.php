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
