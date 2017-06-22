<?php

/**
 * Created by PhpStorm.
 * User: saket
 * Date: 14/06/17
 * Time: 4:59 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends BackendController {

    public function index() {
        // this is default layout without the center body , center body is passed with the variable 

        $data['page_title'] = 'view image';

        $this->load->model('admin/Photos_model');

        $data['photos_fetch'] = $this->Photos_model->photos_fetch();



        // this is default layout without the center body , center body is passed with the variable body_vie


        $this->load->view('admin/photos/view', $data);
    }

    /* ________________________________________ Delete News ________________________________  */

    public function delete_photos() {
        $id = $_GET['id'];
        $queryDelete = $this->db->query("DELETE FROM images WHERE id= '$id' ");

        redirect('admin/photos');
    }

    /* ________________________________________ Delete News End________________________________  */

    public function add() {
        $data['page_title'] = 'Upload An Image';

        //this is center body view passed as variable
        $data['body_view'] = 'admin/photos/add';
//        $this->load->view('admin/layouts/JS_Include');
        // this is default layout without the center body , center body is passed with the variable body_view
        $this->load->view('admin/layouts/home', $data);
    }

    public function upload() {
        if ($this->input->post()) {
            $this->load->model('admin/Photos_model');
            $this->Photos_model->upload_single();
        }
    }

    public function image_upload() {

        $config['upload_path'] = "./assets/images";
        $config['allowed_types'] = "*";
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config); // Make sure it has been initialized

        if (!$this->upload->do_upload('images')) {
//            $error = array('error' => $this->upload->display_errors());
            echo json_encode(array('st' => 0));
        } else {
            $upload_data = $this->upload->data();
            $arr_image = array('upload_data' => $this->upload->data());
            $image = $upload_data['file_name'];
            $data = array(
                'image_name' => $image,
                'image_tiltle' => $this->input->post('img_title'),
                'img_alt' => $this->input->post('img_alt'),
            );
            $ok = $this->db->insert('images', $data);
            if ($ok) {
                echo json_encode(array('st' => 1));
            }
        }
    }
    public function delete_photo($id) {
       $ok =  $this->db->query("delete from images where id = $id");
       if($ok){
           $this->index();
       }
    }

}
