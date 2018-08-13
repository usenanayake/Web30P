<?php


class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->library("pagination");
        //$this->isLoggedIn();
    }

public function index(){

	$data['messages']= $this->adminModel->Messagecount();
	$data['items']= $this->adminModel->Itemcount();
	$data['images']= $this->adminModel->Imagecount();

	$this->load->view('Admin/admin',$data);
	}
}