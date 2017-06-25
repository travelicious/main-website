<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends FrontendController {

    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Home_model');
    }

    public function index() {
        $this->data['dest_list'] = $this->Home_model->fetch_destination_list();

        $this->load->view('frontend/index', $this->data);
    }
    
    public function searched_package() {
        
       $dst_id =  $this->input->post('dest_name');
       $this->data['package_list'] = $this->Home_model->fetch_package_by_destination($dst_id);
//    echo '<pre>';   print_r($this->data['package_list']); exit;
       $this->load->view('frontend/search-result', $this->data);
        
    }

   
}
