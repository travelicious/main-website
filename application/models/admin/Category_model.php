<!--created by Aditya-->
<?php

class Category_model extends CI_Model {

    public function get_category_data() {
        $catg_data = $this->db->query("select * from category order by id desc ")->result();
        return $catg_data;
    }

    public function get_data_for_update($id) {
        $catg_srchd = $this->db->query("select * from category where id = $id")->first_row();
        return $catg_srchd;
    }

}
