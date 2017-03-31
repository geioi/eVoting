<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandideeri extends CI_Controller {
			
	public function index()
	{
		define("someUnguessableVariable", "anotherUnguessableVariable");
            
			if(!isset($_SESSION)) { 
			session_start(); 
			} 
			
			$_SESSION['prev_loc'] = 'kandideeri';
			
			if(!empty($_SESSION['message'])) {
				$message = $_SESSION['message'];
			}
			else{
				$message = lang('candidacy_txt');
			}
			
			$data['message'] = $message;
			$title['title'] = lang('title_candidacy');
			
            if (!isset($_SESSION['userid'])){	
			//if (!($this->session->userdata('login'))) {
				$_SESSION['message'] = lang('please_log');
                header ("Location: login");
            }
			else{
				$this->load->view('loggedinheader',$title);
				$this->load->view('kandideeri',$data);
			}
	}
}
