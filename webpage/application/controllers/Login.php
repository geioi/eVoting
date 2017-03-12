<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION)) { 
        session_start(); 
		} 
		
		if(!empty($_SESSION['message'])) {
			$message = $_SESSION['message'];
		}
		else{
			$message = 'Siin saate sisse logida';
		}
		
		$this->load->view('header');
		$msg['message'] = $message;
		$this->load->view('login', $msg);
	}
}