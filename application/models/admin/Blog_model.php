<?php
class Blog_model extends CI_Model{
function __construct() {
parent::__construct();
}


  public function fetch_data()  
      {  
         //data is retrive from this query  
        // $query = $this->db->get('blogs'); 
         $query = $this->db->query("select * from blogs order by id desc"); 
         return $query;  
         //select* from blogs
      }  


//  function form_insert($data){
// // Inserting in Table(students) of Database(college)
// $this->db->insert('blogs', $data);
//  }

 public function insert()
    {
        if ( ! $this->upload->do_upload('files')) {
            echo $this->upload->display_errors();
        }
        else {
            $file_data = $this->upload->data();
        }

        $insert_data = Array (
            'url'           => $this->input->post('url'),
            'title'         => $this->input->post('title'),
         
            'image'         => $file_data['file_name'],

            'description'   => $this->input->post('description'),
            'author'        => $this->input->post('author')
        );
        $this->db->insert('blogs',$insert_data);
    }




}
?>