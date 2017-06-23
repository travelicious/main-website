<!--Created By Aditya-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends BackendController {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Category_model');
    }

    public function index() {
        $data['page_title'] = 'Category';
        $data['fetch_category'] = $this->Category_model->get_category_data();
        $data['body_view'] = 'admin/category/view';
        $this->load->view('admin/layouts/home', $data);
    }

    public function add_category() {
        $data['page_title'] = 'Add Category';
        $this->load->view('admin/layouts/JS_Include');
        $data['body_view'] = 'admin/category/add_category';
        $this->load->view('admin/layouts/home', $data);
    }

    public function edit_category($id) {
        $data['srchd_data'] = $this->Category_model->get_data_for_update($id);
        $data['page_title'] = 'Edit Services';
        $this->load->view('admin/layouts/JS_Include');
        $data['body_view'] = 'admin/category/add_category';
        $this->load->view('admin/layouts/home', $data);
    }

    public function add_category_proces() {

        if (isset($_POST['edit'])) {
            $edit_id = $this->input->post('cat_id');
            $category_name = $this->input->post('category_name');

            $this->db->query("update category set category_name = '$category_name' where id = $edit_id");
            $this->index();

//            end code for edit
//            code for add
        } elseif (isset($_POST['submit'])) {

            $catg_data = array(
                'category_name' => $this->input->post('category_name'),
            );

            $ok = $this->db->insert('category', $catg_data);
            if ($ok) {
                $this->index();
            }
        }
    }

    public function delete_category($c_id) {
        $ok_del = $this->db->query("delete from category where id  = $c_id");
        if ($ok_del) {
            redirect('admin/category');
        } 
    }

}
