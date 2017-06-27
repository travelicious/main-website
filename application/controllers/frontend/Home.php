<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

 class Home extends FrontendController

 {
 	public function index()
 	{

    $this->load->model('frontend/Home_model');
 	$data['dest_list'] = $this->Home_model->fetch_destination_list();

        $this->load->model('Get_news');
        $data['fetch_news'] = $this->Get_news->fetch_data();

        $this->load->model('frontend/Blog_model');
        $data['fetch_blog'] = $this->Blog_model->fetch_data();

       $this->load->model('frontend/Package_model');


 	$data["package_fetch"] =$this->Package_model->best_package_fetch();

	$this->load->view('frontend/home',$data);

 	}
	
	public function categories()
	{
	  $categories  = $this->db->select('*')          
                              ->get('category');
      $categories = $categories->result(); 							  
	  if(!empty($categories))
	  {
		$data['categories'] = $categories; 
        $this->load->view('frontend/categories', $data);		
	  }
	}
	
	
	
	public function getPackage()
	{
	  $categoryId = $this->input->post('category');
	  if(is_numeric($categoryId) && $categoryId > 0)
	  {
		$results = $this->db->select('package_id')
                            ->where('category_id', $categoryId)
                            ->get('category_mapping');				 
							
	    $results = $results->result();
		//print_r($results);
        if(!empty($results))
		{
		  foreach($results as $result)
		  {
		    $results1 = $this->db->select('*')
                                 ->where('id', $result->package_id)
					             ->get('packages');
            $results1 = $results1->result(); 							
            if(!empty($results1))
			{
			  $data['packages'] = $results1;	
			  $this->load->view('frontend/categories', $data);
			}				
		  }					 
		}			
	  }
  	  
	}
	
	
	public function hotDealsOfADay()
	{
	  $id = $this->db->select('id')
	                 ->where('category_name', 'Hot deals of a day')
                     ->get('category');
      $id = $id->result(); 
	  if(!empty($id) && count($id) == 1)
	  {		  
		  foreach($id as $id1)
		  {
			$id = $id1->id;  
		  }
		  $packageIds = $this->db->select('package_id')
								 ->where('category_id', $id)
								 ->limit(6)
								 ->get('category_mapping');
          $packageIds = $packageIds->result(); 
		  $data = array();
		  $i=0;
		  if(!empty($packageIds))
		  {
			  foreach($packageIds as $packageId)
			  {
				$packages = $this->db->select('*')
									 ->where('id', $packageId->package_id)
									 ->get('packages');
				$packages = $packages->result();							 
				if(!empty($packages))
				{
				  $i++;
				  $data['hotPackages'][$i] = $packages;
				}
		     }
		  }		  
	  }	  
      
	  $this->load->view('frontend/hot-deals');
	}

 
    public function searched_package()
     {
    	 $this->load->model('frontend/Home_model');

        $dst_id = $this->input->post('dest_name');
          $data['package_list'] = $this->Home_model->fetch_package_by_destination($dst_id);
//    echo '<pre>';   print_r($this->data['package_list']); exit;
        $this->load->view('frontend/search-result', $data);
    }
}



?>