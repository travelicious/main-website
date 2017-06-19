<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends FrontendController{

	public function index()
	{

	$this->load->view('frontend/signup');
	}
}

?>