<?php
/**
 * Created by PhpStorm.
 * User: saket
 * Date: 14/06/17
 * Time: 5:46 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos_model extends CI_Model {

    public function upload_single()
    {
        if ( ! $this->upload->do_upload('image')) {
            echo $this->upload->display_errors();
        }
        else {
            $file_data = $this->upload->data();
        }
        $insert_data = Array (
            'image_name'         => $file_data['file_name']
        );
        $this->db->insert('images',$insert_data);

    }

}