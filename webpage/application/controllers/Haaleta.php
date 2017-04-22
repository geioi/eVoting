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
			
            if (!isset($_SESSION['login'])){	
				$_SESSION['message'] = lang('please_log');
                header ("Location: login");
            }
			else{
				$this->load->view('loggedinheader',$title);
				$this->load->view('haaleta');
				$this->load->view('footer');
			}
		
	}
	
	public function checkvote(){
		$this->load->model('KandideeriHaaleta');
		if($this->KandideeriHaaleta->checkIfVoted($_POST['email']) == '0') {
			if (!empty($this->KandideeriHaaleta->checkCandidates($_POST['id']))){
				$this->KandideeriHaaleta->markVoted($_POST['email']);
				$this->KandideeriHaaleta->updateVoteCount($_POST['id']);
				echo false;
			} 
			else{
				echo true;
			}
		}
		else{
			echo true;
		}
	}
	
}
