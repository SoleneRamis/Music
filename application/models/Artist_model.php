<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artist_model extends CI_Model{
	private $table='Artiste';

	public function artists_count(){
		return $this->db->count_all($this->table);
	}
	
	
	function get_artists_details($id){
         
        	return $this->db->select('*')
                   ->where('idArtiste',$id)
                   ->get($this->table)
                   ->result();     
  }
  
}
?>