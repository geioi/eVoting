<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('user');
    }
	
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
		
		$title['title'] = lang('title_login');
		
		$this->load->view('header',$title);
		$msg['message'] = $message;
		$this->load->view('login', $msg);
	}
}