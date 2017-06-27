<?php
class Packages_model extends CI_Model{
function __construct() {
parent::__construct();
}


  public function fetch_packages()  
      {  
         //data is retrive from this query  
        // $query = $this->db->get('blogs'); 
        // $query = $this->db->query("select * from packages order by id desc limit 0,6"); 
         $query = $this->db->query("select packages.*,packages_destination.destination_id,destination.title from packages,packages_destination,destination where packages_destination.package_id = packages.id and destination.id = packages_destination.destination_id"); 
         return $query;  
         //select* from blogs
      }  

}
?>

