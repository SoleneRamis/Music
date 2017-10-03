<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Accueil extends CI_controller {

	public function __construct(){   
		parent::__construct();

		$this->load->database();
		$this->load->model('Album_model');
		$this->load->model('Artistes_model');
		$this->load->helper(array('html','url',));
		$this->load->library('session');
	}

	
	public function index_accueil() {

		$data=$this->Artistes_model->accueil_artiste();
		$data2=$this->Artistes_model->Portraitactu();
		$this->load->view('accueil',array('data'=>$data)+array('data2'=>$data2));

	}

	public function index_albums() {

		$data=$this->Album_model->List_album();
		$this->load->view('album',array('data'=>$data));

	}

	public function info_albums() {

		$data=$this->Album_model->List_album();
		$this->load->view('infoAlbum',array('data'=>$data));

	}
	 public function logout(){
    	$this->session->unset_userdata('login');
    	$this->session->unset_userdata('logged');
    	$this->session->sess_destroy();
    	$this->load->view('log');
    }
    public function index_contact() {

			$this->load->view('contact');

	}

	public function list_albums() {

		$data=$this->Album_model->List_album();
		$this->load->view('listAlbum',array('data'=>$data));

	}
	public function post(){
		$id=$_POST['idAlbum'];
		
		date_default_timezone_set('UTC');
		$com = $_POST['com'];
		

        $this->form_validation->set_rules('com', 'com', 'required');
        

        if ($this->form_validation->run() == FALSE) {
            echo "error";
        }

        else{

	    	$data=array();
	    	$data['utilisateur']=$this->session->userdata('login');
	    	$data['com']=$com;
	    	$data['date']=date("Y-m-d");
	    	$data['id']=$_POST['idAlbum'];
	    	$this->Album_model->set_com($data);
			$this->load->view('infoAlbum',array('data'=>$data));

	    	}
	    	
	    }
        
	

	public function index_artistes() {

		$data=$this->Artistes_model->Portrait();
		$this->load->view('artistes',array('data'=>$data));
	}
	
	



	public function index_ajouter_alb(){
		$this->load->view('ajoutalbum');
	}
	public function index_ajouter_art(){
		$this->load->view('ajoutartiste');
	}
	public function AjoutAlbum(){
		$this->load->model('Album_model');

		$Title=$this->input->post('title');
		$Genr=$this->input->post('genre');
		$Annee=$this->input->post('sortie');
		$Dure=$this->input->post('time');
		$IdArt=$this->input->post('pseudo');
		$Url=$this->input->post('url');

		if($Title==""||$Genr==""||$Annee==""||$Dure==""||$IdArt==""||$Url=="")
			echo 'Veuillez remplir tout les champs!!';
		else{
			$data = array(


				'titre'=>$Title,
				'genre'=>$Genr,
				'anneeSortie'=>$Annee,
				'duree'=>$Dure,
				'idArtiste'=>$IdArt,
				'urlimg'=>$Url
				);

			$this->Album_model->ajouter_album($data);
			redirect(site_url('/accueil/index_albums'));

		}






	}
	public function AjoutArtiste(){

		$nom=$this->input->post('names');
		$tete=$this->input->post('face');

		
		

		if($nom==""||$tete=="")
			echo 'Veuillez remplir tout les champs!!';
		else{
			$data = array(


				'pseudo'=>$nom,
				'portrait'=>$tete,

				);

			$this->Artistes_model->ajouter_artiste($data);
			redirect(site_url('/accueil/index_artistes'));

		}






	}
}



?>
