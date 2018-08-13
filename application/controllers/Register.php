<?php


class Register extends CI_Controller {

public function RegisterUser(){

$this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('fname', 'First Name', 'required');
$this->form_validation->set_rules('lname', 'Last Name', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[password]');


 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('registration');
                }
                else
                {
                       $this->load ->model('Model_user');
                       $response= $this->Model_user ->insertUserdata();

                       if($response){
                       	$this->session->set_flashdata('msg','register sucess');
                       	redirect('Users');
                       }else{
                       	$this->session->set_flashdata('msg','register not sucess');
                       	redirect('Users');
                       }
                }

}

public function questions(){
  //$this->load->view('header');
  $this->load->view('questions');
  
  
}
public function askquestions(){
  $this->load->model('Model_user');
  $this->Model_user->questions();
  $this->load->view('questions');

}

}