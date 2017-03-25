<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/Facebook/autoload.php';
class Fb_callback extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('user');
    }
	
	public function index() {
		
		
		$fb = new Facebook\Facebook([
		  'app_id'  => '1096383263810215',
		  'app_secret' => '4186487fa0bb7b13599848528f94c5b2',
		]);
		
		// Get the FacebookRedirectLoginHelper
		$helper = $fb->getRedirectLoginHelper();

	try {
		$accessToken = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	if (isset($accessToken)) {
		$_SESSION['facebook_access_token'] = (string) $accessToken;
		
		try {
			$response = $fb->get('/me?fields=id,first_name,last_name,name,email,gender', $accessToken);
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		}catch(Facebook\Exceptions\FacebookSDKException $e) {
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}
		
		$user = $response->getGraphUser();
		if ($this->user->checkUser($user)) {
			$_SESSION['userid'] = $user['name'];
			$_SESSION['login'] = true;
			if (isset($_SESSION['prev_loc'])) {
				redirect($_SESSION['prev_loc']);
			}else {
				redirect('welcome');
			}
		}
    // Logged in
    // Store the $accessToken in a PHP session
    // You can also set the user as "logged in" at this point
	} elseif ($helper->getError()) {
    // There was an error (user probably rejected the request)
		echo '<p>Error: ' . $helper->getError();
		echo '<p>Code: ' . $helper->getErrorCode();
		echo '<p>Reason: ' . $helper->getErrorReason();
		echo '<p>Description: ' . $helper->getErrorDescription();
		exit;
}
	}
}
?>