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
		
		$this->load->model('Kandimodel');
		$data['complete'] = $this->Kandimodel->getData();
		$title['title'] = 'Kandidaadid';
		if (!(isset($_SESSION['login']) && $_SESSION['login'])){	
			$this->load->view('header',$title);
		}
		else {
			$this->load->view('loggedinheader',$title);
		}
		//$this->load->view('header',$title);
		$this->load->view('kandidaadid',$data);

	}
	public function kandidaadid() {
		$this->load->model('Kandimodel');
		$data['complete'] = $this->Kandidaadid->getData();
		$title['title'] = 'Kandidaadid';
		$this->load->view('header',$title);
		$this->load->view('kandidaadid',$data);
		
	}
}
