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


      /*public function insert_data()
      {
        $query = $this->db->insert('news',@$data);
        return $query;
      }*/

   }  


?>