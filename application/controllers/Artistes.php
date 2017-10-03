<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Accueil extends CI_controller {

	    public function __construct(){   
        parent::__construct();
        
	        $this->load->database();
			$this->load->model('Artistes_model');
			$this->load->helper('url');
    }


	
	public function index_accueil() {

			$this->load->view('accueil.html');

	}
	
	public function index_artistes() {

		$data=$this->Artistes_model->Portrait();
		$this->load->view('artistes',array('data'=>$data));
		echo var_dump($data);

		
	}
}



?>

