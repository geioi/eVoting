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
		$this->load->model('Kandimodel');
		$data['complete'] = $this->Kandimodel->getData();
		$title['title'] = 'Kandidaadid';
		$this->load->view('header',$title);
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
