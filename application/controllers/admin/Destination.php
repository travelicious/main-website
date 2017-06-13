<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$date = date_default_timezone_set('Asia/Kolkata');
$dt = date('Y-m-d H:i:s');      
define('datetimes', $dt);

class Destination extends BackendController {

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
        $this->load->view('admin/destination');
    }
    
    public function destination_edit()
    {
        $this->load->view('admin/destination_edit');
    }

    public function destination_add()
    {
        $this->load->view('admin/destination_add');
    }


    public function changestatus()
    {
        $data = $_REQUEST['data'];
        
        echo json_decode($data);

        exit;
        // echo $_POST['id'];
        // echo " ".$flag;

    }

    public function submitDestination()
    {
        $datetimes=datetimes;
        $title = addslashes($_REQUEST['title']);
        $url = addslashes($_REQUEST['url']);
        $description = addslashes($_REQUEST['description']);
        $image_name = $_FILES['image']['name'];
        $meta_title = addslashes($_REQUEST['meta_title']);
        $meta_robots = addslashes($_REQUEST['meta_robots']);
        $meta_description = addslashes($_REQUEST['meta_description']);
        $target_dir = "assets/images/destination/";
        $ext        = ".".pathinfo($image_name, PATHINFO_EXTENSION);
        $image = "dest_".uniqid().$ext;
        $target_file = $target_dir.$image;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){

            $insertdestination = $this->db->query("INSERT INTO `destination` (`url`, `title`, `image`, `description`, `meta_title`, `meta_robots`, `meta_description`, `created_at`, `flag`) VALUES ('$url', '$title', '$image', '$description', '$meta_title', '$meta_robots', '$meta_description', '$datetimes', '1')");
            if($insertdestination==true)
            {
                echo "1";
            }else
            {
                echo "3";
            }
        }else{
            echo "2";
        }
    }
    public function updateDestination()
    {
        $datetimes=datetimes;
        $title = addslashes($_REQUEST['title']);
        $id = addslashes($_REQUEST['id']);
        $url = addslashes($_REQUEST['url']);
        $description = addslashes($_REQUEST['description']);
        $meta_title = addslashes($_REQUEST['meta_title']);
        $meta_robots = addslashes($_REQUEST['meta_robots']);
        $meta_description = addslashes($_REQUEST['meta_description']);
        $target_dir = "assets/images/destination/";
     if($_FILES['image']['name']!="")
     {
        $image_name = $_FILES['image']['name'];
        $ext  = ".".pathinfo($image_name, PATHINFO_EXTENSION);
        $image = "dest_".uniqid().$ext;
        $target_file = $target_dir.$image;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){

            $insertdestination = $this->db->query("UPDATE `destination` SET `url` = '$url', `title` = '$title', `image` = '$image', `description` = '$description', `meta_title` = 'meta_title', `meta_robots` = 'meta_robots', `meta_description` = '$meta_description', `modified_at` = '$datetimes' WHERE `destination`.`id` = ".$id);
            if($insertdestination==true)
            {
                echo "1";
            }else
            {
                echo "3";
            }
        }else{
            echo "2";
        }
    }else{

            $insertdestination = $this->db->query("UPDATE `destination` SET `url` = '$url', `title` = '$title', `description` = '$description', `meta_title` = 'meta_title', `meta_robots` = 'meta_robots', `meta_description` = '$meta_description', `modified_at` = '$datetimes' WHERE `destination`.`id` = ".$id);

            if($insertdestination==true)
            {
                echo "1";
            }else
            {
                echo "3";
            }

    }

        // echo "test submition";

}
}