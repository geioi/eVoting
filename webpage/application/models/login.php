<?php
class Login extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function getData() {
		$query = "SELECT `users`.`username`,`users`.`password` FROM `users`";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function validateUser($person_id, $password) {
		$query = "SELECT id from users WHERE person_id = '$person_id' AND password = '$password'";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function getEmail($person_id){
		$query = "SELECT email from users WHERE person_id = '$person_id'";
		$exec = $this->db->query($query);
		
		foreach ($exec->result() as $email){
			return $email->email;
		}
	}
	
	public function getName($person_id){
		$query = "SELECT CONCAT(`users`.`firstname`,' ',`users`.`lastname`) as nimi from users WHERE person_id = '$person_id'";
		$exec = $this->db->query($query);
		
		//i have no idea how to get the value without a loop...so this is my "temporary" solution
		foreach ($exec->result() as $tulemus){
			return $tulemus->nimi;
		}
	}
}
?>