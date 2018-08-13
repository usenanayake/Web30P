<?php

class Message extends CI_Controller{
	

	public function insert_Messages(){
		 $this->load->helper(array('form', 'url'));
		 $this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('message','Name','required');

		if($this->form_validation->run()==FALSE)
		{
			 $this->load->view('message');

		}else{
			$this->load->model('Model_Message');
			$response = $this->Model_Message->insertNewMesssages();
			if($response){
				echo '<script>alert("You Have Successfully send the message");window.location.href = "toHome";</script>';
				//redirect('Welcome');

			}
		}

	
	}

	public function index()
	{
		$this->load->view('message.php');
	}

	public function toHome()
	{
		$this->load->view('message.php');
	}

	public function viewMessages() {

		$this->load->model('Model_Message');
			 $this->Model_Message->insertNewMesssages();
		$records =  $this->Model_Message->getMessages();
		$this->load->view('users_view', ['records' => $records]);
		
	}


	public function reply($id) {
         
		//$this->load->model('Model_Message');
	    //$this->Model_Message->insertNewMesssages();
		//$records =  $this->Model_Message->getMessages();
		//$this->load->view('users_view', ['records' => $records]);
		
	}


}