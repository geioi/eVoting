<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){
		if(!isset($_SESSION)) { 
			session_start(); 
		} 
		
		$this->load->model('Registreeri');
		
		//checking for errors
		if (!isset($_POST['sugu'])){
			$_SESSION['message'] = 'Sugu jäi valimata';
		}
		
		elseif (strlen($_POST['isikukood']) != 11 || !ctype_digit($_POST['isikukood'])) {
			$_SESSION['message'] = 'Isikukood sisestati valel kujul';
		}
		
		elseif (!ctype_digit($_POST['date']) || !ctype_digit($_POST['month']) || !ctype_digit($_POST['year'])
		|| ($_POST['date'] > 31 || $_POST['date'] < 1) || ($_POST['month'] > 12 || $_POST['month'] < 1)
		|| ($_POST['year'] > date("Y"))){
			$_SESSION['message'] = 'Vigane kuupäeva sisend';
		}
		
		elseif ($_POST['parool'] != $_POST['parool_uuesti']) {
			$_SESSION['message'] = 'Paroolid ei ühti';
		}
		
		elseif (!($this->Registreeri->checkEmail($_POST['email']))){
			$_SESSION['message'] = 'Email on juba kasutusel!';
		}
		
		elseif (!($this->Registreeri->checkPerson_id($_POST['isikukood']))){
			$_SESSION['message'] = 'Sellise isikukoodiga kasutaja on juba olemas!';
		}
		
		else {
			$email = $_POST['email'];
			$firstname = $_POST['eesnimi'];
			$lastname = $_POST['perekonna_nimi'];
			$person_id = $_POST['isikukood'];
			$password = hash('sha512', $_POST['parool']);
			$birthdate = $_POST['date'] ."/". $_POST['month'] ."/". $_POST['year'];
			if ($_POST['sugu'] == 'Muu'){
				$gender = $_POST['sugu_muu'];
			}else {
				$gender = $_POST['sugu'];
			}
			
			$_SESSION['message'] = 'Registreerumine õnnestus!';
		}
		
		header('Location: signup');
	}
}
?>
