<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('my_css');
		$this->load->view('Home_view');
		$this->load->view('my_jquery');	
	 }
}
