<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends BackendController {

    
    public function index()
    {
        $this->load->model('Get_news');
        $data['fetch_data']= $this->Get_news->fetch_data();

        $this->load->view('admin/news/news',$data);
    }



/* ________________________________________ Add News ________________________________  */

    public function add_news()
    {
        $this->load->model('Get_news');
        $data['fetch_photo']= $this->Get_news->fetch_photo();
        
        $this->load->view('admin/news/add_news',$data);
    }


/* ________________________________________ Add News end ________________________________  */


/* ________________________________________ Submit News Alamgir ________________________________  */

    public function submit_news()
    {
        $url = $_POST["url"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $author = $_POST["author"];
        $meta_title = $_POST['news_meta_title'];
        $meta_robots = $_POST['news_meta_robots'];
        $meta_description = $_POST['news_meta_description'];

        $image_name = $_FILES['files']['name'];

        $target_dir = "assets/images/news/";
        $ext        = ".".pathinfo($image_name, PATHINFO_EXTENSION);
        $image = uniqid().$ext;
        $target_file = $target_dir.$image;
        if(move_uploaded_file($_FILES['files']['tmp_name'],$target_file)){
       $queryInsert = $this->db->query("INSERT INTO `news` (`url`, `title`, `image`, `description`, `author`, `meta_title`, `meta_robots`, `meta_description`) VALUES ('$url', '$title', '$image', '$description', '$author', '$meta_title', '$meta_robots', '$meta_description');");
    }

        redirect('admin/news');

    }


/* ________________________________________ Submit News End ________________________________  */

/* ________________________________________ Delete News ________________________________  */

    public function delete_news()
    {
        $id = $_GET['id'];
        $queryDelete = $this->db->query("DELETE FROM news WHERE id= '$id' ");

        redirect('admin/news');
    }


/* ________________________________________ Delete News End________________________________  */


/* ________________________________________ Edit News________________________________  */

    public function edit_news()
    {

        $id = $_GET['id'];
        
        $this->load->model('Get_news');
       
        $data['fetch_item']= $this->Get_news->fetch_item();
        //exit;
        $this->load->view('admin/news/edit_news',$data);
    }


/* ________________________________________ edit News End________________________________  */


/* ________________________________________Save News ________________________________  */


    public function save_news()
    {
        $id = $_POST['id'];
       // echo $id;exit;
        $url = $_POST["url"];
        $title = $_POST["title"];
        $description = addslashes($_REQUEST["description"]);
        $author = $_POST["author"];
        $image_name = $_FILES['files']['name'];

        $target_dir = "assets/images/news/";
        $ext        = ".".pathinfo($image_name, PATHINFO_EXTENSION);
        $image = "news_".uniqid().$ext;
        $target_file = $target_dir.$image;
        move_uploaded_file($_FILES['files']['tmp_name'],$target_file);

        if ($image_name =="") {
              $this->db->query("UPDATE news SET url = '$url' , title = '$title' , description = '$description' , author = '$author'  where id = '".$id."'");
        }else{
       $queryUpdate = $this->db->query("UPDATE news SET url = '$url' , title = '$title' , description = '$description' , author = '$author' , image = '$image' where id = '".$id."'");
        }

        redirect('admin/news');
    }


/* ________________________________________Save News End________________________________  */

/* ________________________________________Add Photo ________________________________  */

    public function add_photo()
    {
        $this->load->view('admin/news/add_photo');
    }




    public function submit_photo()
    {

//echo "string";exit;
        $image_title = $_POST['image_title'];
        
        $errors= array();
        $desired_dir="assets/images/news/add_photo/";
       // $name= implode(',', $_FILES['files']['name']);
        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        $file_name = $key.$_FILES['files']['name'][$key];
        $file_tmp =$_FILES['files']['tmp_name'][$key];
        $file_type=$_FILES['files']['type'][$key]; 

        $ext        = ".".pathinfo($file_name, PATHINFO_EXTENSION);
        $image = "news_".uniqid().$ext;
       // $target_file = $target_dir.$image; 
        $queryInsert = $this->db->query("INSERT INTO `images` (`image_title`, `image_name`) VALUES ('$image_title', '$image')");
       // $desired_dir="assets/images/news/add_photo/";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);       
            }
            if(is_dir("$desired_dir/".$image)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$image);
            }else{                                 
                $new_dir="$desired_dir/".$image.time();
                 rename($file_tmp,$new_dir) ;               
            }
                
        }else{
                print_r($errors);
        }
     }

            //redirect('admin/news');
  }

/* ________________________________________Add Photo End ________________________________  */


/* ________________________________________ Library Start ________________________________  */


 public function library()
    {
        $this->load->model('Get_news');
        $data['fetch_library']= $this->Get_news->fetch_library();

        $this->load->view('admin/news/library',$data);
    }


/* ________________________________________ Library end ________________________________  */

}
