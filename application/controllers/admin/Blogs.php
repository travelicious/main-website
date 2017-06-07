<?php
class Blogs extends BackendController
{


function __construct() 
{
parent::__construct();
$this->load->model('Add_model');
}
public function add_blog() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating url Field
$this->form_validation->set_rules('url', 'URL', 'required');

//Validatingtitle Field
$this->form_validation->set_rules('title', 'Title', 'required');

//Validating Description. Field
$this->form_validation->set_rules('description', 'Description', 'required');

if ($this->form_validation->run() == FALSE) {
$this->load->view('admin/blogs/add_blog');
} else {
//Setting values for tabel columns
$data = array(
'url' => $this->input->post('url'),
'title' => $this->input->post('title'),
'image' => $this->input->post('image'),
'description' => $this->input->post('description'),
'author' => $this->input->post('author')
);
//Transfering data to Model
$this->Add_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('admin/blogs/add_blog', $data);
}
}
	public function index()
 	{  		$this->load->model('Blog');

 		$data["fetch_data"]=$this->Blog->fetch_data();


		$this->load->view('admin/blogs/blogs',$data);

 	}

 	public function edit_blog()
 	{

  $this->load->view('admin/blogs/edit_blog');


 	}

public function delete_blog()
    {
        $id = $_GET['id'];
        $queryDelete = $this->db->query("DELETE FROM blogs WHERE id= '$id' ");

        redirect('admin/blogs');
    }

}
?>