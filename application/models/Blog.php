<?php  
   class Blog extends CI_Model  
   {  
      //we will use the select function  
      public function fetch_data()  
      {  
         //data is retrive from this query  
        // $query = $this->db->get('blogs'); 
         $query = $this->db->query("select * from blogs order by id desc"); 
         return $query;  
         //select* from blogs
      }  
   }  
?>  