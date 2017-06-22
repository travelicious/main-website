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
        $data['front_latest_news']= $this->Get_news->front_latest_news();
        $data['front_most_visited_news']= $this->Get_news->front_most_visited_news();
        $this->load->view('frontend/news/news',$data);
    }

    public function single_news($url)
    {
    	//$id = $_GET['id'];

        $this->load->model('Get_news');
        $data['view_counts']= $this->Get_news->view_counts($url);
        $data['front_single_news']= $this->Get_news->front_single_news($url);
        $data['front_single_news_comment']= $this->Get_news->front_single_news_comment($url);

        $this->load->view('frontend/news/single_news',$data);
    }

    public function submit_news_comment()
    {
    	$url = $_GET['url'];
        $name = $_GET["name"];
        $email = $_GET["email"];
        $message = addslashes($_GET["message"]);
       
       $queryInsert = $this->db->query("INSERT INTO `news_comment` (`url`, `u_name`, `u_email`, `message`) VALUES ('$url', '$name', '$email', '$message');");

        /*$this->load->model('Get_news');
        $data['front_single_news']= $this->Get_news->front_single_news($url);
        $data['front_single_news_comment']= $this->Get_news->front_single_news_comment($url);

        $this->load->view('frontend/news/',$data);*/
        redirect('frontend/news');
    } 

}
