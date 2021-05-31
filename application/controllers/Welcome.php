<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->helper('url');
		$this->load->model('hotel');
	}
	
	public function aboutUs()
	{
		$this->load->view('about-us');
	}
	public function rooms()
	{
		$this->load->model('hotel');
		
		$posts = $this->hotel->getPosts();
		$costs = $this->hotel->getCosts();
		$prices = $this->hotel->getPrices();
		$this->load->view('rooms', compact(['posts', 'costs', 'prices']));
		
		
	}
	public function services()
	{
		$this->load->view('services');
	}
	public function news()
	{
		$this->load->view('news');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function signin()
	{
		$this->load->view('signin');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	public function book_sd_room()
	{
		$this->load->view('book-standard-room');
	}
	public function book_db_room()
	{
		$this->load->view('book-double-room');
	}
	public function book_sp_room()
	{
		$this->load->view('book-special-room');
	}
		public function book_standard_room(){
		        $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');

                if ($this->form_validation->run())
                {
                       $data = $this->input->post();
                       $today = date('y-m-d');
                       $data['date'] = $today;
                       unset($data[submit]);
                       $this->load->model('hotel');
                     if ($this->hotel->book_standard_room($data)){
                     	$this->session->set_flashdata('msg', 'Booked Successfully');
                     }
                     else
                     {
                     	$this->session->set_flashdata('msg', 'Booked Failed');
                     }
                     return redirect('index.php/welcome/rooms');
                }
                else
                {
                         return redirect('index.php/welcome/rooms');
                }
	}
	
	public function book_double_room(){
		        $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');

                if ($this->form_validation->run())
                {
                       $data = $this->input->post();
                       $today = date('y-m-d');
                       $data['date'] = $today;
                       unset($data[submit]);
                       $this->load->model('hotel');
                     if ($this->hotel->book_double_room($data)){
                     	$this->session->set_flashdata('msg', 'Booked Successfully');
                     }
                     else
                     {
                     	$this->session->set_flashdata('msg', 'Booked Failed');
                     }
                     return redirect('index.php/welcome/rooms');
                }
                else
                {
                         return redirect('index.php/welcome/rooms');
                }
	}
	public function book_special_room(){
		        $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');

                if ($this->form_validation->run())
                {
                       $data = $this->input->post();
                       $today = date('y-m-d');
                       $data['date'] = $today;
                       unset($data[submit]);
                       $this->load->model('hotel');
                     if ($this->hotel->book_special_room($data)){
                     	$this->session->set_flashdata('msg', 'Booked Successfully');
                     }
                     else
                     {
                     	$this->session->set_flashdata('msg', 'Booked Failed');
                     }
                     return redirect('index.php/welcome/rooms');
                }
                else
                {
                         return redirect('index.php/welcome/rooms');
                }
	}
	

}
