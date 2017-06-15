<?php  
   class Inclusion_exclusion_model extends CI_Model  
   {  
      public function fetch_data()  
      {   
        // $query = $this->db->get('news');  

         $query = $this->db->query("select * from inclusion_exclusion where type= 'inclusion' order by id desc");
         return $query;  
      }  


      public function fetch_item()  
      {  
        // $query = $this->db->get('news');  

         $query = $this->db->query("select * from inclusion_exclusion where type= 'exclusion' order by id desc");
         return $query;  
      } 


      public function fetch_value()  
      {  
        // $query = $this->db->get('news');  
         $id= $_GET['id'];
         $query = $this->db->query("select * from inclusion_exclusion where id='$id'");
         return $query;  
      } 


}