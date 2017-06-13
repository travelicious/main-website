<?php  
   class Get_news extends CI_Model  
   {  
      public function fetch_data()  
      {  
         //data is retrive from this query  
        // $query = $this->db->get('news');  

         $query = $this->db->query("select * from news order by id desc");
         return $query;  
         //select* from blogs
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

      public function updateEvent($id, $result)
      {
        $this->db->where('id', $id);
        $this->db->update('news', $result);
      }



   }  


?>