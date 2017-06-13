<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends BackendController {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('Get_news');
        $data['fetch_data']= $this->Get_news->fetch_data();

        $this->load->view('admin/news/news',$data);
    }



    public function add_news()
    {
        $this->load->view('admin/news/add_news');
    }



    public function submit_news()
    {
        $url = $_POST["url"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $author = $_POST["author"];
        $image_name = $_FILES['files']['name'];

        $target_dir = "assets/images/news/";
        $ext        = ".".pathinfo($image_name, PATHINFO_EXTENSION);
        $image = "dest_".uniqid().$ext;
        $target_file = $target_dir.$image;
        if(move_uploaded_file($_FILES['files']['tmp_name'],$target_file)){
       $queryInsert = $this->db->query("INSERT INTO `news` (`url`, `title`, `image`, `description`, `author`) VALUES ('$url', '$title', '$image_name', '$description', '$author');");
    }

        redirect('admin/news');

    }



    public function delete_news()
    {
        $id = $_GET['id'];
        $queryDelete = $this->db->query("DELETE FROM news WHERE id= '$id' ");

        redirect('admin/news');
    }


    public function edit_news()
    {

        $id = $_GET['id'];
        $url = $_POST["url"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $author = $_POST["author"];
        $image_name = $_FILES['files']['name'];

        $result = array( 'url'=>$URL,'title'=>$title,'description'=>$description, 'author'=>$author,'image'=>$image_name);
        $this->load->Get_news( $id , $result );
    }


}
