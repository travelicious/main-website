<?php
class Blog extends FrontendController
{

public function index()
{


  $this->load->model('admin/Blog_model');

 	$data["fetch_data"]=$this->Blog_model->fetch_data();

	$this->load->view('frontend/blogs/blog',$data);


}

public function single_blog()
{


     $this->load->model('admin/Blog_model');

 	$data["single_blog_data"]=$this->Blog_model->single_blog_data();



 	$data["latest_blog_data"]=$this->Blog_model->latest_blog_data();


 	$data["comment_blog"]=$this->Blog_model->comment_blog();


	$this->load->view('frontend/blogs/single_blog',$data);



}


 public function add_comment()
    {
        /* We are now adding new comment to the database */
        $this->load->model('admin/Blog_model');
        if($this->input->post('comment'))
        {
            $this->Blog_model->comment();

           redirect('frontend/blog');
            //$data['posted_data'] = $this->input->post();
        }

        // /* Loading the layout and the body layout is passed as name which will be loaded in view */
        // $data['page_title'] = 'Add a Blog';
        // //$data['body_view'] = 'admin/blogs/add_blog';
        // $this->load->view('frontend/blogs/single_blog',$data);


    }


}

?>