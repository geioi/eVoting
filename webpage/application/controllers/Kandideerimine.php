<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandideerimine extends CI_Controller {
	public function index() {
		$this->load->model('KandideeriHaaleta');
		
		$partei = $_POST['partei'];
		$maakond = $_POST['maakond'];
		
		if (preg_match('#[0-9]#',$partei) || preg_match('#[0-9]#',$maakond)) {
			$_SESSION['message'] = lang('badFields');
		}
		
		elseif (!empty($this->KandideeriHaaleta->checkCandidacy($_SESSION['email']))){
			$_SESSION['message'] = lang('badCandidacy');
		}
		
		else{
			$firstname = '';
			$lastname = '';
			$id = '';
			$person_id = '';
			
			foreach($this->KandideeriHaaleta->getInfo($_SESSION['email']) as $info) {
				$firstname = $info->firstname;
				$lastname = $info->lastname;
				$id = $info->id;
				$person_id = $info->person_id;
			}
			
			$this->KandideeriHaaleta->registreeriKandidaat($id,$firstname,$lastname,$partei,$maakond, $person_id);
			
			$_SESSION['message'] = lang('register_success');
		}
		
		header('Location: kandideeri');
		exit;
	}
}