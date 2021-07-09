<?php
class Suiv_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}

    public function saveOrUpdateNote()
    {
				for( $i=1; $i<=8; $i++ ){
					
				}
       $id = $this->input->post('id');
       $data = array(
         'note_eleve' => $this->input->post('note_eleve'),
         'eleve_id' => $this->input->post('eleve_id'),
         '3M1' => $this->input->post('3M1'),
         '3M2' => $this->input->post('3M2'),
         '3M3' => $this->input->post('3M3'),
         '3M4' => $this->input->post('3M4'),
         '3M5' => $this->input->post('3M5'),
         '3M6' => $this->input->post('3M6'),
         '3M7' => $this->input->post('3M7'),
         '3M8' => $this->input->post('3M8'),
         '3MO' => $this->input->post('3MO'),
         );
       if (!empty($id)) {
         $this->db->where('id',$id);
         return $this->db->update('note',$data);
       }else{
         return $this->db->insert('note', $data);
       }
    }
}
?>
