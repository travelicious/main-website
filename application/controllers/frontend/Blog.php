<?php
class Blog extends FrontendController
{

public function index()
{

  $this->load->model('admin/Blog_model');

 	$data["fetch_data"]=$this->Blog_model->fetch_data();

	$this->load->view('frontend/blogs/blog',$data);

}


}

?>