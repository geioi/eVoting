<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/Facebook/autoload.php';

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('user');
    }
	
	public function index()
	{
		
		if(!isset($_SESSION)) { 
			session_start(); 
		} 
		
		if(!empty($_SESSION['message'])) {
			$message = $_SESSION['message'];
		}
		else{
			$message = lang('login_txt');
		}
		
		$title['title'] = lang('title_login');
		
		$facebook = new Facebook\Facebook([
		  'app_id'  => '1096383263810215',
		  'app_secret' => '4186487fa0bb7b13599848528f94c5b2',
		]);
		
		$helper = $facebook->getRedirectLoginHelper();
		$permission = ['email'];
		$loginUrl = $helper->getLoginUrl(base_url() . 'index.php/Fb_callback', $permission);
		$data['loginUrl'] = $loginUrl;
		
		$data['message'] = $message;
		
		$this->load->view('header', $title);
		$this->load->view('login', $data);
		$this->load->view('footer');
		
	}
}