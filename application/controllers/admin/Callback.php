

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Callback extends BackendController {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/callback_model');
    }

    public function show_requested_data() {
        $data['page_title'] = 'Callback Requested';
        $data['req_data'] = $this->callback_model->get_callback_data();
        $data['body_view'] = 'admin/callback/callback_reqested';
        $this->load->view('admin/layouts/home', $data);
    }

    public function save_callback_request_formdata() {
        $callback_req_data = array(
        'name'=> $this->input->post('req_name'),
        'address'=>$this->input->post('req_cit'),
        'contact_number'=>$this->input->post('req_contact'),
        'email_id'=>$this->input->post('req_mail'),
        );
         $this->db->insert('callback_requested',$callback_req_data);
       
    }

}
