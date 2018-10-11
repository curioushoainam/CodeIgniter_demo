<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mySession extends CI_Controller {

	function __construct(){
		// Run the parent _contruct() function first
		parent::__construct();
		
		$this->load->library('session');
	}

	    
	public function index(){
		// Adding Session Data
		// $newdata = array(
		//         'username'  => 'johndoe',
		//         'email'     => 'johndoe@some-site.com',
		//         'logged_in' => TRUE
		// );
		// $this->session->set_userdata($newdata);

		// $this->session->set_userdata('username', 'johndoe');
		// $this->session->set_userdata('email', 'johndoe@some-site.com');
		// $this->session->set_userdata('logged_in', 'TRUE');

		//--------------------------------------------------------
		// Flashdata
		// $this->session->mark_as_flash('username');
		// $this->session->mark_as_flash('email');
		// $this->session->mark_as_flash('logged_in');

		// $this->session->set_flashdata('username', 'johndoe');
		// $this->session->set_flashdata('email', 'johndoe@some-site.com');
		// $this->session->set_flashdata('logged_in', 'TRUE');

		//--------------------------------------------------------
		// Tempdata
		// $this->session->mark_as_temp('username', 10);		// will be erased after 300 seconds
		// $this->session->mark_as_temp(array('email', 'logged_in'), 15);
		// $this->session->mark_as_temp(array(
	 //        'email'  => 15,
	 //        'logged_in' => 13
		// ));

		$this->session->set_tempdata('username', 'johndoe', 10);

		$tempdata = array(
			'email' => 'johndoe@some-site.com',
			'logged_in' => 'TRUE'
		);
		$this->session->set_tempdata($tempdata, NULL, 15);

		// $this->session->tempdata('username');
		$this->session->unset_tempdata('username');
		//--------------------------------------------------------
		// Removing Session Data
		// $this->session->unset_userdata('username');

		// $array_items = array('username', 'email');
		// $this->session->unset_userdata($array_items);

		//--------------------------------------------------------
		// Verify that a session value exists
		// if($this->session->has_userdata('username','email','logged_in')){
		// 	$data = array(
		// 		'username'  => $this->session->username,
		//         'email'     => $this->session->email,
		//         'logged_in' => $this->session->logged_in
		// 	);
		// }
		
		//--------------------------------------------------------
		// Destroying a Session
		$this->session->sess_destroy();

		if(isset($data) && $data)
			$this->load->view('/pages/blank_page', $data);
		else
			$this->load->view('/pages/blank_page', array('msg'=>'no data'));
	} 

	public function home(){
		$this->load->view('/pages/home');
	}
}