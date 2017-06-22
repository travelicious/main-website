<?php
class Blog extends FrontendController
{

public function index()
{




  $this->load->model('frontend/Blog_model');

 	$data["fetch_data"]=$this->Blog_model->fetch_data();

    //$data["latest_blog_data"]=$this->Blog_model->latest_blog_data($url);

    $data["comment_blog1"]=$this->Blog_model->comment_blog1();

	$this->load->view('frontend/blogs/blog',$data);


}

public function single_blog($url)
{



     $this->load->model('frontend/Blog_model');

 	$data["single_blog_data"]=$this->Blog_model->single_blog_data($url);



 	$data["latest_blog_data1"]=$this->Blog_model->latest_blog_data1($url);


 	$data["fetch_blog_comment"]=$this->Blog_model->fetch_blog_comment($url);


	$this->load->view('frontend/blogs/single_blog',$data);



}


 public function comment()
    {
        /* We are now adding new comment to the database */
        $this->load->model('frontend/Blog_model');
        if($this->input->post('comment'))
        {
            $this->Blog_model->comment();

           redirect('frontend/blog');
            //$data['posted_data'] = $this->input->post();
        }
    }


   public function add_comment()
    {
        /* We are now adding new comment to the database */
        $this->load->model('frontend/Blog_model');
        if($this->input->post('comment'))
        {
            $this->Blog_model->comment();

           redirect('frontend/blog');
            //$data['posted_data'] = $this->input->post();
        }

     


    }




}

?>