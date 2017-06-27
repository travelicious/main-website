<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination_model extends CI_Model {

    public function get_all()
    {
        $this->db->where('flag',1);
        $query = $this->db->get('destination');
        return $query->result();
    }
	
}
