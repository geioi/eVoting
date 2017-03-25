<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
	function __construct() {
		$this->load->model('registreeri');
	}
	
	public function checkUser($user = array()) {
		$result = $this->db->query("SELECT * FROM `users` WHERE `person_id` = ".$user['id']);
		$rows = $result -> num_rows();	
		
		if($rows == 0){
			$this->registreeri->registreeri_fb($user['id'], $user['email'], $user['first_name'], $user['last_name'], $user['gender']);
		}
		return true;
	}
	
}
