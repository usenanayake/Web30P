<?php 

Class mproduct extends CI_Model{

	public function findAll(){

		return $this->db->get('product')->result();

	}

	function find($id){

	$ths->db->where('id',$id);
	return $this->db->get('product')->row();
	}


function fetch_data(){
	$query= $this->db->get('product');
	return $query;	
}
}