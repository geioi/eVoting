<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sisselogimine extends CI_Controller {

	public function index(){
		if(!isset($_SESSION)) { 
			session_start(); 
		}
		
		$default_loc = 'login';
		$prev_loc = $_SESSION['prev_loc'];
		
		$this->load->model('Login');
		//$data['complete'] = $this->Login->getData();
		
		// get values from login form
		$person_id = $_POST['person_id'];
		$password = $_POST['password'];
		
		// to prevent mysql injection
		//$person_id = stripcslashes($person_id);
		//$password = stripcslashes($password);
		//$person_id = mysql_real_escape_string($person_id);
		//$password = mysql_real_escape_string($password);
		$password = hash('sha512', $password);
		
		if (!empty($person_id) && !empty($password)){
			if (!empty($this->Login->validateUser($person_id, $password))){
				//$_SESSION['message'] = 'Tere tulemast ' .$person_id . '!';
				$nimi = $this->Login->getName($person_id);

				$_SESSION['userid'] = $nimi;
				$_SESSION['login'] = true;
				
				if ($prev_loc == 'signup' || $prev_loc == ''){
					$prev_loc = 'welcome';
				}

				header('Location: '.$prev_loc);
				exit;
				
			} else {
				$_SESSION['message'] = lang('invalidUserPass');
			}
		}
		else {
			$_SESSION['message'] = lang('bothFields');
		}
		
		header('Location: '.$default_loc);
		exit;
	}
}