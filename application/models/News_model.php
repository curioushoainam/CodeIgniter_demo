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
    	// $query = $this->db->get('theloai');

    	$this->db->select('id,Ten,TenKhongDau');	// id, Ten, ... are the field on the table
    	// $this->db->order_by("id", "desc");
    	// $this->db->limit(5,0);	
    	$this->db->where("id >","0");	
		// $this->db->join();
		// $this->db->like();
		// $this->db->select_min();
		// $this->db->select_max();
    	$query = $this->db->get('theloai');				// theloai is a table
    	// $query = $this->db->get('theloai', 3,0);				// theloai is a table, get 3 result rows and start at 0 position
        return $query->result_array();
    }

    public function addTheloai(){
    	$data = array(
    		'Ten'=>'Chuyện cười',
    		'TenKhongDau'=>'Chuyen-cuoi'
    	);

    	return $this->db->insert('theloai', $data);
    }   

    public function updateTheloai(){
    	$data = array(
    		'Ten'=>'Clip hay',
    		'TenKhongDau'=>'Clip-hay'
    	);
    	$this->db->where('id',11);
    	return $this->db->update('theloai', $data);
    }   

    public function deleteTheloai(){
    	$this->db->where('id',9);
    	return $this->db->delete('theloai');
    } 
}