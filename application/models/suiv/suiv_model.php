<?php
class Suiv_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}

    public function saveOrUpdateNote()
    {
		$nbr = 0;
		$somme = 0;
		$data = array();
		$id = $this->input->post('id');
			for ($i=1; $i <=3 ; $i++) { 
				for ($j=1; $j <=8 ; $j++) { 
					if ($this->input->post($i.'M'.$j)!=NULL) {
						array_push($data,$this->input->post($i.'M'.$j));
						$nbr++;
						$somme = $somme + $this->input->post($i.'M'.$j);
						$data = array(
							'note_eleve' => $this->input->post('note_eleve'),
							'eleve_id' => $this->input->post('eleve_id'),
							'note_date' => date("Y/m/d"),
							//TRIMESTRE
							$i.'M1' => $this->input->post($i.'M1'),
							$i.'M2' => $this->input->post($i.'M2'),
							$i.'M3' => $this->input->post($i.'M3'),
							$i.'M4' => $this->input->post($i.'M4'),
							$i.'M5' => $this->input->post($i.'M5'),
							$i.'M6' => $this->input->post($i.'M6'),
							$i.'M7' => $this->input->post($i.'M7'),
							$i.'M8' => $this->input->post($i.'M8'),
							$i.'MO' => $somme/$nbr,);
					}
				}
			}
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->update('note',$data);
			}else{
				return $this->db->insert('note', $data);
			}
    }
	public function getNote($eleveId)
	{
		$this->db->where('eleve_id',$eleveId);
		$query = $this->db->get("note");
		  return $query->result();
	}
}
?>
