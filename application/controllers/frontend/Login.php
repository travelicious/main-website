<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends FrontendController
{

	public function index()
	{
		$this->load->view('frontend/login');
	}

	
}


?>