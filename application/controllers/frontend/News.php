<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends FrontendController {

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


	/*public function news()
	{
		$this->load->view('layouts/news');

	}*/

	public function index()
    {
        $this->load->model('Get_news');
        $data['front_fetch_data']= $this->Get_news->front_fetch_data();

        $this->load->view('frontend/news',$data);
    }

    public function single_news()
    {
    	$id = $_GET['id'];
        $this->load->model('Get_news');
        $data['single_news_data']= $this->Get_news->single_news_data();
        $data['single_news_data2']= $this->Get_news->single_news_data2();
        $this->load->view('frontend/single_news',$data);
    }

    public function submit_news_comment()
    {
    	$id = $_GET['id'];
        $name = $_GET["name"];
        $email = $_GET["email"];
        $message = addslashes($_GET["message"]);
       
       $queryInsert = $this->db->query("INSERT INTO `news_comment` (`news_id`, `u_name`, `u_email`, `message`) VALUES ('$id', '$name', '$email', '$message');");

        $this->load->model('Get_news');
        $data['single_news_data']= $this->Get_news->single_news_data();
        $data['single_news_data2']= $this->Get_news->single_news_data2();

        $this->load->view('frontend/single_news',$data);
    } 

}
