<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandideeri extends CI_Controller {
			
	public function index()
	{
		define("someUnguessableVariable", "anotherUnguessableVariable");
            session_start();
			
			$_SESSION['prev_loc'] = 'kandideeri';
			
            if(!(isset($_SESSION['login']) && $_SESSION['login'])){
			//if (!($this->session->userdata('login'))) {
				$_SESSION['message'] = 'Selle funktsionaalsuse kasutamiseks peate olema sisse logitud!';
                header ("Location: login");
            }
			else{
				$this->load->view('loggedinheader');
				$this->load->view('kandideeri');
			}
	}
}
