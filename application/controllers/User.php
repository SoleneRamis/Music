<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){	
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('User_model');


	}


	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect(site_url('/album/index/'), 'refresh');
	}
	
	public function upload(){
		$this->load->library('session');
		$result=array();
		$result['nomGenre']=$this->User_model->get_genre();
		$result['nomScene']=$this->User_model->get_artists_name();
		$this->load->view('upload', $result);
	}
	
	public function submit_upload(){
		$this->load->library('session');
		$data=array();
		if($_POST['btnr']=='Album'){
			$data['Titre']=$_POST['title'];
			$data['Genre']=$_POST['genre'];
			$data['Annee']=$_POST['release'];
			$data['Description']=$_POST['descrip'];
			$data['Jacket']=$_POST['image'];
			$this->User_model->insert_album($data);
			if(isset($_POST['artist'])){
				$titre=$data['Titre'];
				$id_album=$this->User_model->get_album_id($titre);
				foreach($_POST["artist"] as $value){
					$id_artist=$this->User_model->get_artist_id($value);
					$this->User_model->set_album_artist_link($id_album[0]->idAlbum,$id_artist[0]->idArtiste);
				}
			}
			redirect(site_url('/album/index/'), 'refresh');
		}
	}
}
?>