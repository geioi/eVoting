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
		$person_id = stripcslashes($person_id);
		$password = stripcslashes($password);
		$mysqli = new mysqli("localhost", "evotingcsut_admin", "very1hard", "evotingcsut_kandidaadid");
		$person_id = mysqli_real_escape_string($mysqli,$person_id);
		$password = mysqli_real_escape_string($mysqli,$password);
		$password = hash('sha512', $password);
		
		if (!empty($person_id) && !empty($password)){
			if (!empty($this->Login->validateUser($person_id, $password))){
				$nimi = $this->Login->getName($person_id);

				$_SESSION['userid'] = $nimi;
				$_SESSION['email'] = $this->Login->getEmail($person_id);
				$_SESSION['login'] = true;
				$_SESSION['person_id'] = $person_id;
				
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