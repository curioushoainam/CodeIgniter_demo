<?php 
class Pagination_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	public function countAll(){
		return $this->db->count_all('tintuc');
	}

	public function getData($total, $start){
		$this->db->limit($total, $start);
		$query = $this->db->get('tintuc');
		return $query->result_array();
	}
}

?>
