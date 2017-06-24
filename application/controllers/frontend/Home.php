<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Home extends FrontendController
 {

 	public function index()
 	{

   $this->load->model('frontend/Package_model');

 	$data["package_fetch"]=$this->Package_model->best_package_fetch();

	$this->load->view('frontend/home',$data);
 	}
 }


?>