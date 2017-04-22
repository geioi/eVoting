<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller {
	public function index() {
		$title['title'] = lang("sitemap");
		if (isset($_SESSION['login'])){	
			$this->load->view('loggedinheader', $title);
		}else {
			$this->load->view('header', $title);
		}
		$this->load->view('sitemap');
		$this->load->view('footer');
	}
}