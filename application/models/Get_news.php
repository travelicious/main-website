<?php  
   class Get_news extends CI_Model  
   {  
      public function fetch_data()  
      {  
         //data is retrive from this query  
        // $query = $this->db->get('news');  

         $query = $this->db->query("select * from news order by id desc");
         return $query;  
      }  



     /* public function fetch_item()  
      {  
         //data is retrive from this query  
        // $query = $this->db->get('news');  
         $id = @$_GET['id'];

         //echo '123';
         $query = $this->db->query("select * from news where id = '$id'");
         return $query; 
         //select* from blogs
      }*/

      public function fetch_item()
      {
         $id= $_GET['id'];
         $query = $this->db->query("select * from news where id = '$id'");
         return $query; 
      }

      /*public function fetch_library()
      {
         $query = $this->db->query("select * from images");
         return $query;  
      }*/

      public function front_fetch_data()  
      { 
         $query = $this->db->query("select * from news order by id desc limit 0,9");
         return $query; 
      } 

      public function single_news_data()  
      { 
        $id = $_GET['id'];
         $query = $this->db->query("select * from news where id= '$id'");
         return $query; 
      } 

      public function single_news_data2()  
      { 
        $id = $_GET['id'];
         $query = $this->db->query("select * from news_comment where news_id= '$id'");
         return $query; 
      } 

      public function fetch_photo()  
      { 
         $query = $this->db->query("select * from images order by id desc");
         return $query; 
      }


   }  


?>