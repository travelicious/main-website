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



// public function add_blog() {
// //Including validation library
// $this->load->library('form_validation');

// $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

// //Validating url Field
// $this->form_validation->set_rules('url', 'URL', 'required');

// //Validatingtitle Field
// $this->form_validation->set_rules('title', 'Title', 'required');

// //Validating Description. Field
// $this->form_validation->set_rules('description', 'Description', 'required');

// $this->form_validation->set_rules('files', 'Files', 'required');


              

// 	 $this->load->library('upload');

//    $this->upload->do_upload('files');

//   $test = $this->upload->data();


// if ($this->form_validation->run() == FALSE) {
//   $this->load->view('admin/blogs/add_blog');
//   } 
//   else {
//           //Setting values for tabel columns
//           $data = array(
//           'url' => $this->input->post('url'),
//           'title' => $this->input->post('title'),
//           'image' => $test['file_name'],
           
//           'description' => $this->input->post('description'),
//           'author' => $this->input->post('author')
//           );
//           //Transfering data to Model
//           $this->Blog_model->form_insert($data);
//           //Loading View
//           $this->load->view('admin/blogs/add_blog', $data);


//           redirect('admin/blogs');
//           }
// }
	public function index()



 	{  

  	
  	//$this->load->model('Blog');

 		$data["fetch_data"]=$this->Blog_model->fetch_data();


		$this->load->view('admin/blogs/blogs',$data);

 	}



public function delete_blog()
    {
        $id = $_GET['id'];
        $queryDelete = $this->db->query("DELETE FROM blogs WHERE id= '$id' ");

        redirect('admin/blogs');
    }
}
?>