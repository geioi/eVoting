<?php
class Registreeri extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	public function checkEmail($email){
		$query = "SELECT id from users WHERE email = '$email'";
		$exec = $this->db->query($query);
		if (empty($exec->result())){
			return true;
		}
		return false;
	}
	
	public function checkPerson_id($person_id){
		$query = "SELECT id from users WHERE person_id = '$person_id'";
		$exec = $this->db->query($query);
		if (empty($exec->result())){
			return true;
		}
		return false;
	}
}
?>