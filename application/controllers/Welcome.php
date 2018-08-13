<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->library("pagination");
        //$this->isLoggedIn();
    }

	public function index()
	{
		$aboutDetail['aboutview'] = $this->adminModel->getData($tablename='about');
		$aboutDetail['achivementview'] = $this->adminModel->getData($tablename='achivements');
        $aboutDetail['galleryview'] = $this->adminModel->getData($tablename='gallery');

        $this->load->view('home',$aboutDetail);
        // $this->load->view('header');
        //$this->load->view('home',$achivementDetail);
	}
}
