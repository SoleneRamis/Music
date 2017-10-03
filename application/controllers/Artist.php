<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artist extends CI_Controller {
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
		$this->load->model('Artist_model');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->library('session');
		$this->load->library('pagination');

		$config['base_url'] = base_url().'/index.php/artist/page/';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $this->Artist_model->artists_count();
		$config['per_page'] = 8; 
		$this->pagination->initialize($config); 
		$artists = $this->Artist_model->get_new_artists(1,$config['per_page']);
		$links=$this->pagination->create_links();
		$this->load->view('artists',array('artists'=>$artists,'links'=>$links));
	}
	
	public function page($page){
		$this->load->library('session');
		$this->load->library('pagination');
         
       	$config['base_url'] = base_url().'/index.php/artist/page/';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $this->Artist_model->artistss_count();
		$config['per_page'] = 8; 
		$this->pagination->initialize($config); 
		$artists = $this->Artist_model->get_new_artists(1,$config['per_page']);
		$links=$this->pagination->create_links();
		$this->load->view('artists',array('artists'=>$artists,'links'=>$links)); 
   	}

	public function details(){
		$this->load->library('session');
		if(isset($_GET['artist'])){	 
			$id = $_GET['artist'];
			$data=$this->Artist_model->get_artists_details($id);
			$this->load->view('artist',array('data'=>$data));
		}else{
			redirect(site_url('/artist/index/'), 'refresh');
		}	
	}
}