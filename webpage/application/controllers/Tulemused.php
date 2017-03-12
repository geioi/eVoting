<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tulemused extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION)) { 
        session_start(); 
		} 
		
		$_SESSION['prev_loc'] = 'tulemused';
		
		if (!(isset($_SESSION['login']) && $_SESSION['login'])){	
			$this->load->view('header');
		}
		else {
			$this->load->view('loggedinheader');
		}
		
		$this->load->view('tulemused');
	}
}
