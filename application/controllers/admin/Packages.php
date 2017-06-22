<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends BackendController {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/packages_model');
    }

    public function index() {
        /* We are loading model for the package. We have different model for package , news, blogs etc */
        $this->load->model('admin/packages_model');

        /* We are loading model for the Destination. */
        $this->load->model('admin/destination_model');
        $data['all_destination'] = $this->destination_model->get_all();

        if ($this->input->get('destination')) {
            $destination_id = $this->input->get('destination');
            $data['all_packages'] = $this->packages_model->get_package_by_destination($destination_id);
        } else {
            $data['all_packages'] = $this->packages_model->get_all();
        }


        $data['page_title'] = 'Package List';

        //this is center body view passed as variable
        $data['body_view'] = 'admin/packages/home';


        // this is default layout without the center body , center body is passed with the variable body_view
        $this->load->view('admin/layouts/home', $data);
    }

    public function add() {

//        fetch service list
        $data['service_list'] = $this->packages_model->fetch_services_details();

        /* Loading the layout and the body layout is passed as name which will be loaded in view */
        $data['page_title'] = 'Add a Package';

        $data['body_view'] = 'admin/packages/add';


        $this->load->view('admin/layouts/home', $data);
    }

    public function upload_package_img() {
        $config['upload_path'] = './assets/images';
        $config['allowed_types'] = '*';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('package_img')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $upload_data = $this->upload->data();
            $arr_image = array('upload_data' => $this->upload->data());
            $image = $upload_data['file_name'];
            $data = array(
                'image' => $image,
            );
            $ok = $this->db->insert('packages', $data);
            if ($ok) {
                echo $this->db->insert_id();
                ;
            }
        }
    }

    public function add_packages() {

        if ($this->input->post('submit')) {
          $pak_id = $this->input->post('imag_id');
            $url = $this->input->post('package_url');
            $title = $this->input->post('package_title');
            $duration = $this->input->post('package_duration');
            $description = $this->input->post('package_description');
            $meta_title = $this->input->post('package_meta_title');
            $meta_robots = $this->input->post('package_meta_robots');
            $meta_description = $this->input->post('package_meta_description');
            $price = $this->input->post('package_price');
            
        }
        $this->db->query("update  packages set url='$url', title = '$title',  duration = $duration, description = '$description', meta_title = '$meta_title', meta_robots = '$meta_robots', meta_description = '$meta_description', price = $price where id = $pak_id");;

        if (!empty($_POST['service'] != "")) {
            $serv = $_POST['service'];
            $pack_id = $this->input->post('imag_id');

            foreach ($serv as $val) {
                $sev_ar = array(
                    'service_id' => $val,
                    'package_id' => $pack_id,
                );
                print_r($sev_ar); 
                $this->db->insert('services_inclusion', $sev_ar);
            }
        }
    }

}
