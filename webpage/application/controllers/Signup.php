<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		session_start();
		
		$_SESSION['prev_loc'] = 'signup';
		
		$this->load->view('header');
		$this->load->view('signup');
	}
}