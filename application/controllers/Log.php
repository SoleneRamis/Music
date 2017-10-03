<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Log extends CI_controller {

	    public function __construct(){   
        parent::__construct();
        
	        $this->load->database();
	        $this->load->helper(array('html','form', 'url','array'));
	        $this->load->library('form_validation','session');
	        $this->load->model('Log_model');
    }

	
	public function index() {

			$this->load->view('log');
	}



	public function submit_register() {

		$login = $_POST['login'];
		$password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $this->form_validation->set_rules('login', 'login', 'required|min_length[2]|max_length[25]|callback_check_pseudo');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[2]|matches[verifpass]');
        $this->form_validation->set_rules('verifpass', 'password confirmation', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('log');
        }

        else{

	    	$data=array();
	    	$data['login']=$_POST['login'];
	    	$data['password']=sha1($_POST['password']);

	    	if ($this->Log_model->identiquelog($data)==0) {
			$this->Log_model->set_register($data);
			$this->session->set_userdata($data);
            redirect(site_url('/accueil/index_accueil'),'refresh');
	    	}

	    	else {
	    		echo "<center><h1><b><i>Identifiant déjà utilisé</b></i></h1></center>";
	    		echo "<center><a href='index' class='links'>Retour à l'inscription</a></center>";
	    	}
           
        }
    }


    public function connection() {
        
        $this->load->view('connection');
    }
   


    public function submit_connection() {

		$login = $_POST['login'];
		$password =$_POST['password'];

		$this->form_validation->set_rules('login', 'login', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('connection');
        }
		
		else{

	    	$ids=array();
	    	$ids['login']=$_POST['login'];
	    	$ids['password']=sha1($_POST['password']);

	    	if ($this->Log_model->check_id($_POST['login'], $_POST['password'])) {

			$data=array('login'=>$ids['login'], 'logged'=>true);
			$this->session->set_userdata($data);
            redirect(site_url('/accueil/index_accueil'),'refresh');
	    	}

	    	else {
	    		
	    		$this->load->view('connection');
	    	}
           
        }





    }
    
    public function check_pseudo(){
		if($this->input->post('login')){
			$this->db->select('count(login)');
			$this->db->from('User');
			$this->db->where('login', $this->input->post('login'));
			$tentatives=$this->db->count_all_results();
			if($tentatives>0){
				$this->form_validation->set_message('check_pseudo', 'Ce pseudo est déjà utilisé!!!');
				return false;
			}
			else return true;
		}
	}
   

}


?>
