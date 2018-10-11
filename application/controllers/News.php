<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct(){
		// Run the parent _contruct() function first
		parent::__construct();
		// then run __contruct() of itself		
	}

	public function catalog(){
		// load a model
		$this->load->model('news_model');
		
		// Call a function of the model
        $catalog = $this->news_model->getTheloai();

        echo "<pre>";
        print_r($catalog);
        echo "</pre>";

    }       
    
}