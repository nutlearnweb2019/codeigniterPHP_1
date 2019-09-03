<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
		$this->load->view('Form_view');	
    }
    
    public function show_Form()
	{
        $data = array(
            'name' => $this->input->post('name'),
            'lastname' => $this->input->post('lastname')
        );
       
        $this->load->view('data_Form_view',$data);

        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
	}

}