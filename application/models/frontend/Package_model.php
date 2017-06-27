<?php
class Package_model extends CI_Model{

function __construct() {
parent::__construct();
}
  public function best_package_fetch()  
  {
 $query = $this->db->query("select packages.*,packages_destination.destination_id,destination.title from packages,packages_destination,destination where packages.id = packages_destination.package_id  and destination.id = packages_destination.destination_id");
 return $query;

  	


         // $query = $this->db->query("select * from packages order by id desc limit 6 ");
         // return $query;  
      }  
}


?>