<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Packages_model extends CI_Model {

    public function get_all() {
        $this->db->where('flag', 1);
        $query = $this->db->get('packages');
        return $query->result();
    }

    public function get_package_by_destination($destination_id) {
        $this->db->select('p.*');
        $this->db->where('p.flag', 1);
        $this->db->where('d.id', $destination_id);
        $this->db->from('packages as p');
        $this->db->join('packages_destination as pd', 'pd.package_id = p.id');
        $this->db->join('destination as d', 'pd.destination_id = d.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert() {
        if (!$this->upload->do_upload('package_image')) {
            echo $this->upload->display_errors();
        } else {
            $file_data = $this->upload->data();
        }

        $insert_data = Array(
            'url' => $this->input->post('package_url'),
            'title' => $this->input->post('package_title'),
            'duration' => $this->input->post('package_duration'),
            'image' => $file_data['file_name'],
            'description' => $this->input->post('package_description'),
            'meta_title' => $this->input->post('package_meta_title'),
            'meta_robots' => $this->input->post('package_meta_robots'),
            'meta_description' => $this->input->post('package_meta_description'),
            'price' => $this->input->post('package_price')
        );
        $this->db->insert('packages', $insert_data);
    }

    public function fetch_services_details() {

        $service_data = $this->db->query("select * from services order by service_name")->result();
        return $service_data;
    }

    public function fetch_category_details() {
        $category_name = $this->db->query("select * from category order by category_name ")->result();
        return $category_name;
    }
    public function fetch_destination_details() {
        $dest_data = $this->db->query("select * from destination order by title ")->result();
        return $dest_data;
    }

}
