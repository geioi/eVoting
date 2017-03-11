<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sisselogimine extends CI_Controller {

	public function index()
	{
		session_start();
		
		$default_loc = 'login';
		$prev_loc = $_SESSION['prev_loc'];
		
		$this->load->model('Login');
		//$data['complete'] = $this->Login->getData();
		
		// get values from login form
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// to prevent mysql injection
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		
		if (!empty($username) && !empty($password)){
			if (!empty($this->Login->validateUser($username, $password))){
				//$_SESSION['message'] = 'Tere tulemast ' .$username . '!';
				$_SESSION['userid'] = $username;
				$_SESSION['login'] = true;
				
				if ($prev_loc == 'signup' || $prev_loc == ''){
					$prev_loc = 'welcome';
				}

				header('Location: '.$prev_loc);
				exit;
				
			} else {
				$_SESSION['message'] = 'Vale kasutajanimi või parool';
			}
		}
		else {
			$_SESSION['message'] = 'Mõlemad lahtrid peavad olema täidetud!';
		}
		
		header('Location: '.$default_loc);
		exit;
	}
}