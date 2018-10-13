<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

	function __construct(){		
		parent::__construct();
		$this->load->helper('url');		
	}

	public function index(){
		$this->load->model('Pagination_model');		

		$config['total_rows'] = $this->Pagination_model->countAll();
		$config['base_url'] = base_url()."index.php/Pagination/index";
		$config['per_page'] = 50;
		$config['num_links'] = 5;				// display how many page's links after the current pages
		$config['use_page_numbers'] = TRUE;		// display /2 : page-number position
		$this->load->library('pagination', $config);	// implement the pagination function

		$start = $this->uri->segment(3);		// = $_GET['page_number'] where ../index.php/Pagination/index/???, Pagination = controller => 1; index = action => 2;  $start => 3 : page position
		$data = array(
			'data'=> $this->Pagination_model->getData($config['per_page'], $start*$config['per_page']),
			'pagination'=> $this->pagination->create_links()
		);
		$this->load->view('pages/pagination', $data);
    }   

}