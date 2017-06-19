<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends BackendController {

    public function view_services() {
        $data['page_title'] = 'Services';
        $this->load->model('admin/services_model');
        $data['fetch_data'] = $this->services_model->get_data_byid();
        $data['body_view'] = 'admin/inclusion_exclusion/services';
        $this->load->view('admin/layouts/home', $data);
    }

    public function add_services() {
        $data['page_title'] = 'Add Services';
        $this->load->view('admin/layouts/JS_Include');
        $data['body_view'] = 'admin/inclusion_exclusion/add_services';
        $this->load->view('admin/layouts/home', $data);
    }

    public function add_services_data() {

        if (isset($_POST['edit'])) {
            $edit_id = $this->input->post('service_id');
            $service_name = $this->input->post('service_name');

            $this->db->query("update services set service_name = '$service_name' where id = $edit_id");
            $this->view_services();
        } elseif (isset($_POST['submit'])) {
            $data = array(
                'service_name' => $this->input->post('service_name'),
            );
            $this->db->insert('services', $data);

            $this->view_services();
        }
    }

    public function delete_services($id) {
        $this->db->query("delete from services where id = $id");
        $this->view_services();
    }

    public function edit_services($id) {
        $this->load->model('admin/services_model');
        $data['srchd_data'] = $this->services_model->get_data_for_update($id);
        $data['page_title'] = 'Edit Services';
        $this->load->view('admin/layouts/JS_Include');
        $data['body_view'] = 'admin/inclusion_exclusion/add_services';
        $this->load->view('admin/layouts/home', $data);
    }

}
