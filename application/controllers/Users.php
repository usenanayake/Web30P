<?php if(!Defined ('BASEPATH')) exit ('No direct script access allowed');

Class Users extends CI_Controller{
	public function index(){
		$this->load->view('Login.php');
	}
	public function Login(){
		$this->load->view('Login.php');
	}
}