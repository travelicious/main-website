<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages_model extends CI_Model {

    public function get_all()
    {
        $this->db->where('flag',1);
        $query = $this->db->get('packages');
        return $query->result();
    }

    public function get_package_by_destination($destination_id)
    {
        $this->db->select('p.*');
        $this->db->where('p.flag',1);
        $this->db->where('d.id',$destination_id);
        $this->db->from('packages as p');
        $this->db->join('packages_destination as pd','pd.package_id = p.id');
        $this->db->join('destination as d','pd.destination_id = d.id');
        $query = $this->db->get();
        return $query->result();
    }
}
