<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Album_model extends CI_Model{
	private $table='Album';		
	private $table2='Artiste';	

	public function List_album(){
		
		return $this->db->select('*')
		->from($this->table)
		->get()
		->result();
	}
	
	
	public function ajouter_album($data){
		

		$idart=$this->db->select('idArtiste')
		->from($this->table2)
		->where('pseudo', $data['idArtiste'])
		->get()
		->result();
		foreach ($idart as $row){
			$data["idArtiste"]=$row->idArtiste;
		}
		
		return $this->db->insert('Album', $data);
	
	}
	public function set_com($data){
		

			$this->db->set('com', $data['com']);
			$this->db->set('date', $data['date']);
			$this->db->set('utilisateur', $data['utilisateur']);
			$this->db->set('idAlbum', $data['id']);
			$this->db->insert('Commentaire');
	}

	
	
	
	
}


?>