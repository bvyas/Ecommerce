<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {
	public function index()
	{
		$this->load->view('show1');
	}
	public function add()
	{
		$this->load->model('product');


	}
	public function show()
	{
		$this->load->view('show');

	}
	public function oder()
	{
		$this->load->view('order');

	}
	public function edit()
	{
		$this->load->view('products');

	}
}

//end of main controller