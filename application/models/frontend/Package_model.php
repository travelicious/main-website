<?php
class Package_model extends CI_Model{

function __construct() {
parent::__construct();
}
  public function best_package_fetch()  
  {
         $query = $this->db->query("select * from packages order by id desc limit 6 ");
         return $query;  
      }  
}


?>