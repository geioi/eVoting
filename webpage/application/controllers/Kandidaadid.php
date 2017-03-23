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
		$title['title'] = lang('title_candidates');
		
		$this->load->model('candidates');
		$data['complete'] = $this->candidates->getData();
		$data['total'] = $this->candidates->getTotalCandidates();
		if (!isset($_SESSION['userid'])){	
			$this->load->view('header',$title);
		}
		else {
			$this->load->view('loggedinheader',$title);
		}
		$this->load->view('kandidaadid',$data);

	}
}
