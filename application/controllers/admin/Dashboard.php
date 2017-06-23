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
        //$this->load->model('Blog_model');
        $data['fetch_data']= $this->Get_news->fetch_data();
        //$data['fetch_data']= $this->Blog_model->fetch_data();
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
