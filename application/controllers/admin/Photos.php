<?php
/**
 * Created by PhpStorm.
 * User: saket
 * Date: 14/06/17
 * Time: 4:59 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends BackendController {


    public function index()
    {

    }

    public function add()
    {

    }

    public function upload()
    {
        if($this->input->post())
        {
            $this->load->model('admin/Photos_model');
            $this->Photos_model->upload_single();
        }

    }

    public function multiple_upload()
    {

        $number_of_files_uploaded = count($_FILES['images']['name']);
        // Faking upload calls to $_FILE
        for ($i = 0; $i < $number_of_files_uploaded; $i++) :
            $_FILES['userfile']['name']     = $_FILES['images']['name'][$i];
            $_FILES['userfile']['type']     = $_FILES['images']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
            $_FILES['userfile']['error']    = $_FILES['images']['error'][$i];
            $_FILES['userfile']['size']     = $_FILES['images']['size'][$i];

            if ( ! $this->upload->do_upload()) :
                $error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_form', $error);
            else :
                //$final_files_data[] = $this->upload->data();

                $file_data = $this->upload->data();
                $insert_data = Array (
                    'image_name'         => $file_data['file_name']
                );
                $this->db->insert('images',$insert_data);
            endif;
        endfor;
    }

}