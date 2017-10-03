<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Accueil extends CI_controller {

	    public function __construct(){   
        parent::__construct();
        
	        $this->load->database();
			$this->load->model('Album_model');
			$this->load->helper('url');
    }


	
	public function index_info() {

			$this->load->view('infoAlbum');
			


	}
	
	
}



?>