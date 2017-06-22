<?php
class Blogs extends BackendController
{

function __construct() 
{
      parent::__construct();
      $this->load->model('admin/Blog_model');
}




 public function add_blog()
    {
        /* We are now adding new packages to the database */
        $this->load->model('admin/Blog_model');
        if($this->input->post('submit'))
        {
            $this->Blog_model->insert();

           redirect('admin/blogs');
            //$data['posted_data'] = $this->input->post();
        }

        /* Loading the layout and the body layout is passed as name which will be loaded in view */
        $data['page_title'] = 'Add a Blog';
        $data['body_view'] = 'admin/blogs/add_blog';
        $this->load->view('admin/layouts/home',$data);


    }


	public function index()



 	{  

  	
  	//$this->load->model('Blog');

 		$data["fetch_data"]=$this->Blog_model->fetch_data();


		$this->load->view('admin/blogs/blogs',$data);

 	}
    

 public function post_comment()
    {
        /* We are now adding new comment to the database */
        $this->load->model('admin/Blog_model');
        if($this->input->post('comment'))
        {
            $this->Blog_model->comment();

           redirect('frontend/blogs/blog/single_blog');
            //$data['posted_data'] = $this->input->post();
        }

        /* Loading the layout and the body layout is passed as name which will be loaded in view */
        $data['page_title'] = 'Add a Blog';
        //$data['body_view'] = 'admin/blogs/add_blog';
        $this->load->view('frontend/blogs/single_blog',$data);


    }
	
	
	
	public function urlExistOrNot($url = null)
	{
	  if($url != null)
	  {
		$records = $this->db->select('*')
		                    ->where('url', $url)
                            ->get('blogs');
         							
        if($records->num_rows() > 0)
		{
		  echo "exist";	
		}
        else
		{
		  echo "notExist";	
		}			
	  }
      else
	  {
	    echo "";	  
	  }		  	
	}





}
?>