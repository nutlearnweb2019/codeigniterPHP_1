<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CItest extends CI_Controller {

	public function index()
	{
		$this->load->view('Hello_view');	
	 }
}
