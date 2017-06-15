<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inclusion_exclusion extends BackendController {

    
    public function inclusion()
    {
        $this->load->model('Inclusion_exclusion_model');
        $data['fetch_data']= $this->Inclusion_exclusion_model->fetch_data();

        $this->load->view('admin/inclusion_exclusion/inclusion',$data);
    }


    public function exclusion()
    {
        $this->load->model('Inclusion_exclusion_model');
        $data['fetch_item']= $this->Inclusion_exclusion_model->fetch_item();

        $this->load->view('admin/inclusion_exclusion/exclusion',$data);
    }





    public function add_inclusion_exclusion()
    {
        $this->load->view('admin/inclusion_exclusion/add_inclusion_exclusion');
    }




    public function submit_inclusion_exclusion()
    {
        $text = addslashes($_POST["text"]);
        $type = $_POST["type"];
       
  
       	if ($type==inclusion) {
       		$queryInsert = $this->db->query("INSERT INTO `inclusion_exclusion` (`text`, `type`) VALUES ('$text', '$type')");
       		redirect('admin/inclusion_exclusion/inclusion');
       	}
       	elseif($type==exclusion){
       		$queryInsert = $this->db->query("INSERT INTO `inclusion_exclusion` (`text`, `type`) VALUES ('$text', '$type')");
       		redirect('admin/inclusion_exclusion/exclusion');
       	}
       	else{
       		redirect('admin/inclusion_exclusion/add_inclusion_exclusion');
       	}
        

    }




    public function edit_inclusion_exclusion()
    {

        $id = $_GET['id'];
        
        $this->load->model('Inclusion_exclusion_model');
       
        $data['fetch_value']= $this->Inclusion_exclusion_model->fetch_value();
        //exit;
        $this->load->view('admin/inclusion_exclusion/edit_inclusion_exclusion',$data);
    }




    public function save_inclusion_exclusion()
    {
        $id = $_POST['id'];
       // echo $id;exit;
        $text = addslashes($_POST["text"]);
        //echo $text;exit;
        $type = $_POST["type"];
       
       if ($type==inclusion) {
       $queryUpdate = $this->db->query("UPDATE inclusion_exclusion SET text = '$text' , type = '$type' where id = '".$id."'");
       redirect('admin/inclusion_exclusion/inclusion');
        }
        elseif($type==exclusion){
        	$queryUpdate = $this->db->query("UPDATE inclusion_exclusion SET text = '$text' , type = '$type' where id = '".$id."'");
       redirect('admin/inclusion_exclusion/exclusion');
        }
    }



    public function delete_inclusion()
    {
        $id = $_GET['id'];
        $queryDelete = $this->db->query("DELETE FROM inclusion_exclusion WHERE id= '$id' ");

        redirect('admin/inclusion_exclusion/inclusion');
    }



    public function delete_exclusion()
    {
        $id = $_GET['id'];
        $queryDelete = $this->db->query("DELETE FROM inclusion_exclusion WHERE id= '$id' ");

        redirect('admin/inclusion_exclusion/exclusion');
    }





}