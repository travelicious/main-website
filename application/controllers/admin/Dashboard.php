<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends BackendController {

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
        $data['page_title'] = 'Dashboard';
        $this->load->model('Get_news');
        $this->load->model('admin/Blog_model');
        $this->load->model('admin/Category_model');
        $this->load->model('admin/Destination_model');
        $this->load->model('admin/Photos_model');
        $this->load->model('admin/Packages_model');

        $data['fetch_news']= $this->Get_news->fetch_data();
        $data['fetch_data']= $this->Blog_model->fetch_data();
        $data['fetch_category']= $this->Category_model->get_category_data();
        $data['fetch_destination']= $this->Destination_model->get_all();
        $data['fetch_photo']= $this->Photos_model->photos_fetch();
        $data['fetch_package']= $this->Packages_model->get_all();

        $data['body_view'] = 'admin/Dashboard';
        $this->load->view('admin/layouts/home',$data);

        
       // $this->load->view('admin/dashboard',$data1);
    }

   /* public function dashboard()
    {
        $this->load->model('Get_news');
        $data['fetch_data']= $this->Get_news->fetch_data();
        $this->load->view('admin/dashboard/dashboard',$data);
    }*/
    
    
}
