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
        $image_name = $_FILES['files']['name'];

        $target_dir = "assets/images/news/";
        $ext        = ".".pathinfo($image_name, PATHINFO_EXTENSION);
        $image = "dest_".uniqid().$ext;
        $target_file = $target_dir.$image;
        if(move_uploaded_file($_FILES['files']['tmp_name'],$target_file)){
       $queryInsert = $this->db->query("INSERT INTO `news` (`url`, `title`, `image`, `description`, `author`) VALUES ('$url', '$title', '$image_name', 'desc', 'alam');");
    }

redirect('<?php echo base_url();?>admin/News/news'); 

    }

}
