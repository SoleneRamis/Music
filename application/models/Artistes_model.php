<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Artistes_model extends CI_Model{
	private $table='Artiste';			



	public function Portrait(){
		
		return $this->db->select('*')
			->from($this->table)
			->get()
			->result();		

	}



	public function ListAlbum($idArt){
		
		return $this->db->select('*')
			->from('Album')
			->where('idArtiste',$idArt)
			->get()
			->result();		

	}
	public function get_artiste($pseudo){
		if (isset($pseudo)){
			var_dump($this->db->select(count('pseudo'))
				->from('Artiste')
				->where('pseudo', $pseudo)
				->get()) ;

			//var_dump($query);
			//if($query!=0)
			//	return true;
			//else 
			//	return false;
		}
	}
	public function ajouter_artiste($data){
		
	
	
    
    return $this->db->insert('Artiste', $data);
  
	}
    public function accueil_artiste(){
         
        	return $this->db->select('*')
        		   ->from('Album')
                   ->order_by('idAlbum', 'desc')
                   ->limit(5)
                   ->get()
                   ->result();
	}
	public function Portraitactu(){
		
		return $this->db->select('*')
			->from('Artiste')
            ->order_by('idArtiste', 'desc')
            ->limit(5)
			->get()
			->result();		

	}

}
?>