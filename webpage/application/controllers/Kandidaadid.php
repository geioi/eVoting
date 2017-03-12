<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidaadid extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');    
    }   

	public function index()
	{
		if(!isset($_SESSION)) { 
        session_start(); 
		} 
		
		$_SESSION['prev_loc'] = 'kandidaadid';
		
		$this->load->model('candidates');
		$data['complete'] = $this->candidates->getData();
		$data['total'] = $this->candidates->getTotalCandidates();
		if (!isset($_SESSION['userid'])){	
			$this->load->view('header');
		}
		else {
			$this->load->view('loggedinheader');
		}
		$this->load->view('kandidaadid',$data);

	}
}
