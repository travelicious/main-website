<?php
class Blog_model extends CI_Model{
function __construct() {
parent::__construct();
}


  public function fetch_data()  
      {  
         //data is retrive from this query  
        // $query = $this->db->get('blogs'); 
         $query = $this->db->query("select * from blogs order by id desc limit 0,6"); 
         return $query;  
         //select* from blogs
      }  


//  function form_insert($data){
// // Inserting in Table(students) of Database(college)
// $this->db->insert('blogs', $data);
//  }

 public function insert()
    {
        if ( ! $this->upload->do_upload('files')) {
            echo $this->upload->display_errors();
        }
        else {
            $file_data = $this->upload->data();
        }

        $insert_data = Array (
            'url'           => $this->input->post('url'),

            'title'         => $this->input->post('title'),
         
            'image'         => $file_data['file_name'],

            'description'   => $this->input->post('description'),

            'meta_title'    => $this->input->post('meta_title'),

            'meta_robot'    => $this->input->post('meta_robot'),

       'meta_description'   => $this->input->post('meta_description'),

            'author'        => $this->input->post('author')
        );
  
        $this->db->insert('blogs',$insert_data);
    }

    public function single_blog_data()  
      {  
       
         $id= $_GET['id']; 
         $query = $this->db->query("select * from blogs where id= '$id' "); 

         return $query;  
         //select* from blogs
      } 

public function latest_blog_data()  
      {  
       
         $query = $this->db->query("select * from blogs order by id desc limit 3"); 

         return $query;  
         //select* from blogs
      }



public function comment_blog()  
      {  
       $id= $_GET['id'];
         $query = $this->db->query("select * from blog_comment where blog_id='$id' "); 

         return $query;  
         //select* from blogs
      }

public function comment()
    {

        $insert_data  = Array (
            'blog_id' =>$this->input->post('id'),
            'comment' => $this->input->post('message'),
            'name'    => $this->input->post('name'),
            'email'   => $this->input->post('email')
        );

        $this->db->insert('blog_comment',$insert_data);
    }





}
?>