<?php  
class Model_Message extends CI_Model{
	
	function insertNewMesssages(){

	     $data = array(
	     	'name' =>$this->input->post('name'),
	     	'email' =>$this->input->post('email'),
	     	'message' =>$this->input->post('message')
	     	 );

	     return $this->db->insert('message',$data);
	}


	 public function getMessages($data)  
      {  
        $this->db->select('*');
		$this->db->from('message');
		$this->db->order_by('id');
		$query = $this->db->get();

        return $query->result(); }
}