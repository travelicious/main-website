<!--created by Aditya-->
<?php  
   class Callback_model extends CI_Model  
   {  
       public function get_callback_data() {
           
           $req_data = $this->db->query("select * from callback_requested order by id desc")->result();
           return $req_data;
           
       }


}