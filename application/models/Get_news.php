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

      public function front_latest_news()  
      { 
         $query = $this->db->query("select * from news order by id desc limit 0,10");
         return $query; 
      } 

/*__________________ Most Views Count Alamgir ______________________________________________*/

      public function front_most_visited_news()  
      {  
        // $query = $this->db->query("select * from news limit 0,10");
         $query = $this->db->query("SELECT * from news ORDER BY view_count DESC LIMIT 5");
         return $query;  
      } 

/*__________________ Most Views Count Alamgir end ______________________________________________*/

      public function front_single_news($url)  
      { 
        //$id = $_GET['id'];
         $query = $this->db->query("select * from news where url= '$url'");
         return $query; 
      } 

      public function front_single_news_comment($url)  
      { 
       // $id = $_GET['id'];
         $query = $this->db->query("select * from news_comment  where url = '$url' order by id desc");
         return $query; 
      } 

      public function fetch_photo()  
      { 
         $query = $this->db->query("select * from images order by id desc");
         return $query; 
      }


/*__________________ Views Count Alamgir ______________________________________________*/

      public function view_counts($url)
      {
        // $id = $_GET['id']; 
         $queryUpdate = $this->db->query("UPDATE news SET view_count = view_count +1 where url = '".$url."'");
         return $queryUpdate; 
      }

/*__________________Views Count end ______________________________________________*/


   }  


?>