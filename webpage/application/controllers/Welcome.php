<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(!isset($_SESSION)) { 
        session_start(); 
		} 
		
		//holds in memory which page the user comes from when logging in
		$_SESSION['prev_loc'] = 'welcome';
		
		if (!(isset($_SESSION['login']) && $_SESSION['login'])){	
			$this->load->view('header');
		}
		else {
			$this->load->view('loggedinheader');
		}
		
		$this->load->view('avaleht');
	}
}
