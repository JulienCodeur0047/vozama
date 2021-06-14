<?php
class Redirector extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('flexi_auth');
        $this->load->helper('url');
    }

    public function index(){
        // Maintenance: de préférence, placer ces données dans une base de données
        $path = array(
            'requireauth' => 'auth',
            'default' => 'accueil',
            'Administrateurs' => 'accueil'
        );

        // On assume initialement que l'utilisateur est connecté, mais
        // n'appartient pas à un groupe spécifique.
        $group = 'default';

        if(!$this->flexi_auth->is_logged_in()){
            $group = 'requireauth';
        }
        else{
            $group = $this->flexi_auth->get_user_group();

            if(!isset($path[$group])){
                $group = 'default';
            }
        }
        
        redirect($path[$group]);
    }
}
?>
