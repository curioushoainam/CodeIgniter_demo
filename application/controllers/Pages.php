<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct(){
		// Run the parent _contruct() function first
		parent::__construct();
		// then run __contruct() of itself
	}

	public function index(){
		echo 'Hello world';
    }   

    public function view(){    
    // data need to transfer to the view
    	$data = array(
    		'title' => 'Demo view',
    		'msg' => 'this is a main contents'
    	);

    	$this->load->view('pages/home', $data);
    }

    public function layout(){
    	$this->template['header'] = $this->load->view('gadget/header', '', TRUE);
    	$this->template['menu'] = $this->load->view('gadget/menu','', TRUE);
    	$this->template['page'] = $this->load->view('pages/home', '', TRUE);
    	$this->template['footer'] = $this->load->view('gadget/footer', '', TRUE);

    	$this->load->view('master_layout', $this->template);
    }

    public function about(){
	// about is the about.php in the views/pages/ folder
    	$this->load->view('/pages/about');
    }
}