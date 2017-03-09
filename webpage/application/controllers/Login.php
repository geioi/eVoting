<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		session_start();
		if(!empty($_SESSION['message'])) {
			$message = $_SESSION['message'];
		}
		else{
			$message = 'Siin saate sisse logida';
		}
		
		$this->load->view('header');
		$data['message'] = $message;
		$this->load->view('login', $data);
	}
}