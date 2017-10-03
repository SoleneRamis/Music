<?php
class Home extends CI_controller {
	
	public function index() {

	echo"Bonjour";
}

public function solene() {
	echo "bonjourrrr";
	$this->load->view('example');
}

}
?>