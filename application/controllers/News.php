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
        // $catalog = $this->news_model->getTheloai();

        $data = array(
        	'catalog'=> $this->news_model->getTheloai()
        );

        $this->load->view('pages/home', $data);

    }     

    public function addCatalog(){
		// load a model
		$this->load->model('news_model');		

        $res = $this->news_model->addTheloai();
        if($res)
        	echo 'Inserted successfully';
        else
        	echo 'Failed to insert';

    }  

    public function updateCatalog(){
		// load a model
		$this->load->model('news_model');		

        $res = $this->news_model->updateTheloai();
        if($res)
        	echo 'Updated successfully';
        else
        	echo 'Failed to update';

    }  

    public function deleteCatalog(){
        // load a model
        $this->load->model('news_model');       

        $res = $this->news_model->deleteTheloai();
        if($res)
            echo 'Deleted successfully';
        else
            echo 'Failed to delete';

    }         
    

}