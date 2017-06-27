<?php
class Blog_model extends CI_Model{
function __construct() {
parent::__construct();
}


  public function fetch_data()  
      {  
    
         $query = $this->db->query("select * from blogs order by id desc limit 0,4"); 
         return $query;  
      }  


    public function single_blog_data($url)  
      {  
       

         $query = $this->db->query("select * from blogs where url= '$url' "); 

         return $query;  
         
      } 

   

      public function latest_blog_data1($url)  
      {  
       
         $query = $this->db->query("select * from blogs order by id desc limit 0,5"); 

         return $query;  
         //select* from blogs
      }






      public function comment_blog1()  
      {  
         $query = $this->db->query("select * from blog_comment order by id desc limit 0,3 "); 

         return $query;  
         //select* from blogs
      }



public function fetch_blog_comment($url)  
      {  
   //$id = $_GET['$id'];

         $query = $this->db->query("select * from blog_comment where url='$url' "); 

         return $query;  
         //select* from blogs
      }

public function comment()
    {

        $insert_data  = Array (
            'url' =>$this->input->post('url'),
            'comment' => $this->input->post('message'),
            'name'    => $this->input->post('name'),
            'email'   => $this->input->post('email')
        );

        $this->db->insert('blog_comment',$insert_data);
    }





}
?>