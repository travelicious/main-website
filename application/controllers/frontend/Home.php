

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends FrontendController {

    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Home_model');
    }

    public function index() {
        $this->data['dest_list'] = $this->Home_model->fetch_destination_list();

        /**
          <!-- ____________________ Alamgir ________________ -->
         * Index Page for this controller.
         *
         * Maps to the following URL
         * 		http://example.com/index.php/welcome
         * 	- or -
         * 		http://example.com/index.php/welcome/index
         * 	- or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
        $this->load->model('Get_news');
        $data['fetch_news'] = $this->Get_news->fetch_data();
        $this->load->model('frontend/Blog_model');
        $data['fetch_blog'] = $this->Blog_model->fetch_data();
        $this->load->model('frontend/Packages_model');
        $data['fetch_packages'] = $this->Packages_model->fetch_packages();
        $this->load->view('frontend/index', $this->data);
    }

    public function categories() {
        $categories = $this->db->select('*')->get('category');
        $categories = $categories->result();
        if (!empty($categories)) {
            $data['categories'] = $categories;
            $this->load->view('frontend/categories', $data);
        }
    }

    public function getPackage() {
        $categoryId = $this->input->post('category');
        if (is_numeric($categoryId) && $categoryId > 0) {
            $results = $this->db->select('package_id')
                    ->where('category_id', $categoryId)
                    ->get('category_mapping');

            $results = $results->result();
            //print_r($results);
            if (!empty($results)) {
                foreach ($results as $result) {
                    $results1 = $this->db->select('*')
                            ->where('id', $result->package_id)
                            ->get('packages');
                    $results1 = $results1->result();
                    if (!empty($results1)) {
                        $data['packages'] = $results1;
                        $this->load->view('frontend/categories', $data);
                    }
                }
            }
        }
    }

    public function hotDealsOfADay() {
        $id = $this->db->select('id')
                ->where('category_name', 'Hot deals of a day')
                ->get('category');
        $id = $id->result();
        if (!empty($id) && count($id) == 1) {
            foreach ($id as $id1) {
                $id = $id1->id;
            }
            $packageIds = $this->db->select('package_id')
                    ->where('category_id', $id)
                    ->limit(6)
                    ->get('category_mapping');
            $packageIds = $packageIds->result();
            $data = array();
            $i = 0;
            if (!empty($packageIds)) {
                foreach ($packageIds as $packageId) {
                    $packages = $this->db->select('*')
                            ->where('id', $packageId->package_id)
                            ->get('packages');
                    $packages = $packages->result();
                    if (!empty($packages)) {
                        $i++;
                        $data['hotPackages'][$i] = $packages;
                    }
                }
            }
        }

        /* foreach($data['hotPackages'] as $hotPackages)
          {
          print_r($hotPackages);
          echo "<br>";
          } */

        $this->load->view('frontend/hot-deals', $data);
        }

    public function searched_package() {

        $dst_id = $this->input->post('dest_name');
        $this->data['package_list'] = $this->Home_model->fetch_package_by_destination($dst_id);
//    echo '<pre>';   print_r($this->data['package_list']); exit;
        $this->load->view('frontend/search-result', $this->data);
    }

}
