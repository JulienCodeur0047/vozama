<?php
class Suiv_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}

    public function saveOrUpdateNote()
    {
			$nbr1 = 0;
			$nbr2 = 0;
			$nbr3 = 0;
			$somme1 = 0;
			$somme2 = 0;
			$somme3 = 0;
			$data = array();
			for ($i=0; $i <=3 ; $i++) { 
				
				$data = array(
					'note_eleve' => $this->input->post('note_eleve'),
					'eleve_id' => $this->input->post('eleve_id'),
					//1er TRIMESTRE
					'1M1' => $this->input->post('1M1'),
					'1M2' => $this->input->post('1M2'),
					'1M3' => $this->input->post('1M3'),
					'1M4' => $this->input->post('1M4'),
					'1M5' => $this->input->post('1M5'),
					'1M6' => $this->input->post('1M6'),
					'1M7' => $this->input->post('1M7'),
					'1M8' => $this->input->post('1M8'),
					'1MO' => $somme1/$nbr1,);
			}
			for( $i=1; $i<=8; $i++ ){
				if ($this->input->post('1M'.$i)!=NULL) {
					array_push($data,$this->input->post('1M1'));
					$nbr1++;
					$somme1 = $somme1 + $this->input->post('1M'.$i);
				}
				if ($this->input->post('2M'.$i)!=NULL) {
					$nbr2++;
					$somme2 = $somme2 + $this->input->post('2M'.$i);
				}
				if ($this->input->post('3M'.$i)!=NULL) {
					$nbr3++;
					$somme3 = $somme3 + $this->input->post('3M'.$i);
				}
			}
		//var_dump($nbr1);
		//die;
       $id = $this->input->post('id');
       $data = array(
         'note_eleve' => $this->input->post('note_eleve'),
         'eleve_id' => $this->input->post('eleve_id'),
				 //1er TRIMESTRE
         '1M1' => $this->input->post('1M1'),
         '1M2' => $this->input->post('1M2'),
         '1M3' => $this->input->post('1M3'),
         '1M4' => $this->input->post('1M4'),
         '1M5' => $this->input->post('1M5'),
         '1M6' => $this->input->post('1M6'),
         '1M7' => $this->input->post('1M7'),
         '1M8' => $this->input->post('1M8'),
         '1MO' => $somme1/$nbr1,
				 //2eme TRIMESTRE
         '2M1' => $this->input->post('2M1'),
         '2M2' => $this->input->post('2M2'),
         '2M3' => $this->input->post('2M3'),
         '2M4' => $this->input->post('2M4'),
         '2M5' => $this->input->post('2M5'),
         '2M6' => $this->input->post('2M6'),
         '2M7' => $this->input->post('2M7'),
         '2M8' => $this->input->post('2M8'),
         '2MO' => $somme2/$nbr2,
				 //3eme TRIMESTRE
         '3M1' => $this->input->post('3M1'),
         '3M2' => $this->input->post('3M2'),
         '3M3' => $this->input->post('3M3'),
         '3M4' => $this->input->post('3M4'),
         '3M5' => $this->input->post('3M5'),
         '3M6' => $this->input->post('3M6'),
         '3M7' => $this->input->post('3M7'),
         '3M8' => $this->input->post('3M8'),
         '3MO' => $somme3/$nbr3,
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
