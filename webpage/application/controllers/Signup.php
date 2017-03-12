<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION)) { 
			session_start(); 
			} 
		if(!empty($_SESSION['message'])) {
			$message = $_SESSION['message'];
		}
		else{
			$message = 'Registreeri kasutajaks';
		}
		
		$_SESSION['prev_loc'] = 'signup';
		
		$this->load->view('header');
		$msg['message'] = $message;
		$this->load->view('signup',$msg);
	}
}