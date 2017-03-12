<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		
		header ('Location: welcome');
	}
}
?>