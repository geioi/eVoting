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
				$_SESSION['message'] = lang('please_log');
                header ("Location: login");
            }
			else{
				$this->load->view('loggedinheader',$title);
				$this->load->view('haaleta');
			}
		
	}
	
	public function checkvote(){
		$this->load->model('KandideeriHaaleta');
		foreach ($this->KandideeriHaaleta->getInfo($_POST['email']) as $info) {
			if ($info->id == $_POST['id']) {
				echo "midagiMuud";
				return;
			}
		}
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
