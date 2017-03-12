<?php defined('BASEPATH') OR exit('No direct script access allowed');
class fblogin extends CI_Controller
{
    function __construct() {
		parent::__construct();
		$this->load->model('user');
    }
    
    public function index(){
		
		if(!isset($_SESSION)) { 
			session_start(); 
			} 
			
		$data['prev_loc'] = $_SESSION['prev_loc'];

		include_once APPPATH."libraries/facebook-php-sdk-master/facebook.php";
		
		$facebook = new Facebook(array(
		  'appId'  => '1096383263810215',
		  'secret' => '4186487fa0bb7b13599848528f94c5b2',
		  'cookie' => true
		));
		
		$user = $facebook->getUser();
		
        if ($user) {
			$userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
			$userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
			$userData['gender'] = $userProfile['gender'];
			$userData['locale'] = $userProfile['locale'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
			
            $userID = $this->user->checkUser($userData);
			echo (empty($userID));
            if(!empty($userID)){	
                $data['userData'] = $userData;
				$_SESSION['userid'] = $userProfile['first_name'].' '.$userProfile['last_name'];	
            } else {
				$data['userData'] = array();
            }
			$this->load->view('loggedinheader',$data);
        } else {
			$this->load->view('header');
			$user = '';
            $data['authUrl'] = $facebook->getLoginUrl(array('redirect_uri'=>base_url().'index.php/fblogin','scope'=>'email'));
        }
		$this->load->view('fblogin',$data);
    }
}
