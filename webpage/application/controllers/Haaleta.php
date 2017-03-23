<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Haaleta extends CI_Controller {

	public function index()
	{
		define("someUnguessableVariable", "anotherUnguessableVariable");
            
			if(!isset($_SESSION)) { 
			session_start(); 
			} 
			
			$_SESSION['prev_loc'] = 'haaleta';
			$title['title'] = lang('title_vote');
			
            if (!isset($_SESSION['userid'])){	
				$_SESSION['message'] = 'Selle funktsionaalsuse kasutamiseks peate olema sisse logitud!';
                header ("Location: login");
            }
			else{
				$this->load->view('loggedinheader',$title);
				$this->load->view('haaleta');
			}
		
	}
}
