<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Log_model extends CI_Model{
	private $table='User';			

	public function set_register($data){
		

			$this->db->set('login', $data['login']);
			$this->db->set('password', $data['password']);
			$this->db->insert('User');
	}


	public function set_co($data){
		

			$this->db->set('login', $data['login']);
			$this->db->set('password', $data['password']);
			$this->db->select('User');
	}

	public function identiquelog($data) {
			$this->db->where('login', $data['login']);
			$this->db->where('password', sha1($data['password']));
			$q=$this->db->get('User');
			if($q->num_rows()>0)	return 1;
			else return 0;
	}
	public function check_id($pseudo, $pass){
		$this->db->where('login',$pseudo);
		$this->db->where('password',sha1($pass));
		$q=$this->db->get('User');
		if($q->num_rows()==1){
			return true;
		}
	}


		
		
}


?>