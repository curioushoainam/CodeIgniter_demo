<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// Initial function
	function __construct(){
		// Run the parent _contruct() function first
		parent::__construct();
		// then run __contruct() of itself
	}

	public function index(){
	// this is a default function and run when the path is ../index.php/Pages/
    	echo 'Hello world !';
    }

    public function myFunc(){
	// run when ../index.php/Pages/myFunc
    	echo 'My function is ready !';
    }

    public function myFunc2($id='', $msg=''){
	// run when ../index.php/Pages/myFunc2/01/vhd where $id = 01 and $msg = vhd
    	echo 'My function is ready. ID is '.$id.' and msg is '.$msg;
    }
}