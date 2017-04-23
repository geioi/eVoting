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
			$data['title'] = lang('title_vote');
			
            if (!isset($_SESSION['login'])){	
				$_SESSION['message'] = lang('please_log');
                header ("Location: login");
            }
			else{
				if ($this->checkVote($_SESSION['person_id'])) {
					$data['voted'] = true;
				}else {
					$data['voted'] = false;
				}
			
			$data['vote'] = $this->KandideeriHaaleta->checkIfVoted($_SESSION['person_id']);
				
			$this->load->model('candidates');
			$data['kandidaadid'] = $this->candidates->getData();
			
			$this->load->view('loggedinheader',$data);
			$this->load->view('haaleta');
			$this->load->view('footer');		
			}
		
	}
	
	public function checkVote($id){
		$this->load->model('KandideeriHaaleta');
		if($this->KandideeriHaaleta->checkIfVoted($id) == '0') {
			return false;
		}else {
			return true;
		}
	}
	
	public function cancelVote() {
		$this->load->model('KandideeriHaaleta');
		$votedFor = $this->KandideeriHaaleta->checkIfVoted($_POST['id']);
		$this->KandideeriHaaleta->RemoveVote($votedFor);
		$this->KandideeriHaaleta->cancelVote($_POST['id']);
	}
	
	public function handVote() {
		$this->load->model('KandideeriHaaleta');
		$this->KandideeriHaaleta->markVoted($_POST['id'],$_POST['vote']);
		$this->KandideeriHaaleta->updateVoteCount($_POST['vote']);
	}
	
}	
		