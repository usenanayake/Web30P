<?php 

Class Model_user extends CI_Model{

	function insertUserdata(){
	 

	 $data = array(
	 	'username' => $this->input->post('username',TRUE),
	 	'fname' => $this->input->post('fname',TRUE),
	 	'lname' => $this->input->post('lname',TRUE),
	 	'password' => sha1($this->input->post('password',TRUE)),
	 	'password2' => sha1($this->input->post('c_password',TRUE)),
	 	'email' => $this->input->post('email',TRUE),

	 );
	
	 return $this->db->insert('reg',$data);

	}



	function LoginUser(){

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('email',$email);
		$this->db->where('password',$password);

		$respond= $this->db->get('reg');
		if($respond->num_rows()==1){
			return $respond->row(0);
			
		}else{
			return false;
		}
	}

	function questions(){
		$title=$this->input->post('title');
		$content=$this->input->post('content');
		$email=$this->input->post('email');
		$data= array(
			'title' => $title,
			'content' => $content,
			'email' => $email, 
		);	
		return $this->db->insert('questions',$data);

	}
}