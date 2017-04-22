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
		$this->load->model('candidates');
		$data['complete'] = $this->candidates->getData();
		$data['maakonnad'] = $this->candidates->getMaakonnad();
		$data['parteid'] = $this->candidates->getParteid();
		$data['genderid'] = $this->candidates->getGender();
		
		$data['kõikKandidaadid'] = json_encode($this->candidates->getData());
		
		foreach ($data['maakonnad'] as $maakond){
			$data[$maakond->maakond] = json_encode($this->candidates->getByMaakond($maakond->maakond));
		}
		
		foreach ($data['parteid'] as $partei){
			$data[str_replace(" ", "", $partei->partei)] = json_encode($this->candidates->getByPartei($partei->partei));
		}
		
		foreach ($data['genderid'] as $gender){
			$data[str_replace(" ", "", $gender->gender)] = json_encode($this->candidates->getByGender($gender->gender));
		}
		
		if (!isset($_SESSION['userid'])){	
			$this->load->view('header',$title);
		}
		else {
			$this->load->view('loggedinheader',$title);
		}
		
		$this->load->view('tulemused',$data);
		$this->load->view('footer');
	}
}
