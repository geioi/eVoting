<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tulemused extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION)) { 
        session_start(); 
		} 
		
		$_SESSION['prev_loc'] = 'tulemused';
		$title['title'] = lang('title_results');
		
		if (!isset($_SESSION['userid'])){	
			$this->load->view('header',$title);
		}
		else {
			$this->load->view('loggedinheader',$title);
		}
		
		$this->load->view('tulemused');
	}
}
