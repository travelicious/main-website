<!--created by Aditya-->
<?php  
   class Services_model extends CI_Model  
   {  
      public function get_data_byid()  
      {   

         $query = $this->db->query("select * from services order by id desc");
         return $query;  
      }  
      public function get_data_for_update($id) {
         $srch_query = $this->db->query("select * from services where id = $id")->first_row();
         return $srch_query;
      }


}