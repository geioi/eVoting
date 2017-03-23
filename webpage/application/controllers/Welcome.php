<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	
	{	
		if(!isset($_SESSION)) { 
        session_start(); 
		} 
		
		//holds in memory which page the user comes from when logging in
		$_SESSION['prev_loc'] = 'welcome';
		$title['title'] = lang('title_index');
		
		if (!isset($_SESSION['userid'])){	
			$this->load->view('header',$title);
		}
		else {
			$this->load->view('loggedinheader',$title);
		}
		
		//mapsi jaoks vajalik
		$this->load->library('googlemaps');
		$config['center'] = '58.379, 26.715';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);
		
		$marker = array();
		$marker['position'] = '58.37824850000001, 26.71467329999996';
		$this->googlemaps->add_marker($marker);
		
		$marker = array();
		$marker['position'] = '58.3812369, 26.72069970000007';
		$this->googlemaps->add_marker($marker);
		
		$data['map'] = $this->googlemaps->create_map();
		
		$this->load->view('avaleht',$data);
	}
}
