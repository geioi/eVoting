<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Haaleta extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('haaleta');
	}
}
