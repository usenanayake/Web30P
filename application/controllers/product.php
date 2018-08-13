<?php if(!Defined ('BASEPATH')) exit ('No direct script access allowed');

Class product extends CI_Controller{

	public function index(){
		 $this->load ->model('mproduct');
		$data['result']= $this->mproduct->findAll();
		$this->load->view('index',$data);
	}

	public function ind(){
		$this->load->model('mproduct');
		$data['fetch_data']= $this->mproduct->fetch_data();
		$this->load->view('index',$data);
	}

} 