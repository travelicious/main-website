<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

     function fetch_destination_list() {
        $query = $this->db->query("SELECT id,title FROM destination")->result();
        
        return $query;
    }
     function fetch_package_by_destination($dst_id) {
         $package_list = $this->db->query("select packages.*, packages_destination.package_id "
                 . "from packages, packages_destination "
                 . "where packages.id = packages_destination.package_id and packages_destination.destination_id = $dst_id")->result();
         return $package_list;
        
    }

}
