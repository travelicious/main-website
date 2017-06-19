<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends BackendController {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        /* We are loading model for the package. We have different model for package , news, blogs etc */
        $this->load->model('admin/packages_model');

        /* We are loading model for the Destination. */
        $this->load->model('admin/destination_model');
        $data['all_destination'] = $this->destination_model->get_all();

        if($this->input->get('destination'))
        {
            $destination_id = $this->input->get('destination');
            $data['all_packages'] = $this->packages_model->get_package_by_destination($destination_id);
        }
        else
        {
            $data['all_packages'] = $this->packages_model->get_all();
        }


        $data['page_title'] = 'Package List';

        //this is center body view passed as variable
        $data['body_view'] = 'admin/packages/home';


        // this is default layout without the center body , center body is passed with the variable body_view
        $this->load->view('admin/layouts/home',$data);
    }

    public function add()
    {
        /* We are now adding new packages to the database */
        $this->load->model('admin/packages_model');
        if($this->input->post('submit'))
        {
            $this->packages_model->insert();
            $data['posted_data'] = $this->input->post();
        }


        /* Loading the layout and the body layout is passed as name which will be loaded in view */
        $data['page_title'] = 'Add a Package';

        $data['body_view'] = 'admin/packages/add';


        $this->load->view('admin/layouts/home',$data);

    }



}
