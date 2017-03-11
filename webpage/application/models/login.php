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
	
	public function validateUser($username, $password) {
		$query = "SELECT id from users WHERE username = '$username' AND password = '$password'";
		$exec = $this->db->query($query);
		return $exec->result();
	}
}
?>