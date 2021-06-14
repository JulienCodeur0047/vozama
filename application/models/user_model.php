<?php
class User_Model extends CI_Model{
	public function get_user(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('statut', $this->input->get("search")); 
          $this->db->or_like('email', $this->input->get("search")); 
          $this->db->or_like('address', $this->input->get("search")); 
        }
        $query = $this->db->get("utilisateur");
        return $query->result();
    }
	public function insert_user()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'statut' => $this->input->post('statut'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address')
        );
        return $this->db->insert('utilisateur', $data);
    }
	public function update_user($id_user) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'statut'=> $this->input->post('statut'),
            'email'=> $this->input->post('email'),
            'address'=> $this->input->post('address')
        );
        if($id_user==0){
            return $this->db->insert('utilisateur',$data);
        }else{
            $this->db->where('id_user',$id_user);
            return $this->db->update('utilisateur',$data);
        }        
    }


    public function find_user($id_user)
    {
        return $this->db->get_where('utilisateur', array('id_user' => $id_user))->row();
    }


    public function delete_user($id_user)
    {
        return $this->db->delete('utilisateur', array('id_user' => $id_user));
    }
}
