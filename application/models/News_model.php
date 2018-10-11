<?php
class News_model extends CI_Controller {	

	function __construct(){
		// Run the parent _contruct() function first
		parent::__construct();
		// then run __contruct() of itself
		 $this->load->database();	
		 // load library database (codeigniter has many libraries)
	}

	public function getTheloai(){		
		//$query=$this->db->query("SELECT * FROM theloai order By id");
    	$query = $this->db->get('theloai');
        $data=$query->result_array();

        return $data;
    }       
}