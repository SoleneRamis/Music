<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
	private $table='Utilisateur';
	private $table2='Genre';
	private $table3='Artiste';

	public function set_register($data){
		$this->db->set('Nom', $data['Nom']);
		$this->db->set('Prenom', $data['Prenom']);
		$this->db->set('Mdp', $data['Mdp']);
		$this->db->set('Mail', $data['Mail']);
		$this->db->set('Login', $data['Login']);
		$this->db->set('Type', 'Utilisateur');
		$this->db->insert('Utilisateur');
	}

	public function get_register($login, $pass){
		return $this->db->select('Login,Mdp,idUtilisateur')
		->from($this->table)
		->where('Login', $login)
		->where('Mdp', $pass)
		->get()
		->result();
	}
	
	public function get_genre(){
		return $this->db->select('nomGenre')
				->get($this->table2)
				->result();
	}
	
	public function get_artists_name(){
		return $this->db->select('nomScene')
				->get($this->table3)
				->result();
	}
	
	public function insert_album($data){
		$this->db->set('Titre', $data['Titre']);
		$this->db->set('Genre', $data['Genre']);
		$this->db->set('Annee', $data['Annee']);
		$this->db->set('Description', $data['Description']);
		$this->db->set('Jacket', $data['Jacket']);
		$this->db->insert('Album');
	}
	
	public function get_album_id($data){
		return $this->db->select('idAlbum')
			->where('Titre', $data)
			->get('Album')
			->result();
	}
	
	public function get_artist_id($data){
		return $this->db->select('idArtiste')
			->where('nomScene', $data)
			->get($this->table3)
			->result();
	}
	
	public function set_album_artist_link($id_album, $id_artist){
		$this->db->set('idArtiste', $id_artist);
		$this->db->set('idAlbum', $id_album);
		$this->db->insert('Realise');
	}
}
?>